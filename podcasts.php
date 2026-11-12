<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'podcasts.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Podcast Support and Production for Authors | <?= site_text('project_name') ?></title>
  <meta name="description" content="Prepare for podcast guest interviews or develop your own author show with topic planning, recording, editing, episode notes and promotional clips.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Podcast Support and Production for Authors | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Prepare for podcast guest interviews or develop your own author show with topic planning, recording, editing, episode notes and promotional clips.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-podcasts ns-field--ink">

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
  <div class="ns-hero__bg" aria-hidden="true"><img src="assets/images/photos/1559523161-0fc0d8b38a7a-2000.webp" alt="" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"></div>
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Podcasts</li></ol></nav><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Marketing &amp; Visibility</p><h1 class="ns-title" id="ns-title">Talk about your book <em>where people listen.</em></h1><p class="ns-lead">Get ready for podcast interviews or plan an author show of your own, with support for topics, recording, editing and episode materials.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Guest appearances</li><li>Interview preparation</li><li>Your own show</li><li>Recording &amp; editing</li></ul></div></div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">A thoughtful conversation can make someone curious about the book behind it.</p>
    <div class="ns-intro__side ns-rv"><p>We help you find a useful angle, prepare for guest interviews or develop your own episodes. Guest bookings depend on the host, so outreach begins with a relevant pitch.</p><p class="ns-intro__part">Part of <a href="./#services">Marketing &amp; Visibility</a></p></div>
  </div>
</section>
<section class="ns-sig ns-pod" aria-labelledby="sig-title">
  <div class="container">
    <div class="ns-pod__head"><p class="ns-label ns-rv">On the record</p><h2 class="ns-h2 ns-rv" id="sig-title">Give the conversation <em>a clear direction.</em></h2></div>
    <div class="ns-pod__wave ns-rv" aria-hidden="true"><i style="--h:18%"></i><i style="--h:43%"></i><i style="--h:64%"></i><i style="--h:77%"></i><i style="--h:81%"></i><i style="--h:75%"></i><i style="--h:62%"></i><i style="--h:44%"></i><i style="--h:26%"></i><i style="--h:25%"></i><i style="--h:34%"></i><i style="--h:37%"></i><i style="--h:34%"></i><i style="--h:27%"></i><i style="--h:19%"></i><i style="--h:21%"></i><i style="--h:22%"></i><i style="--h:18%"></i><i style="--h:28%"></i><i style="--h:41%"></i><i style="--h:55%"></i><i style="--h:64%"></i><i style="--h:68%"></i><i style="--h:63%"></i><i style="--h:49%"></i><i style="--h:29%"></i><i style="--h:31%"></i><i style="--h:54%"></i><i style="--h:74%"></i><i style="--h:85%"></i><i style="--h:86%"></i><i style="--h:78%"></i><i style="--h:61%"></i><i style="--h:39%"></i><i style="--h:18%"></i><i style="--h:37%"></i><i style="--h:50%"></i><i style="--h:55%"></i><i style="--h:53%"></i><i style="--h:45%"></i><i style="--h:34%"></i><i style="--h:25%"></i><i style="--h:19%"></i><i style="--h:18%"></i><i style="--h:22%"></i><i style="--h:31%"></i><i style="--h:41%"></i><i style="--h:48%"></i><i style="--h:51%"></i><i style="--h:46%"></i><i style="--h:34%"></i><i style="--h:19%"></i><i style="--h:40%"></i><i style="--h:61%"></i><i style="--h:77%"></i><i style="--h:85%"></i><i style="--h:84%"></i><i style="--h:72%"></i><i style="--h:53%"></i><i style="--h:28%"></i><i style="--h:31%"></i><i style="--h:52%"></i><i style="--h:66%"></i><i style="--h:72%"></i><i style="--h:68%"></i><i style="--h:58%"></i><i style="--h:43%"></i><i style="--h:28%"></i><i style="--h:18%"></i><i style="--h:25%"></i><i style="--h:25%"></i><i style="--h:20%"></i><i style="--h:22%"></i><i style="--h:29%"></i><i style="--h:33%"></i><i style="--h:31%"></i><i style="--h:23%"></i><i style="--h:26%"></i><i style="--h:43%"></i><i style="--h:60%"></i><i style="--h:73%"></i><i style="--h:78%"></i><i style="--h:74%"></i><i style="--h:61%"></i><i style="--h:40%"></i><i style="--h:20%"></i><i style="--h:45%"></i><i style="--h:66%"></i></div>
    <ol class="ns-pod__run ns-rv" role="list" aria-label="Example episode outline"><li><span>00:00</span>Pre interview</li><li><span>05:00</span>Your story</li><li><span>18:00</span>The book</li><li><span>32:00</span>Reader questions</li><li><span>41:00</span>Where to find it</li></ol>
    <p class="ns-pod__note ns-rv">Example episode outline</p>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1559523161-0fc0d8b38a7a-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Show research &amp; pitching</h3><p class="ns-inc__d">Research relevant shows and prepare pitches around your subject.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Interview preparation</h3><p class="ns-inc__d">Organise talking points and examples that help you discuss the book naturally.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Your own show</h3><p class="ns-inc__d">Develop a format and episode plan for a podcast you host.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Recording &amp; editing</h3><p class="ns-inc__d">Record and edit the agreed episodes with attention to pace and sound.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Publishing episodes</h3><p class="ns-inc__d">Prepare episode descriptions, artwork and files for the chosen channels.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Clips &amp; promotion</h3><p class="ns-inc__d">Create the agreed short clips for your website and social profiles.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Plan</b><p>Discuss the book, likely listeners and topics worth exploring.</p></li><li><span>02</span><b>Prepare</b><p>Prepare a pitch or a practical episode outline.</p></li><li><span>03</span><b>Record</b><p>Record the conversation or prepare for the guest appearance.</p></li><li><span>04</span><b>Share</b><p>Finish the agreed episode files, notes and promotional clips.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Marketing &amp; Visibility</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="book-promotion"><span class="ns-rel__t">Book Promotion &amp; Marketing</span><span class="ns-rel__d">Plan launch materials and promotional activity around your likely readers.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="author-website"><span class="ns-rel__t">Author Website</span><span class="ns-rel__d">Give readers a clear place to explore your books, news and background.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="web-social-media"><span class="ns-rel__t">Web &amp; Social Media</span><span class="ns-rel__d">Connect your website and social profiles with a practical author content plan.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="billboard-campaigns"><span class="ns-rel__t">Billboard Campaigns</span><span class="ns-rel__d">Plan outdoor book artwork and coordinate the agreed advertising locations.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="tv-interviews"><span class="ns-rel__t">TV Interviews</span><span class="ns-rel__d">Practise the interview and prepare the story angles and materials for outreach.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="book-fairs"><span class="ns-rel__t">Book Fairs</span><span class="ns-rel__d">Prepare the displays and information needed to present your book at suitable events.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1589903308904-1010c2294adc-1600.webp', 'eyebrowHtml' => 'Podcasts', 'titleHtml' => 'What conversation could <em>your book start?</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
