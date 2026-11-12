<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'tv-interviews.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>TV Interview Preparation and Outreach for Authors | <?= site_text('project_name') ?></title>
  <meta name="description" content="Prepare to discuss your book on camera with story angles, a media kit, practice interviews and outreach to relevant broadcast programmes.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="TV Interview Preparation and Outreach for Authors | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Prepare to discuss your book on camera with story angles, a media kit, practice interviews and outreach to relevant broadcast programmes.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-tv-interviews ns-field--ink">

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
<section class="ns-hero ns-hero--studio on-dark" id="top" aria-labelledby="ns-title">
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">TV Interviews</li></ol></nav>
    <div class="ns-hero__grid"><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Marketing &amp; Visibility</p><h1 class="ns-title" id="ns-title">Speak about your book <em>with confidence.</em></h1><p class="ns-lead">Prepare for broadcast interviews with a focused story angle, useful media materials and practice answering questions on camera.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Story angles</li><li>Media kit</li><li>Media training</li><li>Broadcast outreach</li></ul></div>
      <figure class="ns-hero__fig"><img src="assets/images/photos/1602743297108-4c9061884285-2000.webp" alt="Two people seated for a filmed interview under studio lights" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>TV Interviews</span><?= site_text('project_name') ?></figcaption></figure></div>
  </div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">A clear explanation helps a viewer understand why your book matters.</p>
    <div class="ns-intro__side ns-rv"><p>We help you identify relevant talking points, prepare a media kit and practise the conversation. We can support outreach, while producers decide which guests to book.</p><p class="ns-intro__part">Part of <a href="./#services">Marketing &amp; Visibility</a></p></div>
  </div>
</section>
<section class="ns-sig ns-tv" aria-labelledby="sig-title">
  <div class="container ns-tv__grid">
    <figure class="ns-tv__frame ns-rv" aria-label="Example on screen caption">
      <img src="assets/images/photos/1768222935380-0a3a76fbb42e-1400x1000.webp" alt="A broadcast control desk with monitors showing a live camera feed" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'">
      <span class="ns-tv__air"><i></i>On air</span>
      <span class="ns-tv__third"><b>Author name</b><span>Author of <em>Your Book Title</em></span></span>
      <figcaption>Example on screen caption</figcaption>
    </figure>
    <div class="ns-sig__head"><p class="ns-label ns-rv">Before the red light</p><h2 class="ns-h2 ns-rv" id="sig-title">Preparation that helps <em>you speak naturally.</em></h2>
      <ul class="ns-tv__list ns-rv" role="list"><li>Three things you want viewers to remember</li><li>A short, true story from writing the book</li><li>Answers that fit a segment, not a lecture</li><li>The book, in shot</li></ul></div>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1602743297108-4c9061884285-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Story angles</h3><p class="ns-inc__d">Identify timely topics and personal experiences that connect with the book.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Media kit</h3><p class="ns-inc__d">Bring together your biography, headshot, book details and key talking points.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Broadcast outreach</h3><p class="ns-inc__d">Prepare pitches for programmes with a relevant audience.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Media training</h3><p class="ns-inc__d">Practise answering questions clearly, with feedback on pace and delivery.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">On set presence</h3><p class="ns-inc__d">Discuss practical presentation details before appearing on camera.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">After the interview</h3><p class="ns-inc__d">Organise available links and permitted clips for your own channels.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Position</b><p>Discuss the book and the subjects you can speak about well.</p></li><li><span>02</span><b>Prepare</b><p>Prepare the media pack and practise likely questions.</p></li><li><span>03</span><b>Pitch</b><p>Approach relevant producers with a focused pitch.</p></li><li><span>04</span><b>On air</b><p>Prepare for confirmed appearances and agree on follow up.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Marketing &amp; Visibility</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="book-promotion"><span class="ns-rel__t">Book Promotion &amp; Marketing</span><span class="ns-rel__d">Plan launch materials and promotional activity around your likely readers.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="author-website"><span class="ns-rel__t">Author Website</span><span class="ns-rel__d">Give readers a clear place to explore your books, news and background.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="web-social-media"><span class="ns-rel__t">Web &amp; Social Media</span><span class="ns-rel__d">Connect your website and social profiles with a practical author content plan.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="billboard-campaigns"><span class="ns-rel__t">Billboard Campaigns</span><span class="ns-rel__d">Plan outdoor book artwork and coordinate the agreed advertising locations.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="podcasts"><span class="ns-rel__t">Podcasts</span><span class="ns-rel__d">Prepare for guest interviews or develop and produce your own author episodes.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="book-fairs"><span class="ns-rel__t">Book Fairs</span><span class="ns-rel__d">Prepare the displays and information needed to present your book at suitable events.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1768222935380-0a3a76fbb42e-1600.webp', 'eyebrowHtml' => 'TV Interviews', 'titleHtml' => 'Let’s prepare <em>your book’s talking points.</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
