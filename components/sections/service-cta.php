<section class="cta on-dark ns-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="<?= component_escape($props['image']) ?>" alt="" loading="lazy" decoding="async" data-parallax="0.08">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal><?= $props['eyebrowHtml'] ?></p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s"><?= $props['titleHtml'] ?></h2>
      <p class="lead" data-reveal style="--d:.16s">Share the book you have in mind and the support you need. We will review your enquiry and contact you.</p>
      <div class="ns-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us</a>
      </div>
    </div>
    <?php render_component('forms/lead-form'); ?>
  </div>
</section>
