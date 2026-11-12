<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'web-social-media.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Author Websites and Social Media Support | <?= site_text('project_name') ?></title>
  <meta name="description" content="Build a consistent author presence with website planning, social profiles, content creation and account support suited to your books and readers.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Author Websites and Social Media Support | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Build a consistent author presence with website planning, social profiles, content creation and account support suited to your books and readers.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-web-social-media ns-field--ivory">

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
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Web &amp; Social Media</li></ol></nav>
    <div class="ns-hero__grid"><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Marketing &amp; Visibility</p><h1 class="ns-title" id="ns-title">Keep your author presence <em>connected.</em></h1><p class="ns-lead">Bring your website, social profiles and content together with a consistent voice and a posting plan that suits your books and readers.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Brand identity</li><li>Author website</li><li>Social content</li><li>Account management</li></ul></div>
      <figure class="ns-hero__fig"><img src="assets/images/photos/1724862936518-ae7fcfc052c1-2000.webp" alt="A hand holding a phone showing social media apps" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>Web &amp; Social Media</span><?= site_text('project_name') ?></figcaption></figure></div>
  </div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">People who enjoy a book often want to know what its author is doing next.</p>
    <div class="ns-intro__side ns-rv"><p>We help you decide what to share and how to present it across your website and social channels. Account support can keep that plan moving between releases.</p><p class="ns-intro__part">Part of <a href="./#services">Marketing &amp; Visibility</a></p></div>
  </div>
</section>
<section class="ns-sig ns-ws" aria-labelledby="sig-title">
  <div class="container ns-ws__grid">
    <div class="ns-sig__head"><p class="ns-label ns-rv">One identity</p><h2 class="ns-h2 ns-rv" id="sig-title">A familiar author <em>across the web.</em></h2>
      <ul class="ns-ws__ch ns-rv" role="list"><li>Author website</li><li>Instagram</li><li>Facebook</li><li>TikTok</li><li>LinkedIn</li><li>YouTube</li></ul></div>
    <div class="ns-ws__devices ns-rv" aria-label="Example author website and social post">
      <div class="ns-ws__site"><span class="ns-ws__bar"><i></i><i></i><i></i></span><span class="ns-ws__nm">Author Name</span><span class="ns-ws__hl">A new book, <em>out now.</em></span><span class="ns-ws__lines"><i></i><i></i><i></i></span><span class="ns-ws__btn">Read the first chapter</span><span class="ns-ws__cover" aria-hidden="true"></span></div>
      <div class="ns-ws__phone"><span class="ns-ws__who"><i></i>authorname</span><span class="ns-ws__post"><span>“A line from the book.”</span></span><span class="ns-ws__acts"><i></i><i></i><i></i></span></div>
      <p class="ns-ws__note">Example layouts</p>
    </div>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1724862936518-ae7fcfc052c1-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Brand identity</h3><p class="ns-inc__d">Agree on the visual choices and tone that represent you and your books.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t"><a href="author-website">Author website <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></h3><p class="ns-inc__d">Plan a website where readers can explore your work and official information.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Social profiles</h3><p class="ns-inc__d">Present profile details consistently on the channels you choose.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Content creation</h3><p class="ns-inc__d">Prepare useful posts, graphics and short clips for the content plan.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Account management</h3><p class="ns-inc__d">Support the posting schedule and agreed community activity.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Regular review</h3><p class="ns-inc__d">Review the response and discuss what to adjust in the next period.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Identity</b><p>Agree on how your author presence should look and sound.</p></li><li><span>02</span><b>Build</b><p>Prepare the website and selected social profiles.</p></li><li><span>03</span><b>Create</b><p>Create the agreed content for each channel.</p></li><li><span>04</span><b>Manage</b><p>Keep up the posting plan and review the response.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Marketing &amp; Visibility</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="book-promotion"><span class="ns-rel__t">Book Promotion &amp; Marketing</span><span class="ns-rel__d">Plan launch materials and promotional activity around your likely readers.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="author-website"><span class="ns-rel__t">Author Website</span><span class="ns-rel__d">Give readers a clear place to explore your books, news and background.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="billboard-campaigns"><span class="ns-rel__t">Billboard Campaigns</span><span class="ns-rel__d">Plan outdoor book artwork and coordinate the agreed advertising locations.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="podcasts"><span class="ns-rel__t">Podcasts</span><span class="ns-rel__d">Prepare for guest interviews or develop and produce your own author episodes.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="tv-interviews"><span class="ns-rel__t">TV Interviews</span><span class="ns-rel__d">Practise the interview and prepare the story angles and materials for outreach.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="book-fairs"><span class="ns-rel__t">Book Fairs</span><span class="ns-rel__d">Prepare the displays and information needed to present your book at suitable events.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1501808503570-36559610f95e-1600.webp', 'eyebrowHtml' => 'Web &amp; Social Media', 'titleHtml' => 'Let’s plan <em>your author channels.</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
