(function (root) {
  'use strict';
  var length = function (value) { return Array.from(value).length; };
  function validate(values, rules) {
    values = Object.assign({ form_kind: '', name: '', email: '', phone: '', message: '' }, values);
    var errors = {}, kind = values.form_kind;
    if (!['enquiry', 'contact', 'journal'].includes(kind)) errors.form_kind = 'This form is not supported.';
    if (!values.email || length(values.email) > rules.email_max || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(values.email)) errors.email = 'Please check your email address and try again.';
    if (kind !== 'journal') {
      if (length(values.name) < rules.name_min || length(values.name) > rules.name_max || /[\x00-\x1f\x7f]/.test(values.name)) errors.name = 'Enter a name between ' + rules.name_min + ' and ' + rules.name_max + ' characters.';
      var digits = values.phone.replace(/\D/g, '').length;
      if (!/^\+?[0-9(). -]+$/.test(values.phone) || values.phone.length > 40 || digits < rules.phone_min_digits || digits > rules.phone_max_digits) errors.phone = 'Enter a phone number with ' + rules.phone_min_digits + ' to ' + rules.phone_max_digits + ' digits.';
      if (length(values.message) < rules.message_min || length(values.message) > rules.message_max || /[\x00-\x08\x0b\x0c\x0e-\x1f\x7f]/.test(values.message)) errors.message = 'Enter a message between ' + rules.message_min + ' and ' + rules.message_max + ' characters.';
    }
    return errors;
  }
  function fileError(file, rules) {
    if (!file || (!file.name && file.size === 0)) return '';
    var extension = file.name.split('.').pop().toLowerCase();
    if (!Object.prototype.hasOwnProperty.call(rules.upload_types, extension) || (file.type && rules.upload_types[extension] !== file.type)) return 'Please upload a PDF, PNG, JPG, or JPEG file.';
    if (!file.size || file.size > rules.upload_max_bytes) return 'Choose a nonempty file no larger than ' + Math.round(rules.upload_max_bytes / 1048576) + ' MB.';
    return '';
  }
  var api = { validate: validate, fileError: fileError };
  if (typeof module !== 'undefined' && module.exports) module.exports = api;
  if (!root.document) return;
  root.SiteForms = api;
  var rules = root.SiteFormRules, counter = 0;
  if (!rules) return;

  root.document.querySelectorAll('[data-site-form]').forEach(function (form) {
    form.noValidate = true;
    var busy = false, attempted = false;
    var status = form.querySelector('[data-form-status]');
    if (!status) status = form.parentElement.querySelector('[data-journal-status]');
    var statusClass = status ? status.className : '';
    function setStatus(message, error) {
      if (!status) return;
      status.textContent = message;
      status.className = statusClass + (error ? ' is-err' : '');
      status.setAttribute('role', 'status');
    }
    function fieldFor(name) { return form.elements.namedItem(name); }
    function clearError(name) {
      var field = fieldFor(name);
      if (!field || !field.getAttribute) return;
      field.removeAttribute('aria-invalid');
      var id = field.getAttribute('data-error-id');
      if (!id) return;
      var error = root.document.getElementById(id);
      if (error) error.textContent = '';
      var described = (field.getAttribute('aria-describedby') || '').split(/\s+/).filter(function (value) { return value && value !== id; }).join(' ');
      if (described) field.setAttribute('aria-describedby', described); else field.removeAttribute('aria-describedby');
    }
    function showError(name, message) {
      var field = fieldFor(name);
      if (!field || !field.getAttribute || field.type === 'hidden') return;
      var id = field.getAttribute('data-error-id'), error = id && root.document.getElementById(id);
      if (!error) {
        error = name === 'manuscript' ? form.querySelector('[data-ct-file-err]') : null;
        if (!error) {
          error = root.document.createElement('small');
          error.className = 'field-error';
          (field.closest('.field, .ct-field') || form).appendChild(error);
        }
        id = error.id || 'form-error-' + (++counter);
        error.id = id;
        field.setAttribute('data-error-id', id);
      }
      field.setAttribute('aria-invalid', 'true');
      var described = (field.getAttribute('aria-describedby') || '').split(/\s+/).filter(Boolean);
      if (!described.includes(id)) described.push(id);
      field.setAttribute('aria-describedby', described.join(' '));
      error.textContent = message;
    }
    function values() {
      var result = {};
      ['form_kind', 'name', 'email', 'phone', 'message'].forEach(function (key) {
        var field = fieldFor(key);
        result[key] = field ? field.value.trim() : '';
      });
      return result;
    }
    function errorsForForm() {
      var errors = validate(values(), rules), upload = fieldFor('manuscript');
      var error = upload ? fileError(upload.files[0], rules) : '';
      if (error) errors.manuscript = error;
      return errors;
    }
    function displayErrors(errors) {
      ['name', 'email', 'phone', 'message', 'manuscript'].forEach(clearError);
      Object.keys(errors).forEach(function (key) { showError(key, errors[key]); });
    }
    form.addEventListener('input', function (event) {
      if (!attempted || !event.target.name) return;
      var errors = errorsForForm(), name = event.target.name;
      clearError(name);
      if (errors[name]) showError(name, errors[name]);
    });
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      if (busy) return;
      attempted = true;
      var errors = errorsForForm();
      displayErrors(errors);
      if (Object.keys(errors).length) {
        setStatus('Please review the marked fields before sending.', true);
        var first = form.querySelector('[aria-invalid="true"]');
        if (first) first.focus();
        return;
      }
      var buttons = Array.from(form.querySelectorAll('[type="submit"]'));
      var states = buttons.map(function (button) { return button.disabled; });
      busy = true;
      form.setAttribute('aria-busy', 'true');
      buttons.forEach(function (button) { button.disabled = true; });
      setStatus('Sending your enquiry…', false);
      var controller = new AbortController();
      var timeout = root.setTimeout(function () { controller.abort(); }, 30000);
      root.fetch(form.action, { method: 'POST', body: new FormData(form), credentials: 'same-origin', headers: { Accept: 'application/json' }, signal: controller.signal })
        .then(function (response) {
          return response.json().then(function (result) {
            if (!response.ok || result.success !== true) {
              displayErrors(result.errors || {});
              setStatus(result.message || 'We could not send your enquiry. Please try once more.', true);
              var first = form.querySelector('[aria-invalid="true"]');
              if (first) first.focus();
              return;
            }
            form.reset();
            attempted = false;
            displayErrors({});
            setStatus(result.message, false);
          });
        })
        .catch(function () { setStatus('We could not confirm your submission. Please check your connection and try again, or contact us by phone or email.', true); })
        .finally(function () {
          root.clearTimeout(timeout);
          busy = false;
          form.removeAttribute('aria-busy');
          buttons.forEach(function (button, index) { button.disabled = states[index]; });
        });
    });

    var upload = fieldFor('manuscript'), box = form.querySelector('[data-ct-file]');
    if (upload && box) {
      var label = box.querySelector('[data-ct-file-name]'), emptyLabel = label.textContent;
      var button = box.querySelector('[data-ct-file-btn]'), remove = box.querySelector('[data-ct-file-remove]');
      function previewFile() {
        var file = upload.files[0], error = fileError(file, rules);
        clearError('manuscript');
        if (error) showError('manuscript', error);
        box.classList.toggle('is-set', !!file);
        box.classList.toggle('is-err', !!error);
        label.textContent = file ? file.name + ' (' + (file.size / 1048576).toFixed(2) + ' MB)' : emptyLabel;
        button.textContent = file ? 'Change file' : 'Upload Manuscript';
        remove.hidden = !file;
      }
      upload.addEventListener('change', previewFile);
      remove.addEventListener('click', function () { upload.value = ''; previewFile(); upload.focus(); });
      form.addEventListener('reset', function () { root.setTimeout(previewFile, 0); });
    }
  });
})(typeof window !== 'undefined' ? window : globalThis);
