<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'billboard-campaigns.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Billboard Advertising for Books and Authors | <?= site_text('project_name') ?></title>
  <meta name="description" content="Plan a book billboard campaign with clear artwork, suitable locations and coordinated production. Discuss formats, timing and your campaign budget.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Billboard Advertising for Books and Authors | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Plan a book billboard campaign with clear artwork, suitable locations and coordinated production. Discuss formats, timing and your campaign budget.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-billboard-campaigns ns-field--ink">

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
<section class="ns-hero ns-hero--dark on-dark" id="top" aria-labelledby="ns-title">
  <div class="ns-hero__bg" aria-hidden="true"><img src="assets/images/photos/1788079029808-c51c6d8bc04d-2000.webp" alt="" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"></div>
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Billboard Campaigns</li></ol></nav><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Marketing &amp; Visibility</p><h1 class="ns-title" id="ns-title">Put your book <em>in the public view.</em></h1><p class="ns-lead">We help plan outdoor book campaigns, with clear artwork, placement coordination and production files for the chosen locations.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Digital billboards</li><li>Static boards</li><li>Street &amp; transit</li><li>Campaign creative</li></ul></div></div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">A billboard needs to communicate before the viewer has passed it.</p>
    <div class="ns-intro__side ns-rv"><p>We focus the design on your cover and one readable message, then coordinate the practical details of the proposed placement. Availability and media costs are confirmed during planning.</p><p class="ns-intro__part">Part of <a href="./#services">Marketing &amp; Visibility</a></p></div>
  </div>
</section>
<section class="ns-sig ns-bb on-dark" aria-labelledby="sig-title">
  <div class="ns-bb__bg" aria-hidden="true"><img src="assets/images/photos/1703725164412-f0c2882c7582-2000.webp" alt="" loading="lazy" decoding="async" data-parallax="0.06" onerror="this.onerror=null;this.style.visibility='hidden'"></div>
  <div class="container ns-bb__grid">
    <div class="ns-sig__head"><p class="ns-label ns-rv">The board</p><h2 class="ns-h2 ns-rv" id="sig-title">A clear message <em>at a larger scale.</em></h2>
      <ol class="ns-bb__rules ns-rv" role="list"><li><span>01</span>The cover, large</li><li><span>02</span>One clear message</li><li><span>03</span>Readable at a distance</li><li><span>04</span>Where to find the book</li></ol></div>
    <figure class="ns-bb__board ns-rv" aria-label="Example billboard layout">
      <div class="ns-bb__face"><span class="ns-bb__cover" aria-hidden="true"><i></i></span><span class="ns-bb__copy"><span class="ns-bb__k">A new book</span><span class="ns-bb__t">Your title, <em>in lights.</em></span><span class="ns-bb__a">Your name · Available now</span></span></div>
      <span class="ns-bb__legs" aria-hidden="true"></span>
      <figcaption>Example billboard layout</figcaption>
    </figure>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1788079029808-c51c6d8bc04d-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Campaign planning</h3><p class="ns-inc__d">Set the campaign purpose, proposed dates and suitable display formats.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Creative &amp; artwork</h3><p class="ns-inc__d">Create artwork with a clear cover image and a message that reads quickly.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Formats &amp; specifications</h3><p class="ns-inc__d">Adapt the design to the dimensions and technical requirements supplied.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Placement coordination</h3><p class="ns-inc__d">Confirm proposed locations, availability and booking details with media owners.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Production files</h3><p class="ns-inc__d">Prepare the final artwork for the selected printed or digital displays.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Campaign photography</h3><p class="ns-inc__d">Arrange agreed documentation of the live placement for your own channels.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Brief</b><p>Share the book, audience and locations you are considering.</p></li><li><span>02</span><b>Creative</b><p>Review the creative direction and campaign artwork.</p></li><li><span>03</span><b>Placement</b><p>Confirm the placement, dates, specifications and costs.</p></li><li><span>04</span><b>Live</b><p>Coordinate delivery and the agreed campaign documentation.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Marketing &amp; Visibility</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="book-promotion"><span class="ns-rel__t">Book Promotion &amp; Marketing</span><span class="ns-rel__d">Plan launch materials and promotional activity around your likely readers.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="author-website"><span class="ns-rel__t">Author Website</span><span class="ns-rel__d">Give readers a clear place to explore your books, news and background.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="web-social-media"><span class="ns-rel__t">Web &amp; Social Media</span><span class="ns-rel__d">Connect your website and social profiles with a practical author content plan.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="podcasts"><span class="ns-rel__t">Podcasts</span><span class="ns-rel__d">Prepare for guest interviews or develop and produce your own author episodes.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="tv-interviews"><span class="ns-rel__t">TV Interviews</span><span class="ns-rel__d">Practise the interview and prepare the story angles and materials for outreach.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="book-fairs"><span class="ns-rel__t">Book Fairs</span><span class="ns-rel__d">Prepare the displays and information needed to present your book at suitable events.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1703725164412-f0c2882c7582-1600.webp', 'eyebrowHtml' => 'Billboard Campaigns', 'titleHtml' => 'Where would you like <em>your book to appear?</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
