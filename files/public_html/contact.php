<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'contact.php';
$pageScripts = ['assets/js/contact2f72.js?v=20261104-forms', 'assets/js/real-work2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/contact2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Talk to Us About Your Book | <?= site_text('project_name') ?></title>
  <meta name="description" content="Tell us about your idea, manuscript or published book. Ask about writing, editing, design, publishing and promotion support for your next step.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Talk to Us About Your Book | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Tell us about your idea, manuscript or published book. Ask about writing, editing, design, publishing and promotion support for your next step.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-contact">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#ct-form', 'section' => 'ct-form', 'label' => 'Enquiry form', 'icon' => '#i-pen', 'text' => 'Form']
]]); ?>

<main id="main">
<section class="ct" id="contact" aria-labelledby="ct-title">

  <div class="ct-open" id="top">
    <div class="container">
      <div class="ct-rule ct-rv" aria-hidden="true"><span><?= site_text('short_name') ?> <i>/</i> Contact</span><span>The next chapter</span><span>Let’s talk</span></div>
      <div class="ct-open__grid">
        <div>
          <p class="ct-eyebrow ct-rv">Tell us what you are working on</p>
          <h1 class="ct-title ct-rv" id="ct-title">Let’s talk <em>about your book.</em></h1>
        </div>
        <div class="ct-open__side ct-rv">
          <p class="ct-lead">An idea, a rough draft or a published title is enough to start. Share your progress and what kind of help would make a difference.</p>
          <ol class="ct-path" role="list" aria-label="From idea to publication, then the next step">
            <li>Idea</li><li>Manuscript</li><li>Editing</li><li>Production</li><li>Publication</li><li class="is-now">Conversation</li>
          </ol>
          <a class="ct-link" href="#ct-form">Share your book plans <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
        </div>
      </div>
    </div>
  </div>

  <figure class="ct-plate">
    <div class="container">
      <div class="ct-plate__img ct-rv">
        <img src="assets/images/photos/1710360798685-c7a46e12a36e-2200x1100.webp" alt="Hands working over manuscript pages on a desk" loading="lazy" decoding="async" data-parallax="0.06" onerror="this.onerror=null;this.style.visibility='hidden'">
      </div>
      <figcaption class="ct-plate__cap"><span>Plate</span>Every project begins on the page.</figcaption>
    </div>
  </figure>

  <div class="ct-main">
    <div class="container ct-main__grid">
      <aside class="ct-info" aria-labelledby="ct-info-title">
        <p class="ct-label ct-rv" id="ct-info-title">Get in touch</p>
        <dl class="ct-list ct-rv">
          <div><dt>Email</dt><dd><a href="mailto:<?= site_text('email') ?>"><?= site_text('email') ?></a></dd></div>
          <div><dt>Phone</dt><dd><a href="tel:<?= site_phone_number() ?>"><?= site_text('phone') ?></a></dd></div>
          <div><dt>WhatsApp</dt><dd><a href="<?= component_escape(site_whatsapp_url()) ?>" target="_blank" rel="noopener"><?= site_text('whatsapp') ?></a></dd></div>
          <div><dt>Location</dt><dd><?= component_escape(site_address()) ?></dd></div>
          <div><dt>Support</dt><dd>Project Support<small>Contact our team with questions about your book and the work in progress.</small></dd></div>
          <div><dt>Follow</dt><dd class="ct-social"><?php render_component('shared/social-links', ['variant' => 'text']); ?></dd></div>
        </dl>
        <figure class="ct-info__fig ct-rv">
          <img src="assets/images/photos/1521316973612-36489899f29b-900x1100.webp" alt="An author reading at a wooden table beside a cup of coffee" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'">
          <figcaption>A little time with the manuscript is a useful place to begin.</figcaption>
        </figure>
      </aside>

      <form method="post" action="api/contact.php" enctype="multipart/form-data" data-site-form class="ct-form ct-rv" id="ct-form" data-lead-form data-ct-form aria-labelledby="ct-form-title">
        <?php render_component('forms/security', ['kind' => 'contact']); ?>
        <header class="ct-form__head">
          <p class="ct-label">Your project enquiry</p>
          <h3 class="ct-form__title" id="ct-form-title">Share a little <em>about the project.</em></h3>
          <p class="ct-form__sub">Tell us what you are writing, how far you have got and what you would like help with.</p>
        </header>

        <fieldset class="ct-set">
          <legend><span class="ct-set__n">01</span>Which services interest you?</legend>
          <div class="ct-opts">
            <label class="ct-opt"><input type="checkbox" value="Ghostwriting" name="services[]" data-ct-service><span>Ghostwriting</span></label>
            <label class="ct-opt"><input type="checkbox" value="Book Editing" name="services[]" data-ct-service><span>Book Editing</span></label>
            <label class="ct-opt"><input type="checkbox" value="Book Publishing" name="services[]" data-ct-service><span>Book Publishing</span></label>
            <label class="ct-opt"><input type="checkbox" value="Book Promotion" name="services[]" data-ct-service><span>Book Promotion</span></label>
            <label class="ct-opt"><input type="checkbox" value="Book Cover Design" name="services[]" data-ct-service><span>Book Cover Design</span></label>
            <label class="ct-opt"><input type="checkbox" value="Illustration" name="services[]" data-ct-service><span>Illustration</span></label>
            <label class="ct-opt"><input type="checkbox" value="Audio Book" name="services[]" data-ct-service><span>Audio Book</span></label>
            <label class="ct-opt"><input type="checkbox" value="Author Website" name="services[]" data-ct-service><span>Author Website</span></label>
            <label class="ct-opt"><input type="checkbox" value="Book Video" name="services[]" data-ct-service><span>Book Video</span></label>
            <label class="ct-opt"><input type="checkbox" value="Other" name="services[]" data-ct-service><span>Other</span></label>
          </div>
        </fieldset>

        <fieldset class="ct-set">
          <legend><span class="ct-set__n">02</span>How far has your book progressed?</legend>
          <div class="ct-stages">
            <label class="ct-stage"><input type="radio" name="stage" value="Idea" data-ct-stage><span class="ct-stage__n">01</span><span class="ct-stage__t">Idea</span></label>
            <label class="ct-stage"><input type="radio" name="stage" value="Manuscript" data-ct-stage><span class="ct-stage__n">02</span><span class="ct-stage__t">Manuscript</span></label>
            <label class="ct-stage"><input type="radio" name="stage" value="Editing" data-ct-stage><span class="ct-stage__n">03</span><span class="ct-stage__t">Editing</span></label>
            <label class="ct-stage"><input type="radio" name="stage" value="Production" data-ct-stage><span class="ct-stage__n">04</span><span class="ct-stage__t">Production</span></label>
            <label class="ct-stage"><input type="radio" name="stage" value="Ready to publish" data-ct-stage><span class="ct-stage__n">05</span><span class="ct-stage__t">Ready to publish</span></label>
          </div>
        </fieldset>

        <fieldset class="ct-set">
          <legend><span class="ct-set__n">03</span>Your details</legend>
          <div class="ct-fields">
            <div class="ct-field"><label for="ct-name">Full name <abbr title="required">*</abbr></label><input id="ct-name" type="text" name="name" autocomplete="name" required minlength="<?= form_rules()['name_min'] ?>" maxlength="<?= form_rules()['name_max'] ?>"></div>
            <div class="ct-field"><label for="ct-email">Email address <abbr title="required">*</abbr></label><input id="ct-email" type="email" name="email" autocomplete="email" required maxlength="<?= form_rules()['email_max'] ?>"></div>
            <div class="ct-field ct-field--full"><label for="ct-phone">Phone number <abbr title="required">*</abbr></label><input id="ct-phone" type="tel" name="phone" autocomplete="tel" required maxlength="40"></div>
            <div class="ct-field ct-field--full"><label for="ct-note">What would you like help with? <abbr title="required">*</abbr></label><textarea required minlength="<?= form_rules()['message_min'] ?>" maxlength="<?= form_rules()['message_max'] ?>" name="message" id="ct-note" rows="5" data-ct-note placeholder="Tell us the subject, your progress and the support you are looking for."></textarea></div>
            <div class="ct-field ct-field--full ct-file" data-ct-file data-max-mb="<?= (int) ceil(form_rules()['upload_max_bytes'] / 1048576) ?>">
              <label for="ct-file">Share a manuscript or sample <span class="ct-file__opt">Optional</span></label>
              <div class="ct-file__box">
                <input id="ct-file" class="ct-file__input" type="file" name="manuscript" accept=".pdf,.png,.jpg,.jpeg,application/pdf,image/png,image/jpeg" aria-describedby="ct-file-hint ct-file-err">
                <svg class="ct-file__icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 15V4M7.5 8.5 12 4l4.5 4.5M5 14v4.5A1.5 1.5 0 0 0 6.5 20h11a1.5 1.5 0 0 0 1.5-1.5V14" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span class="ct-file__text"><span class="ct-file__name" data-ct-file-name>Choose a manuscript or sample to share</span><span class="ct-file__hint" id="ct-file-hint">Accepted formats: PDF, PNG, JPG, JPEG · up to <?= (int) ceil(form_rules()['upload_max_bytes'] / 1048576) ?> MB</span></span>
                <span class="ct-file__btn" aria-hidden="true" data-ct-file-btn>Choose a File</span>
              </div>
              <button class="ct-file__remove" type="button" data-ct-file-remove aria-label="Remove the selected file" hidden>Remove attachment</button>
              <p class="ct-file__err" id="ct-file-err" role="alert" data-ct-file-err></p>
            </div>
          </div>
          <p class="ct-summary" data-ct-summary aria-live="polite">We will receive these selections along with your message.</p>
        </fieldset>

        <label class="check ct-consent">
        <input type="checkbox" name="marketing_consent" value="1">
        <span>I agree to receive marketing text messages about book services from <?= site_text('project_name') ?> at the number I provide, including automated messages. This choice is optional and is not required to purchase a service. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe or HELP for assistance. <a href="privacy-policy">Privacy Policy</a> &amp; <a href="terms-and-conditions">Terms &amp; Conditions</a>.</span>
      </label>
        <div class="ct-form__foot">
          <button class="btn btn--primary ct-submit" type="submit">Send Your Enquiry <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
          <p class="form-status ct-status" role="status" data-form-status></p>
        </div>
      </form>
    </div>
  </div>

  <div class="ct-steps">
    <div class="container">
      <p class="ct-label ct-rv">After you send your enquiry</p>
      <ol class="ct-steps__list ct-rv" role="list">
        <li><span>01</span>Describe your book</li>
        <li><span>02</span>Share your progress</li>
        <li><span>03</span>We consider your enquiry</li>
        <li><span>04</span>We discuss a suitable next step</li>
      </ol>
    </div>
  </div>

  <div class="rw-print ct-proof">
    <div class="container rw-print__grid">
      <div class="rw-print__copy">
        <p class="rw-eyebrow rw-rv">The book you have in mind</p>
        <h3 class="rw-h2 rw-rv">From your first enquiry <em>to a plan for the book.</em></h3>
        <p class="rw-lead rw-rv">Explore titles from <?= site_text('project_name') ?> while you think about the next step for your own manuscript.</p>
        <p class="rw-now" data-rw-now aria-live="polite"><span class="rw-now__n">In print</span><span class="rw-now__main"><span class="rw-cap__t">Change to Stay Unchanged</span><span class="rw-cap__s">Authoritarian Reform in Kazakhstan Under the Tokayev Regime</span><span class="rw-cap__a">Yerzhan Dosmukhamedov</span></span><span class="rw-now__hint">Explore a cover for book details</span></p>
      </div>
      <div class="rw-rv"><div class="rw-table" data-rw-table>
<div class="rw-table__row"><a class="rw-book rw-table__book" href="our-work#book-26" aria-label="You vs You by Waheed Shaffiek, view in Our Work" data-rw-book="26" style="--s:0.74;--z:9"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-26.webp" width="600" height="1024" alt="You vs You: How to Overcome Doubt, Build Discipline, and Create a Life with Purpose by Waheed Shaffiek, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">You vs You</span><span class="rw-cap__s">How to Overcome Doubt, Build Discipline, and Create a Life with Purpose</span><span class="rw-cap__a">Waheed Shaffiek</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book is-lead" href="our-work#book-27" aria-label="Change to Stay Unchanged by Yerzhan Dosmukhamedov, view in Our Work" data-rw-book="27" style="--s:1;--z:20"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-27.webp" width="600" height="1024" alt="Change to Stay Unchanged: Authoritarian Reform in Kazakhstan Under the Tokayev Regime by Yerzhan Dosmukhamedov, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Change to Stay Unchanged</span><span class="rw-cap__s">Authoritarian Reform in Kazakhstan Under the Tokayev Regime</span><span class="rw-cap__a">Yerzhan Dosmukhamedov</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
<div class="rw-table__surface" aria-hidden="true"></div></div></div>
    </div>
  </div>

</section>
</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
