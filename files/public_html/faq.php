<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'faq.php';
$pageScripts = ['assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/faq2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Questions About Our Book Services | <?= site_text('project_name') ?></title>
  <meta name="description" content="Find answers about working with our book services team, including project scope, writing, editing, publishing, costs and ongoing support.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Questions About Our Book Services | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Find answers about working with our book services team, including project scope, writing, editing, publishing, costs and ongoing support.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-faq">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#faq', 'section' => 'faq', 'label' => 'Questions', 'icon' => '#i-quote', 'text' => 'FAQ'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<div class="faq-page__top" id="top">
  <div class="container">
    <nav class="faq-page__crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li aria-current="page">FAQ</li></ol></nav>
    <div class="faq-page__rule" aria-hidden="true"><span><?= site_text('short_name') ?> <i>/</i> FAQ</span><span><?= site_text('project_name') ?></span><span>Questions &amp; answers</span></div>
  </div>
</div>
<section class="section section--ivory faq faq-page" id="faq" aria-labelledby="faq-title">
  <div class="ed-bg ed-bg--faq" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.04"></div></div>
  <div class="container faq__grid">
    <div class="faq__head">
      <p class="eyebrow" data-reveal>Your questions</p>
      <h1 class="h2 faq-page__title" id="faq-title" data-reveal style="--d:.08s">What would you like to know <em>about working with us?</em></h1>
    </div>
    <?php render_component('sections/publishing-faq'); ?>
  </div>
</section>
<section class="cta on-dark faq-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1499750310107-5fef28a66643-1600.webp" alt="" loading="lazy" decoding="async" data-parallax="0.08">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal>Need to ask something else?</p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s">Tell us <em>what is on your mind.</em></h2>
      <p class="lead" data-reveal style="--d:.16s">Share the details of your book and any questions you have about the work involved.</p>
      <div class="faq-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us</a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Share your book plans', 'rows' => 4, 'messageLabel' => 'What would you like help with?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
