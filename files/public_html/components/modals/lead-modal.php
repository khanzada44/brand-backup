<dialog class="modal" id="lead-modal" data-lead-modal aria-labelledby="modal-title">
  <div class="modal__panel glass on-dark">
    <button class="modal__close icon-btn" type="button" aria-label="Close" data-close-modal><svg aria-hidden="true"><use href="#i-close"/></svg></button>
    <p class="eyebrow">Discuss your book project</p>
    <h2 class="h3" id="modal-title">Where are you with your book?</h2>
    <form method="post" action="api/contact.php" enctype="multipart/form-data" data-site-form class="lead-form lead-form--modal" data-lead-form>
      <?php render_component('forms/security'); ?>
      <div class="lead-form__grid">
        <?php render_component('forms/contact-fields'); ?>
        <label class="field field--full"><textarea required minlength="<?= form_rules()['message_min'] ?>" maxlength="<?= form_rules()['message_max'] ?>" name="message" placeholder=" " rows="3"></textarea><span>What would you like help with? *</span></label>
      </div>
      <?php render_component('forms/consent'); ?>
      <?php render_component('forms/submit-footer'); ?>
    </form>
  </div>
</dialog>
