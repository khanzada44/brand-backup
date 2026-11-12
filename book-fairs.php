<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'book-fairs.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Book Fair Preparation and Author Support | <?= site_text('project_name') ?></title>
  <meta name="description" content="Prepare your book for fairs and publishing events with event planning, catalogue details, display materials and support for presentation.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Book Fair Preparation and Author Support | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Prepare your book for fairs and publishing events with event planning, catalogue details, display materials and support for presentation.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-book-fairs ns-field--paper">

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
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Book Fairs</li></ol></nav><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Marketing &amp; Visibility</p><h1 class="ns-title" id="ns-title">Bring your book <em>into the conversation.</em></h1><p class="ns-lead">Prepare for book fairs and publishing events with support for event selection, catalogue information, displays and book presentation.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Event selection</li><li>Book display</li><li>Fair materials</li><li>Industry meetings</li></ul></div>
    <figure class="ns-hero__plate"><img src="assets/images/photos/1732652835004-efc80cb31d9d-2000.webp" alt="Visitors browsing tables of books at a book fair" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>Book Fairs</span><?= site_text('project_name') ?></figcaption></figure></div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">A fair is a chance to put a book in front of people who work with and enjoy books.</p>
    <div class="ns-intro__side ns-rv"><p>We discuss which events suit your title, then help prepare the information and materials needed to present it. Participation arrangements depend on the event and the scope you choose.</p><p class="ns-intro__part">Part of <a href="./#services">Marketing &amp; Visibility</a></p></div>
  </div>
</section>
<section class="ns-sig ns-bf" aria-labelledby="sig-title">
  <div class="container ns-bf__grid">
    <figure class="ns-bf__fig ns-rv"><img src="assets/images/photos/1660606422784-5a18d4be40fe-1400x1000.webp" alt="A table covered with displayed books at a book fair" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption>The table, the cover, the conversation.</figcaption></figure>
    <div><div class="ns-sig__head"><p class="ns-label ns-rv">The programme</p><h2 class="ns-h2 ns-rv" id="sig-title">Make a plan <em>for the whole event.</em></h2></div>
      <ol class="ns-bf__prog ns-rv" role="list"><li><p class="ns-bf__h"><span>I.</span>Before the fair</p><ul role="list"><li>Choosing the event</li><li>Catalogue &amp; rights listings</li><li>Posters, bookmarks &amp; sell sheets</li></ul></li><li><p class="ns-bf__h"><span>II.</span>At the fair</p><ul role="list"><li>Your book on display</li><li>Signings, where available</li><li>Meetings with booksellers &amp; librarians</li></ul></li><li><p class="ns-bf__h"><span>III.</span>After the fair</p><ul role="list"><li>Following up contacts</li><li>Sharing the event online</li><li>Planning the next step</li></ul></li></ol></div>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1732652835004-efc80cb31d9d-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Event selection</h3><p class="ns-inc__d">Consider fairs that fit the book’s subject, audience and your plans.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Catalogue &amp; listings</h3><p class="ns-inc__d">Prepare title information for relevant catalogues and event listings.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Display &amp; materials</h3><p class="ns-inc__d">Develop display artwork, bookmarks and other agreed printed materials.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Book presentation</h3><p class="ns-inc__d">Arrange the agreed presentation of the book for visitors and trade contacts.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Signings &amp; meetings</h3><p class="ns-inc__d">Discuss signing and meeting opportunities offered by the event.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Follow up</h3><p class="ns-inc__d">Organise useful contacts and decide which conversations to continue.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Choose</b><p>Choose an event with a clear reason for attending.</p></li><li><span>02</span><b>Prepare</b><p>Prepare the book details, display and supporting materials.</p></li><li><span>03</span><b>Present</b><p>Present the title through the agreed event arrangement.</p></li><li><span>04</span><b>Follow up</b><p>Review the contacts and decide what to follow up.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Marketing &amp; Visibility</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="book-promotion"><span class="ns-rel__t">Book Promotion &amp; Marketing</span><span class="ns-rel__d">Plan launch materials and promotional activity around your likely readers.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="author-website"><span class="ns-rel__t">Author Website</span><span class="ns-rel__d">Give readers a clear place to explore your books, news and background.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="web-social-media"><span class="ns-rel__t">Web &amp; Social Media</span><span class="ns-rel__d">Connect your website and social profiles with a practical author content plan.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="billboard-campaigns"><span class="ns-rel__t">Billboard Campaigns</span><span class="ns-rel__d">Plan outdoor book artwork and coordinate the agreed advertising locations.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="podcasts"><span class="ns-rel__t">Podcasts</span><span class="ns-rel__d">Prepare for guest interviews or develop and produce your own author episodes.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="tv-interviews"><span class="ns-rel__t">TV Interviews</span><span class="ns-rel__d">Practise the interview and prepare the story angles and materials for outreach.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1660606422784-5a18d4be40fe-1600.webp', 'eyebrowHtml' => 'Book Fairs', 'titleHtml' => 'Which event could <em>suit your book?</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
