<input type="hidden" name="csrf_token" value="<?= component_escape(form_csrf_token()) ?>">
<input type="hidden" name="form_kind" value="<?= component_escape($props['kind'] ?? 'enquiry') ?>">
<div class="form-honeypot" aria-hidden="true"><label>Leave this field empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
