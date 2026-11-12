<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'copyrights-isbn.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>ISBN and Copyright Application Support | <?= site_text('project_name') ?></title>
  <meta name="description" content="Organise your book identifiers, copyright page and registration paperwork with practical support for ISBNs, metadata and eligible library applications.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="ISBN and Copyright Application Support | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Organise your book identifiers, copyright page and registration paperwork with practical support for ISBNs, metadata and eligible library applications.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-copyrights-isbn ns-field--paper">

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
<section class="ns-hero ns-hero--split" id="top" aria-labelledby="ns-title">
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Copyrights &amp; ISBN</li></ol></nav>
    <div class="ns-hero__grid"><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Rights &amp; Distribution</p><h1 class="ns-title" id="ns-title">Get the book details <em>in order.</em></h1><p class="ns-lead">Practical help with ISBNs, copyright application paperwork and the records that identify your book across editions and listings.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>ISBN</li><li>Copyright</li><li>Barcodes</li><li>Metadata</li></ul></div>
      <figure class="ns-hero__fig"><img src="assets/images/photos/1537275181304-62f51a71af79-2000.webp" alt="A stack of books with a barcode on the back cover" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>Copyrights &amp; ISBN</span><?= site_text('project_name') ?></figcaption></figure></div>
  </div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">The details on the copyright page and in a retailer listing should tell the same story.</p>
    <div class="ns-intro__side ns-rv"><p>We help organise identifiers, notices and registration paperwork for your book. Questions about your legal rights should be discussed with a qualified attorney.</p><p class="ns-intro__part">Part of <a href="./#services">Rights &amp; Distribution</a></p></div>
  </div>
</section>
<section class="ns-sig ns-cr" aria-labelledby="sig-title">
  <div class="container ns-cr__grid">
    <div class="ns-sig__head"><p class="ns-label ns-rv">The record</p><h2 class="ns-h2 ns-rv" id="sig-title">The details behind <em>the edition.</em></h2>
      <p class="ns-body ns-rv">We check the copyright page, barcode and title information for consistency before the files are finalised.</p></div>
    <figure class="ns-cr__page ns-rv" aria-label="Example copyright page">
      <p class="ns-cr__mark">©</p>
      <p>Copyright © [Year] [Author Name]<br>All rights reserved.</p>
      <p>No part of this book may be reproduced without written permission from the author, except for brief quotations in reviews.</p>
      <p>ISBN [number for print edition] (paperback)<br>ISBN [number for digital edition] (eBook)</p>
      <p>First edition</p>
      <span class="ns-cr__bar" aria-hidden="true"><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:3px"></i><i style="--w:1px"></i><i style="--w:1px"></i><i style="--w:2px"></i><i style="--w:3px"></i><i style="--w:1px"></i><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:1px"></i><i style="--w:3px"></i><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:3px"></i><i style="--w:1px"></i><i style="--w:1px"></i><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:3px"></i><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:1px"></i><i style="--w:2px"></i><i style="--w:1px"></i><i style="--w:3px"></i><i style="--w:1px"></i><i style="--w:2px"></i></span>
      <figcaption>Example copyright page</figcaption>
    </figure>
    <dl class="ns-cr__rec ns-rv" aria-label="Example metadata record"><div><dt>Title</dt><dd>Your book’s title</dd></div><div><dt>Contributor</dt><dd>Author name</dd></div><div><dt>Format</dt><dd>Paperback · Hardcover · eBook</dd></div><div><dt>ISBN</dt><dd>One per format</dd></div><div><dt>Subject</dt><dd>Category codes</dd></div><div><dt>Description</dt><dd>Back cover copy</dd></div><div><dt>Price &amp; territory</dt><dd>Per market</dd></div></dl>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">Support for your book records.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1537275181304-62f51a71af79-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">ISBN for each format</h3><p class="ns-inc__d">Identify the ISBN needs for each edition and the requirements of your chosen channels.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Back cover barcode</h3><p class="ns-inc__d">Prepare a barcode from the assigned ISBN for the print cover.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Copyright registration</h3><p class="ns-inc__d">Help organise the information and paperwork needed for a copyright application.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Library of Congress</h3><p class="ns-inc__d">Assist with a control number application where the title is eligible.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Copyright page</h3><p class="ns-inc__d">Prepare the notices, edition details and identifiers for your copyright page.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Book metadata</h3><p class="ns-inc__d">Record the title, contributors and description consistently across the agreed listings.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">Working through the details</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Your details</b><p>Confirm the title, author, edition and formats you plan to publish.</p></li><li><span>02</span><b>Preparation</b><p>Prepare the draft notices, application information and identifiers.</p></li><li><span>03</span><b>Filing &amp; assignment</b><p>Complete the agreed applications and edition records.</p></li><li><span>04</span><b>Ready for print</b><p>Check that the cover, copyright page and listings match.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Rights &amp; Distribution</p><h2 class="ns-rel__title" id="rel-title">More support for the next stage.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="global-distribution"><span class="ns-rel__t">Global Distribution</span><span class="ns-rel__d">Prepare listings and distribution settings for the channels you want to use.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1730370432060-f49046da66aa-1600.webp', 'eyebrowHtml' => 'Copyrights &amp; ISBN', 'titleHtml' => 'Let’s get your book <em>properly identified.</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
