<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'global-distribution.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Print and Digital Book Distribution Support | <?= site_text('project_name') ?></title>
  <meta name="description" content="Prepare your editions, listings and distribution settings so readers can find and order your book through the channels agreed for your project.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Print and Digital Book Distribution Support | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Prepare your editions, listings and distribution settings so readers can find and order your book through the channels agreed for your project.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-global-distribution ns-field--ivory">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#sig-title', 'section' => 'sig-title', 'label' => 'Overview', 'icon' => '#i-book', 'text' => 'Overview'],
    ['href' => '#inc-title', 'section' => 'inc-title', 'label' => 'What we handle', 'icon' => '#i-pen', 'text' => 'Services'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">
<section class="ns-hero ns-hero--plate" id="top" aria-labelledby="ns-title">
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Global Distribution</li></ol></nav><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Rights &amp; Distribution</p><h1 class="ns-title" id="ns-title">Help readers <em>get hold of your book.</em></h1><p class="ns-lead">Prepare print and digital editions for the distribution channels that suit your plans, with clear title records and agreed market settings.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Print on demand</li><li>Offset print</li><li>eBook</li><li>Retail &amp; library</li></ul></div>
    <figure class="ns-hero__plate"><img src="assets/images/photos/1709924168698-620ea32c3488-2000.webp" alt="Long rows of bookshelves in a library" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>Global Distribution</span><?= site_text('project_name') ?></figcaption></figure></div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">Readers need a practical way to find and order the book.</p>
    <div class="ns-intro__side ns-rv"><p>We help organise files, title information and platform setup for your chosen channels. Listing a book makes it available to order; individual shops and libraries make their own stocking decisions.</p><p class="ns-intro__part">Part of <a href="./#services">Rights &amp; Distribution</a></p></div>
  </div>
</section>
<section class="ns-sig ns-gd" aria-labelledby="sig-title">
  <div class="container">
    <div class="ns-gd__head"><p class="ns-label ns-rv">The routes</p><h2 class="ns-h2 ns-rv" id="sig-title">Plan the routes <em>to your readers.</em></h2></div>
    <ol class="ns-gd__routes ns-rv" role="list"><li><span class="ns-gd__n">01</span><p class="ns-gd__h">Formats</p><ul role="list"><li>Paperback</li><li>Hardcover</li><li>eBook</li><li>Audiobook</li></ul></li><li><span class="ns-gd__n">02</span><p class="ns-gd__h">Production</p><ul role="list"><li>Print on demand</li><li>Offset print run</li><li>Digital files</li></ul></li><li><span class="ns-gd__n">03</span><p class="ns-gd__h">Channels</p><ul role="list"><li>Online retailers</li><li>Bookstores</li><li>Libraries</li><li>Academic institutions</li></ul></li><li><span class="ns-gd__n">04</span><p class="ns-gd__h">Readers</p><ul role="list"><li>Worldwide</li></ul></li></ol>
    <figure class="ns-gd__plate ns-rv"><img src="assets/images/photos/1769355104335-acef3aa4c9b6-1400x1000.webp" alt="Cardboard boxes and packaging ready for shipping" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>Plate</span>Packed, shipped, shelved.</figcaption></figure>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1709924168698-620ea32c3488-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Distribution setup</h3><p class="ns-inc__d">Help prepare accounts and title records on the agreed publishing platforms.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Print on demand</h3><p class="ns-inc__d">Set up printing as orders arrive where that model suits the edition.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Offset print runs</h3><p class="ns-inc__d">Discuss larger quantities for launches, events or your own stock.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">eBook distribution</h3><p class="ns-inc__d">Prepare the digital edition for the stores selected in the project.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Pricing &amp; territories</h3><p class="ns-inc__d">Review list prices and territory settings with you before submission.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Listings &amp; metadata</h3><p class="ns-inc__d">Keep the book title, contributors and description consistent across listings.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Prepare</b><p>Gather the approved cover, interior and digital files.</p></li><li><span>02</span><b>Set up</b><p>Prepare the title records for the selected channels.</p></li><li><span>03</span><b>Price &amp; territories</b><p>Agree on prices, territories and edition details.</p></li><li><span>04</span><b>Available</b><p>Submit the setup and review the available listings.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Rights &amp; Distribution</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="copyrights-isbn"><span class="ns-rel__t">Copyrights &amp; ISBN</span><span class="ns-rel__d">Organise ISBNs, copyright paperwork and the title details for your editions.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1769355104335-acef3aa4c9b6-1600.webp', 'eyebrowHtml' => 'Global Distribution', 'titleHtml' => 'Let’s discuss <em>your distribution options.</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
