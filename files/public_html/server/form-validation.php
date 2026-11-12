<?php
function form_validate(array $input, array $rules): array
{
    $errors = [];
    $data = [];
    foreach (['form_kind', 'name', 'email', 'phone', 'message', 'stage', 'marketing_consent', 'website'] as $key) {
        if (isset($input[$key]) && (!is_string($input[$key]) || !mb_check_encoding($input[$key], 'UTF-8'))) {
            $errors[$key] = 'Please enter a valid value.';
            $data[$key] = '';
        } else {
            $data[$key] = trim($input[$key] ?? '');
        }
    }
    if (!in_array($data['form_kind'], ['enquiry', 'contact', 'journal'], true)) $errors['form_kind'] = 'This form is not supported.';
    if ($data['website'] !== '') $errors['website'] = 'The form could not be submitted.';
    if (mb_strlen($data['email']) > $rules['email_max'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Please check your email address and try again.';
    if ($data['form_kind'] !== 'journal') {
        $length = mb_strlen($data['name']);
        if ($length < $rules['name_min'] || $length > $rules['name_max'] || preg_match('/[\x00-\x1f\x7f]/u', $data['name'])) $errors['name'] = "Enter a name between {$rules['name_min']} and {$rules['name_max']} characters.";
        $digits = strlen(preg_replace('/\D/', '', $data['phone']));
        if (!preg_match('/^\+?[0-9(). -]+$/D', $data['phone']) || strlen($data['phone']) > 40 || $digits < $rules['phone_min_digits'] || $digits > $rules['phone_max_digits']) $errors['phone'] = "Enter a phone number with {$rules['phone_min_digits']} to {$rules['phone_max_digits']} digits.";
        $length = mb_strlen($data['message']);
        if ($length < $rules['message_min'] || $length > $rules['message_max'] || preg_match('/[\x00-\x08\x0b\x0c\x0e-\x1f\x7f]/u', $data['message'])) $errors['message'] = "Enter a message between {$rules['message_min']} and {$rules['message_max']} characters.";
    } else {
        // The journal form only collects email; discard unrelated display/header data.
        $data['name'] = '';
        $data['phone'] = '';
        $data['message'] = '';
    }
    if (!in_array($data['marketing_consent'], ['', '1'], true)) $errors['marketing_consent'] = 'Invalid consent value.';
    $services = $input['services'] ?? [];
    if (!is_array($services) || count($services) > count($rules['services'])) {
        $errors['services'] = 'Please choose valid services.';
        $services = [];
    }
    foreach ($services as $service) {
        if (!is_string($service) || !in_array($service, $rules['services'], true)) $errors['services'] = 'Please choose valid services.';
    }
    if ($data['stage'] !== '' && !in_array($data['stage'], $rules['stages'], true)) $errors['stage'] = 'Please choose a valid book stage.';
    $data['services'] = isset($errors['services']) ? [] : array_values(array_unique($services));
    return [$data, $errors];
}

function form_validate_upload(array $files, array $rules): array
{
    $file = $files['manuscript'] ?? null;
    if ($file === null) return [null, null];
    if (!is_array($file)) return [null, 'Please choose one valid file.'];
    $limitMb = (int) ceil($rules['upload_max_bytes'] / 1048576);
    foreach (['error', 'name', 'tmp_name', 'size'] as $key) {
        if (!isset($file[$key]) || is_array($file[$key])) return [null, 'Please choose one valid file.'];
    }
    if ($file['error'] === UPLOAD_ERR_NO_FILE) return [null, null];
    if (in_array($file['error'], [UPLOAD_ERR_INI_SIZE, UPLOAD_ERR_FORM_SIZE], true)) return [null, "The file is too large. Maximum size is {$limitMb} MB."];
    if ($file['error'] !== UPLOAD_ERR_OK || !is_uploaded_file($file['tmp_name'])) return [null, 'The file upload failed. Please try again.'];
    $size = filesize($file['tmp_name']);
    if (!$size || $size > $rules['upload_max_bytes']) return [null, "Choose a nonempty file no larger than {$limitMb} MB."];
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $mime = (new finfo(FILEINFO_MIME_TYPE))->file($file['tmp_name']);
    if (!isset($rules['upload_types'][$extension]) || $mime !== $rules['upload_types'][$extension]) return [null, 'Please upload a valid PDF, PNG, JPG, or JPEG file.'];
    if ($mime !== 'application/pdf' && @getimagesize($file['tmp_name']) === false) return [null, 'The image file is invalid.'];
    $name = basename(str_replace('\\', '/', $file['name']));
    $name = substr(preg_replace('/[^a-zA-Z0-9._-]/', '_', $name), 0, 140);
    return [['path' => $file['tmp_name'], 'name' => $name, 'mime' => $mime], null];
}
