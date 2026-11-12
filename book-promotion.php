<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'book-promotion.php';
$pageScripts = ['assets/js/book-promotion2f72.js?v=20261003', 'assets/js/real-work2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/promotion2f72.css?v=20261003'];
$pageThemeColor = '#0D0D0F';
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Book Promotion and Author Marketing | <?= site_text('project_name') ?></title>
  <meta name="description" content="Introduce your book to its likely readers with a practical promotion plan, launch materials, author content and coordinated campaign support.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Book Promotion and Author Marketing | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Introduce your book to its likely readers with a practical promotion plan, launch materials, author content and coordinated campaign support.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1766145549011-2eccae0bf7ca-2400.webp" fetchpriority="high">
  
</head>
<body class="page-promo">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#campaign', 'section' => 'campaign', 'label' => 'Campaign', 'icon' => '#i-steps', 'text' => 'Campaign'],
    ['href' => '#wall', 'section' => 'wall', 'label' => 'Creative', 'icon' => '#i-brush', 'text' => 'Creative'],
    ['href' => '#launch', 'section' => 'launch', 'label' => 'Launch', 'icon' => '#i-star', 'text' => 'Launch'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="pm-hero on-dark" id="top" aria-labelledby="pm-title">
  <div class="pm-hero__media" aria-hidden="true"><div class="pm-hero__img" data-parallax="0.05"></div></div>
  <div class="container pm-hero__inner">
    <nav class="pm-crumbs" aria-label="Breadcrumb">
      <ol role="list">
        <li><a href="./">Home</a></li>
        <li><a href="./#services">Services</a></li>
        <li aria-current="page">Book Promotion</li>
      </ol>
    </nav>
    <div class="pm-hero__copy">
      <p class="pm-eyebrow"><span></span>Book promotion</p>
      <h1 class="pm-hero__title" id="pm-title">Help the right readers <em>find your book.</em></h1>
      <p class="pm-hero__lead">We plan book promotion around your genre, your audience and what you want to achieve, with useful launch materials and a consistent author presence.</p>
      <div class="pm-hero__ctas">
        <button class="btn btn--light" type="button" data-open-lead>Start Your Campaign <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="#campaign">Explore Our Approach</a>
      </div>
    </div>
    <figure class="pm-stage" aria-label="The Cosmic Mind by Maneseh, presented with its campaign materials">
      <span class="pm-stage__light" aria-hidden="true"></span>
      <div class="pm-stage__poster" aria-hidden="true">
        <span class="pm-stage__poster-k">A new title</span>
        <span class="pm-stage__poster-t">The Cosmic Mind</span>
        <span class="pm-stage__poster-a">Maneseh</span>
        <span class="pm-stage__poster-rule"></span>
        <span class="pm-stage__poster-o">Out now</span>
      </div>
      <div class="pm-stage__proof" aria-hidden="true"><b>Chapter One</b><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
      <div class="book3d pm-stage__book"><div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" src="assets/images/books/cover-04.webp" width="440" height="660" alt="Cover of The Cosmic Mind by Maneseh, published with <?= site_text('project_name') ?>" decoding="async"></div><div class="book3d__shadow"></div></div>
      <figcaption class="pm-stage__cap"><span>Campaign study</span>The Cosmic Mind, published with <?= site_text('project_name') ?></figcaption>
    </figure>
  </div>
</section>

<section class="pm-beyond" id="beyond" aria-labelledby="beyond-title">
  <div class="container pm-beyond__grid">
    <div class="pm-beyond__copy">
      <p class="pm-eb"><span>01</span>Beyond the book</p>
      <h2 class="pm-h2 pm-rv" id="beyond-title">Published is a start. <em>Now introduce it.</em></h2>
      <p class="pm-standfirst pm-rv">Readers need a reason to notice a book they have not heard of yet.</p>
      <p class="pm-body pm-rv">We help you explain what your book offers and put that message in places its likely readers spend time. The plan can begin before publication and continue as you learn what draws interest.</p>
    </div>
    <div class="pm-beyond__art">
      <figure class="pm-beyond__main pm-zoom"><img class="" src="assets/images/photos/1781813785076-906e1666f68e-1100x1400.webp" alt="Late sunlight falling across an open book and a standing hardback" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></figure>
      <figure class="pm-beyond__inset pm-zoom"><img class="" src="assets/images/photos/1591951425600-d09958978584-700x560.webp" alt="The pages of a book fanned open against a cream background" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></figure>
      <p class="pm-beyond__note" aria-hidden="true">The starting point: a book waiting to meet its readers.</p>
    </div>
  </div>
</section>

<section class="pm-statement on-dark" aria-label="Publication and promotion">
  <div class="pm-statement__media pm-zoom" aria-hidden="true"><img class="" src="assets/images/photos/1763824970116-8c57fa391d19-2400x1300.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div>
  <div class="container pm-statement__inner">
    <p class="pm-statement__a pm-rv">You have a book to share.</p>
    <p class="pm-statement__b pm-rv">Let’s give readers a way to find it.</p>
  </div>
</section>

<section class="pm-arc" id="campaign" aria-labelledby="arc-title">
  <div class="container">
    <div class="pm-arc__head">
      <p class="pm-eb"><span>02</span>The campaign</p>
      <h2 class="pm-h2 pm-arc__title pm-rv" id="arc-title">A plan built <em>around your book.</em></h2>
      <p class="pm-body pm-rv">We look at the subject, reader and launch plans before choosing the message, materials and channels.</p>
    </div>
  </div>
  <div class="pm-arc__track">
    <ol class="pm-arc__list" role="list" data-pm-stages>
      <li class="pm-arc__stage is-active" data-pm-stage tabindex="0">
        <div class="pm-arc__img" aria-hidden="true"><img class="" src="assets/images/photos/1744807867611-6e39f5229af6-1000x1200.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div>
        <span class="pm-arc__n">01</span>
        <div class="pm-arc__body">
          <h3>Position</h3>
          <p>Identify who the book is for and what gives those readers a reason to pick it up.</p>
        </div>
      </li>
      <li class="pm-arc__stage" data-pm-stage tabindex="0">
        <div class="pm-arc__img" aria-hidden="true"><img class="" src="assets/images/photos/1504198322253-cfa87a0ff25f-1000x1200.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div>
        <span class="pm-arc__n">02</span>
        <div class="pm-arc__body">
          <h3>Present</h3>
          <p>Prepare campaign copy and visuals that clearly introduce the book and its author.</p>
        </div>
      </li>
      <li class="pm-arc__stage" data-pm-stage tabindex="0">
        <div class="pm-arc__img" aria-hidden="true"><img class="" src="assets/images/photos/1772196774962-1db8db77a3b0-1000x1200.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div>
        <span class="pm-arc__n">03</span>
        <div class="pm-arc__body">
          <h3>Promote</h3>
          <p>Share the campaign through channels chosen for your audience and budget.</p>
        </div>
      </li>
      <li class="pm-arc__stage" data-pm-stage tabindex="0">
        <div class="pm-arc__img" aria-hidden="true"><img class="" src="assets/images/photos/1790431026188-567c8c80b5ee-1000x1200.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div>
        <span class="pm-arc__n">04</span>
        <div class="pm-arc__body">
          <h3>Amplify</h3>
          <p>Review the response and use what we learn to guide the next round of promotion.</p>
        </div>
      </li>
    </ol>
  </div>
</section>

<section class="pm-wall" id="wall" aria-labelledby="wall-title">
  <div class="container">
    <div class="pm-wall__head">
      <p class="pm-eb"><span>03</span>The creative</p>
      <h2 class="pm-h2 pm-rv" id="wall-title">Give readers <em>something to explore.</em></h2>
      <p class="pm-body pm-rv">A cover announcement, an excerpt and an author introduction each serve a different purpose. We plan them together so the campaign feels connected.</p>
    </div>

    <div class="pm-wall__board">
      <figure class="pm-w pm-w--announce">
        <div class="pm-announce">
          <div class="pm-announce__cover"><img class="" src="assets/images/books/cover-06.webp" width="440" height="660" alt="Cover of The Goodness of God by Dr. Lee Roy Jefferson, published with <?= site_text('project_name') ?>" loading="lazy" decoding="async"></div>
          <div class="pm-announce__copy">
            <span class="pm-announce__k">Announcing</span>
            <span class="pm-announce__t">The Goodness of God</span>
            <span class="pm-announce__a">A book by Dr. Lee Roy Jefferson</span>
            <span class="pm-announce__o">Available on Amazon</span>
          </div>
        </div>
        <figcaption><b>A</b>Book announcement</figcaption>
      </figure>

      <figure class="pm-w pm-w--social">
        <div class="pm-phone" aria-hidden="true">
          <div class="pm-phone__screen">
            <div class="pm-phone__status"><span>9:41</span><span class="pm-phone__island"></span><span class="pm-phone__sig"><i></i><i></i><i></i></span></div>
            <div class="pm-post__top"><span class="pm-post__av">A</span><span class="pm-post__who">americasbookservice<small>Campaign · Bloom Through the Pain</small></span><span class="pm-post__more">···</span></div>
            <div class="pm-post__img">
              <span class="pm-post__k">Out now</span>
              <img class="pm-post__cover" src="assets/images/books/cover-20.webp" width="440" height="660" alt="" loading="lazy" decoding="async">
              <span class="pm-post__t">Bloom Through the Pain</span>
            </div>
            <?php render_component('previews/social-post-actions'); ?>
            <p class="pm-post__cap">Bloom Through the Pain by Kadeisha Corbin. Explore the book and its daily reflections on Amazon.</p>
            <div class="pm-post__next">
              <div class="pm-post__top"><span class="pm-post__av">A</span><span class="pm-post__who">americasbookservice<small>Campaign · Bloom Through the Pain</small></span><span class="pm-post__more">···</span></div>
              <div class="pm-post__peek"><span>“</span>Some stories stay with you.</div>
            </div>
          </div>
        </div>
        <figcaption><b>B</b>Social media content</figcaption>
      </figure>

      <figure class="pm-w pm-w--quote">
        <blockquote class="pm-quote"><span class="pm-quote__mark" aria-hidden="true">“</span>Some stories stay with you <em>long after the last page.</em></blockquote>
        <figcaption><b>C</b>Quote graphic: campaign line</figcaption>
      </figure>

      <figure class="pm-w pm-w--author">
        <article class="pm-mag" aria-label="Example author feature layout">
          <header class="pm-mag__top"><span>The Author</span><span>Feature</span></header>
          <h3 class="pm-mag__h">The story behind <em>The Naked Truth of AI 2.0</em></h3>
          <p class="pm-mag__dek">An author feature gives readers some background on the book and the person who wrote it.</p>
          <div class="pm-mag__cols">
            <p>We make room for the author’s own account of the writing, the subject and the people they hope to reach.</p>
            <p>The result is a piece you can share across your website, campaign and social profiles.</p>
          </div>
          <footer class="pm-mag__by">Featuring Douglas Hawes</footer>
        </article>
        <figcaption><b>D</b>Author feature</figcaption>
      </figure>

      <figure class="pm-w pm-w--excerpt">
        <div class="pm-spread" aria-hidden="true">
          <div class="pm-spread__page pm-spread__page--l">
            <span class="pm-spread__run">Poems of Life</span>
            <span class="pm-spread__ch">Chapter</span>
            <span class="pm-spread__num">One</span>
            <span class="pm-spread__orn">✦</span>
          </div>
          <div class="pm-spread__page pm-spread__page--r">
            <span class="pm-spread__run">O’Dell James Ford Sr.</span>
            <div class="pm-spread__text"><span class="pm-spread__drop">T</span><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
            <span class="pm-spread__folio">1</span>
          </div>
        </div>
        <figcaption><b>E</b>Book excerpt: typeset spread</figcaption>
      </figure>

      <figure class="pm-w pm-w--launch">
        <div class="pm-lw">
          <div class="pm-lw__bg" aria-hidden="true"><img class="" src="assets/images/books/cover-28.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></div>
          <div class="pm-lw__copy">
            <span class="pm-lw__k">Launch week</span>
            <span class="pm-lw__t">The countdown <em>ends.</em></span>
            <span class="pm-lw__s">The Dragon Who Finds His Roar · Linda Mazzia</span>
          </div>
          <div class="pm-lw__book" aria-hidden="true"><img class="" src="assets/images/books/cover-28.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></div>
        </div>
        <figcaption><b>F</b>Launch week</figcaption>
      </figure>
    </div>
  </div>
</section>

<section class="pm-launch on-dark" id="launch" aria-labelledby="launch-title">
  <div class="pm-launch__bg" aria-hidden="true"><img class="" src="assets/images/photos/1663735498345-39c452a6d5d8-2200x1400.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div>
  <div class="container pm-launch__grid">
    <div class="pm-launch__head">
      <p class="pm-eb pm-eb--light"><span>04</span>The launch</p>
      <h2 class="pm-launch__title pm-rv" id="launch-title">Make release day <em>feel connected.</em></h2>
      <p class="pm-body pm-body--light pm-rv">We bring the announcement, book links, artwork and author content together so readers can understand the book and know where to find it.</p>
    </div>
    <figure class="pm-reveal" aria-label="Bajo la Influencia del Kremlin presented at launch with its campaign artwork">
      <span class="pm-reveal__beam" aria-hidden="true"></span>
      <div class="pm-reveal__art" aria-hidden="true"><img class="" src="assets/images/books/cover-25.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></div>
      <div class="pm-reveal__sheet" aria-hidden="true"><span>Bajo la Influencia del Kremlin</span><span>Virginia Perez Perez</span><span>Out now</span></div>
      <div class="book3d pm-reveal__book"><div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" src="assets/images/books/cover-25.webp" width="440" height="660" alt="Cover of Bajo la Influencia del Kremlin by Virginia Perez Perez, published with <?= site_text('project_name') ?>" loading="lazy" decoding="async"></div><div class="book3d__shadow"></div></div>
      <div class="pm-reveal__card">
        <span class="pm-reveal__k">Launch week</span>
        <span class="pm-reveal__t">Day one.</span>
        <span class="pm-reveal__s">The story is out.</span>
      </div>
    </figure>
  </div>
</section>

<section class="pm-readers" id="readers" aria-labelledby="readers-title">
  <div class="container pm-readers__grid">
    <div class="pm-readers__art">
      <figure class="pm-readers__a pm-zoom"><img class="" src="assets/images/photos/1671459327299-51baffbc35e6-900x1150.webp" alt="A passer by looking through the window of a bookshop" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></figure>
      <figure class="pm-readers__b pm-zoom"><img class="" src="assets/images/photos/1491309055486-24ae511c15c7-700x560.webp" alt="Hands resting on the pages of an open book" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></figure>
      <figure class="pm-readers__c pm-zoom"><img class="" src="assets/images/photos/1513475382585-d06e58bcb0e0-600x720.webp" alt="A reader taking a book down from a shelf" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></figure>
    </div>
    <div class="pm-readers__copy">
      <p class="pm-eb"><span>05</span>The audience</p>
      <h2 class="pm-h2 pm-rv" id="readers-title">Start with <em>the likely reader.</em></h2>
      <p class="pm-body pm-rv">A useful campaign begins with a specific audience. We consider the books they read, the topics they follow and the channels where they welcome recommendations.</p>
      <ol class="pm-ch" role="list">
        <li class="pm-rv"><span class="pm-ch__n">01</span><h3>Social</h3><p>Posts and graphics suited to the channels your readers use.</p></li>
        <li class="pm-rv"><span class="pm-ch__n">02</span><h3>Author features</h3><p>An introduction to your background and the reasons you wrote the book.</p></li>
        <li class="pm-rv"><span class="pm-ch__n">03</span><h3>Book excerpts</h3><p>A short sample that lets readers experience the writing for themselves.</p></li>
        <li class="pm-rv"><span class="pm-ch__n">04</span><h3>Digital promotion</h3><p>Paid or planned placements selected around your readership and budget.</p></li>
        <li class="pm-rv"><span class="pm-ch__n">05</span><h3>Launch content</h3><p>Coordinated cover reveals, announcements and release reminders.</p></li>
        <li class="pm-rv"><span class="pm-ch__n">06</span><h3>Reader engagement</h3><p>Questions, replies and conversations that help readers get to know your work.</p></li>
      </ol>
    </div>
  </div>
</section>

<section class="pm-screens" id="screens" aria-labelledby="screens-title">
  <div class="container pm-screens__head">
    <p class="pm-eb"><span>06</span>Across platforms</p>
    <h2 class="pm-h2 pm-rv" id="screens-title">A familiar voice <em>across your channels.</em></h2>
    <p class="pm-body pm-rv">We adapt the copy and artwork for each format while keeping the book’s look and message consistent.</p>
  </div>
  <div class="pm-screens__scroll">
    <div class="pm-screens__stage" role="img" aria-label="Example social formats with titles from the <?= site_text('short_name') ?> catalogue: a quote card, a story, a feed post and an author card">
      <div class="pm-fmt pm-fmt--quote" aria-hidden="true">
        <div class="pm-sq pm-sq--quote">
          <span class="pm-sq__mark">“</span>
          <span class="pm-sq__q">Some stories stay with you.</span>
          <span class="pm-sq__src">The Bunny in the Superhero Cape · Linda Mazzia</span>
        </div>
        <span class="pm-screens__label">Quote card · 1:1</span>
      </div>
      <div class="pm-fmt pm-fmt--story" aria-hidden="true">
        <div class="pm-phone pm-phone--story">
          <div class="pm-phone__screen pm-story">
            <div class="pm-story__bg"><img class="" src="assets/images/books/cover-03.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></div>
            <div class="pm-story__bars"><i class="is-done"></i><i class="is-on"></i><i></i></div>
            <div class="pm-story__who"><span class="pm-post__av">A</span>americasbookservice</div>
            <div class="pm-story__body">
              <span class="pm-story__k">Launch week</span>
              <img class="pm-story__cover" src="assets/images/books/cover-03.webp" width="440" height="660" alt="" loading="lazy" decoding="async">
              <span class="pm-story__t">Day one.</span>
              <span class="pm-story__pill">Read the first pages</span>
            </div>
          </div>
        </div>
        <span class="pm-screens__label">Story · 9:16</span>
      </div>
      <div class="pm-fmt pm-fmt--feed" aria-hidden="true">
        <div class="pm-phone pm-phone--feed">
          <div class="pm-phone__screen">
            <div class="pm-phone__status"><span>9:41</span><span class="pm-phone__island"></span><span class="pm-phone__sig"><i></i><i></i><i></i></span></div>
            <div class="pm-post__top"><span class="pm-post__av">A</span><span class="pm-post__who">americasbookservice<small>Campaign · Whispers of Time</small></span><span class="pm-post__more">···</span></div>
            <div class="pm-post__img pm-post__img--warm">
              <span class="pm-post__k">Now available</span>
              <img class="pm-post__cover" src="assets/images/books/cover-24.webp" width="440" height="660" alt="" loading="lazy" decoding="async">
              <span class="pm-post__t">Whispers of Time</span>
            </div>
            <?php render_component('previews/social-post-actions'); ?>
            <p class="pm-post__cap">Explore Whispers of Time by Aggee Andrew Vetiaque, from the <?= site_text('project_name') ?> catalogue.</p>
            <div class="pm-post__next">
              <div class="pm-post__top"><span class="pm-post__av">A</span><span class="pm-post__who">americasbookservice<small>Campaign · Whispers of Time</small></span><span class="pm-post__more">···</span></div>
              <div class="pm-post__peek"><span>“</span>Some stories stay with you.</div>
            </div>
          </div>
        </div>
        <span class="pm-screens__label">Feed post</span>
      </div>
      <div class="pm-fmt pm-fmt--author" aria-hidden="true">
        <div class="pm-sq pm-sq--author">
          <span class="pm-sq__k">Meet the author</span>
          <span class="pm-sq__name">Waheed Shaffiek</span>
          <span class="pm-sq__line">on writing <em>You vs You</em></span>
          <span class="pm-sq__rule"></span>
        </div>
        <span class="pm-screens__label">Author card · 1:1</span>
      </div>
    </div>
  </div>
</section>

<section class="rw-posts" id="spotlights" aria-labelledby="spot-title">
  <div class="container">
    <div class="rw-posts__head">
      <div><p class="rw-eyebrow rw-rv"><span></span>Real author spotlights</p>
      <h2 class="rw-h2 rw-rv" id="spot-title">Meet some of <em>our featured authors.</em></h2></div>
      <div class="rw-rv"><p class="rw-lead">These spotlights introduce the author, explain the book and point interested readers towards it.</p>
      <p style="margin-top:22px"><a class="rw-link" href="our-work#authors">Meet the authors <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></p></div>
    </div>
    <ul class="rw-posts__list" role="list"><li class="rw-rv"><figure><img src="assets/images/spotlights/spotlight-7.webp" width="540" height="675" alt="Featured Author graphic for Emilio Degher by <?= site_text('project_name') ?>, listing his books, genres and a short biography" loading="lazy" decoding="async"><figcaption><b>Featured Author</b><span>Emilio Degher</span></figcaption></figure></li><li class="rw-rv"><figure><img src="assets/images/spotlights/spotlight-21.webp" width="540" height="675" alt="Book Spotlight graphic for Bloom Through the Pain by Kadeisha Corbin, with the book shown on a pedestal and an Available on Amazon badge" loading="lazy" decoding="async"><figcaption><b>Book Spotlight</b><span>Bloom Through the Pain by Kadeisha Corbin</span></figcaption></figure></li><li class="rw-rv"><figure><img src="assets/images/spotlights/spotlight-31.webp" width="540" height="675" alt="Book Spotlight graphic for The Naked Truth of AI 2.0 by Douglas Hawes, with the book shown on a pedestal and an Available on Amazon badge" loading="lazy" decoding="async"><figcaption><b>Book Spotlight</b><span>The Naked Truth of AI 2.0 by Douglas Hawes</span></figcaption></figure></li></ul>
  </div>
</section>

<section class="pm-mo" id="momentum" aria-labelledby="mo-title">
  <div class="container">
    <div class="pm-mo__head">
      <p class="pm-eb"><span>07</span>Momentum</p>
      <h2 class="pm-h2 pm-rv" id="mo-title">Give the campaign <em>room to develop.</em></h2>
      <p class="pm-body pm-rv">Readers rarely discover a book through a single post. We plan a sequence of useful introductions, samples and updates that builds familiarity over time.</p>
    </div>
    <div class="pm-mo__wrap">
      <span class="pm-mo__line" aria-hidden="true"><span class="pm-mo__draw"></span></span>
      <ol class="pm-mo__list" role="list">
      <li><span class="pm-mo__dot" aria-hidden="true"></span><span class="pm-mo__n">01</span><h3>Announce</h3><p>Share the cover and introduce the book’s subject.</p></li>
      <li><span class="pm-mo__dot" aria-hidden="true"></span><span class="pm-mo__n">02</span><h3>Introduce</h3><p>Tell readers who you are and why you wrote it.</p></li>
      <li><span class="pm-mo__dot" aria-hidden="true"></span><span class="pm-mo__n">03</span><h3>Engage</h3><p>Offer excerpts and questions that invite a response.</p></li>
      <li><span class="pm-mo__dot" aria-hidden="true"></span><span class="pm-mo__n">04</span><h3>Launch</h3><p>Share the release details and clear links to the book.</p></li>
      <li><span class="pm-mo__dot" aria-hidden="true"></span><span class="pm-mo__n">05</span><h3>Sustain</h3><p>Continue sharing relevant material after the launch.</p></li>
      </ol>
    </div>
  </div>
</section>

<section class="section section--ivory faq pm-faq" id="faq" aria-labelledby="faq-title">
  <div class="container faq__grid">
    <div class="faq__head">
      <p class="pm-eb"><span>08</span>Questions</p>
      <h2 class="h2" id="faq-title">Questions about <em>promoting your book.</em></h2>
    </div>
    <div class="faq__list" data-faq>
      <details class="qa" open>
        <summary><span>Why is book promotion important for authors?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Promotion helps readers learn that your book exists and decide whether it interests them. It supports discovery, but sales depend on several factors beyond the campaign.</p></div>
      </details>
      <details class="qa">
        <summary><span>What are the best book promotion strategies?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>The right mix depends on the book. We may recommend stronger listing copy, author content, email updates, outreach or paid advertising after reviewing your goals and budget.</p></div>
      </details>
      <details class="qa">
        <summary><span>How can professional book promotion from <?= site_text('project_name') ?> help?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>We help organise the work, prepare the materials and keep the message consistent. You have a plan to review rather than a collection of unrelated promotional tasks.</p></div>
      </details>
      <details class="qa">
        <summary><span>How long does it take to see results from book promotion?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Some activity brings a quick response, while author awareness develops over time. We agree on a campaign period and review the available results before recommending what comes next.</p></div>
      </details>
      <details class="qa">
        <summary><span>Do you offer Amazon book promotion services?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>We can help with listing copy, relevant search terms and advertising plans. Rankings, reader reviews and sales cannot be promised.</p></div>
      </details>
      <details class="qa">
        <summary><span>How can I get started with your book promotion services?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Send us the title, genre, publication status and your main goal. We will discuss a practical scope and the materials needed to begin.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="cta on-dark pm-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1515118058350-d72d92dd5140-2000.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async" data-parallax="0.06">
  </div>
  <div class="container pm-close">
    <div class="pm-close__copy">
      <p class="eyebrow">Ready to be discovered?</p>
      <h2 class="pm-close__title" id="cta-title">Let’s plan <em>your book’s introduction.</em></h2>
      <p class="pm-close__lead">Tell us who you wrote the book for. We will help you work out how to reach them.</p>
      <div class="pm-cta__btns">
        <button class="btn btn--light" type="button" data-open-lead>Start Your Campaign <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us</a>
      </div>
    </div>
    <figure class="pm-close__book">
      <span class="pm-close__glow" aria-hidden="true"></span>
      <div class="book3d pm-close__3d"><div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" src="assets/images/books/cover-18.webp" width="440" height="660" alt="Cover of The Legal Tender Question by Joseph R. K. Eshun, published with <?= site_text('project_name') ?>" loading="lazy" decoding="async"></div><div class="book3d__shadow"></div></div>
      <figcaption>The Legal Tender Question · Joseph R. K. Eshun<span>Published with <?= site_text('project_name') ?></span></figcaption>
    </figure>
  </div>
  <div class="container cta__grid pm-close__form">
    <div class="cta__copy">
      <p class="pm-close__h3">Share your promotion plans.</p>
      <p class="lead">Let us know the title, release date and kind of support you need.</p>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Promote your book', 'rows' => 4, 'messageLabel' => 'What are you writing, and where do you need help?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
