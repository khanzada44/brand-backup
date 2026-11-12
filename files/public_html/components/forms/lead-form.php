<form method="post" action="api/contact.php" enctype="multipart/form-data" data-site-form class="lead-form glass"<?php if (!empty($props['id'])): ?> id="<?= component_escape($props['id']) ?>"<?php endif; ?> data-lead-form data-reveal="scale" style="--d:.1s" aria-labelledby="form-title">
      <?php render_component('forms/security'); ?>
      <h3 class="lead-form__title" id="form-title"><?= component_escape($props['title'] ?? 'Share your book plans') ?></h3>
      <p class="lead-form__sub">Describe your book, draft or publishing plans. We will review your message and get in touch.</p>
      <div class="lead-form__grid">
        <?php render_component('forms/contact-fields'); ?>
        <label class="field field--full"><textarea required minlength="<?= form_rules()['message_min'] ?>" maxlength="<?= form_rules()['message_max'] ?>" name="message" placeholder=" " rows="<?= (int) ($props['rows'] ?? 4) ?>"></textarea><span><?= component_escape($props['messageLabel'] ?? 'What would you like help with?') ?> *</span></label>
      </div>
      <?php render_component('forms/consent'); ?>
      <?php render_component('forms/submit-footer'); ?>
    </form>
