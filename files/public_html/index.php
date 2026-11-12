<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'index.php';
$pageScripts = ['assets/js/real-work2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/home2f72.css?v=20261109-eagle-logo'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Book Writing, Editing and Publishing Support | <?= site_text('project_name') ?></title>
  <meta name="description" content="Get help with your book, from the first idea to editing, cover design, publishing and promotion. Talk to us about where you want to begin.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Book Writing, Editing and Publishing Support | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Get help with your book, from the first idea to editing, cover design, publishing and promotion. Talk to us about where you want to begin.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1758961339803-2d5a43cb34d1-1600.webp"
        imagesrcset="assets/images/photos/1758961339803-2d5a43cb34d1-900.webp 900w, assets/images/photos/1758961339803-2d5a43cb34d1-1600.webp 1600w"
        imagesizes="(min-width: 1100px) 70vw, 100vw" fetchpriority="high">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1758801966638-dfd34dae251c-2400.webp" media="(min-width: 901px) and (max-resolution: 1dppx), (max-width: 900px) and (min-resolution: 1.01dppx)" fetchpriority="high">
  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1758801966638-dfd34dae251c-3600.webp" media="(min-width: 901px) and (min-resolution: 1.01dppx)" fetchpriority="high">
  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1758801966638-dfd34dae251c-1400.webp" media="(max-width: 900px) and (max-resolution: 1dppx)" fetchpriority="high">
  
</head>
<body>

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Home'],
    ['href' => 'publications', 'label' => 'Publications', 'icon' => '#i-book', 'text' => 'Books'],
    ['href' => '#services', 'section' => 'services', 'label' => 'Services', 'icon' => '#i-pen', 'text' => 'Services'],
    ['href' => '#reviews', 'section' => 'reviews', 'label' => 'Reviews', 'icon' => '#i-quote', 'text' => 'Reviews']
]]); ?>

<main id="main">

<section class="hero" id="top" aria-labelledby="hero-title">
  <div class="hero__ambient" aria-hidden="true">
    <div class="hero__ambient-img" data-parallax="0.08"></div>
    <div class="hero__veil"></div>
  </div>

  <div class="shell" data-shell>
    <nav class="shell__rail" aria-label="Jump to section">
      <a href="#top" class="is-active" aria-label="Home"><svg aria-hidden="true"><use href="#i-home"/></svg></a>
      <a href="publications" aria-label="Publications"><svg aria-hidden="true"><use href="#i-book"/></svg></a>
      <a href="#services" aria-label="Services"><svg aria-hidden="true"><use href="#i-pen"/></svg></a>
      <a href="#reviews" aria-label="Reviews"><svg aria-hidden="true"><use href="#i-quote"/></svg></a>
    </nav>

    <aside class="shell__side" aria-label="Catalogue and process">
      <section class="panel">
        <header class="panel__head">
          <h2 class="panel__title">Browse our books</h2>
          <a class="panel__more" href="publications">See all</a>
        </header>
        <ul class="minibooks" role="list">
          <li><button type="button" class="minibook" data-open-book="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava"><img src="assets/images/books/cover-03.webp" width="440" height="660" alt=""><span><b>The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</b><small>Corey T. Alston Sr.</small></span><i aria-hidden="true"><svg><use href="#i-arrow-ne"/></svg></i></button></li>
          <li><button type="button" class="minibook" data-open-book="Poems of Life"><img src="assets/images/books/cover-23.webp" width="440" height="660" alt=""><span><b>Poems of Life</b><small>O’Dell James Ford Sr.</small></span><i aria-hidden="true"><svg><use href="#i-arrow-ne"/></svg></i></button></li>
          <li><button type="button" class="minibook" data-open-book="Whispers of Time"><img src="assets/images/books/cover-24.webp" width="440" height="660" alt=""><span><b>Whispers of Time</b><small>Aggee Andrew Vetiaque</small></span><i aria-hidden="true"><svg><use href="#i-arrow-ne"/></svg></i></button></li>
          <li><button type="button" class="minibook" data-open-book="You vs You"><img src="assets/images/books/cover-26.webp" width="440" height="660" alt=""><span><b>You vs You</b><small>Waheed Shaffiek</small></span><i aria-hidden="true"><svg><use href="#i-arrow-ne"/></svg></i></button></li>
          <li><button type="button" class="minibook" data-open-book="The Legal Tender Question"><img src="assets/images/books/cover-18.webp" width="440" height="660" alt=""><span><b>The Legal Tender Question</b><small>Joseph R. K. Eshun</small></span><i aria-hidden="true"><svg><use href="#i-arrow-ne"/></svg></i></button></li>
        </ul>
      </section>

      <section class="panel">
        <header class="panel__head">
          <h2 class="panel__title">The steps to publication</h2>
          <a class="panel__more" href="book-publishing#approach">Process</a>
        </header>
        <ol class="ministeps" role="list">
          <li style="--p:.25"><span class="ministeps__n">01</span><span class="ministeps__t"><b>Outline</b><i></i></span><small>1/4</small></li>
          <li style="--p:.5"><span class="ministeps__n">02</span><span class="ministeps__t"><b>Writing</b><i></i></span><small>2/4</small></li>
          <li style="--p:.75"><span class="ministeps__n">03</span><span class="ministeps__t"><b>Proofreading</b><i></i></span><small>3/4</small></li>
          <li style="--p:1"><span class="ministeps__n">04</span><span class="ministeps__t"><b>Formatting &amp; Publishing</b><i></i></span><small>4/4</small></li>
        </ol>
      </section>
    </aside>

    <div class="shell__main">
      <div class="stage on-dark" data-feature>
        <div class="stage__bg" aria-hidden="true">
          <img src="assets/images/photos/1758961339803-2d5a43cb34d1-1600.webp"
               srcset="assets/images/photos/1758961339803-2d5a43cb34d1-900.webp 900w, assets/images/photos/1758961339803-2d5a43cb34d1-1600.webp 1600w"
               sizes="(min-width: 1100px) 70vw, 100vw" alt="" decoding="async" fetchpriority="high">
        </div>

        <div class="stage__copy">
          <ul class="stage__chips" role="list">
            <li><a class="chip" href="ghostwriting">Ghostwriting</a></li>
            <li><a class="chip" href="book-editing">Editing</a></li>
            <li><a class="chip" href="book-publishing">Publishing</a></li>
            <li><a class="chip" href="book-promotion">Book Promotion</a></li>
          </ul>
          <h1 class="display stage__title" id="hero-title"><span class="hero__line"><span style="--i:1">Your Book,</span></span><span class="hero__line"><span style="--i:2">Written <em>Your Way.</em></span></span></h1>
          <p class="stage__lead hero__in" style="--i:3">Have an idea you cannot leave alone? At <?= site_text('project_name') ?>, we help you write it, edit it and prepare it for readers, with publishing and promotion support when you need it.</p>
          <div class="stage__ctas hero__in" style="--i:4">
            <button class="btn btn--primary" type="button" data-open-lead>
              <svg class="btn__icon" aria-hidden="true"><use href="#i-pen"/></svg> Discuss Your Book
            </button>
            <a class="btn btn--glass" href="publications">
              <svg class="btn__icon" aria-hidden="true"><use href="#i-book"/></svg> Browse the Books
            </a>
            <a class="icon-btn stage__call" href="tel:<?= site_phone_number() ?>" aria-label="Call <?= site_text('phone') ?>"><svg aria-hidden="true"><use href="#i-phone"/></svg></a>
          </div>
        </div>

        <div class="stage__showcase" aria-label="Featured publication">
          <div class="stage__plinth" aria-hidden="true"></div>
          <div class="book3d is-mockup stage__book" data-tilt>
            <div class="book3d__body">
              <div class="book3d__back"></div>
              <img class="book3d__cover" data-feature-cover
                   src="assets/images/books/book-06.webp" width="600" height="1024" alt="Cover of The Goodness of God by Dr. Lee Roy Jefferson" decoding="async">
            </div>
            <div class="book3d__shadow"></div>
          </div>
        </div>

        <div class="stage__caption glass">
          <div class="stage__meta">
            <span class="label stage__kicker">Featured</span>
            <span class="chip chip--gold" data-feature-genre>Faith</span>
          </div>
          <div class="stage__text" data-feature-text aria-live="polite">
            <h2 class="stage__book-title" data-feature-title>The Goodness of God</h2>
            <p class="stage__book-sub" data-feature-sub>Reflection at 80</p>
            <p class="stage__book-author">by <span data-feature-author>Dr. Lee Roy Jefferson</span></p>
          </div>
          <button class="stage__view" type="button" data-feature-view aria-label="View featured book"><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></button>
        </div>

        <div class="stage__controls">
          <span class="stage__count" aria-hidden="true"><b data-feature-index>01</b><span> / </span><span data-feature-total>05</span></span>
          <button class="icon-btn" type="button" aria-label="Previous featured book" data-feature-prev><svg aria-hidden="true"><use href="#i-left"/></svg></button>
          <button class="icon-btn" type="button" aria-label="Next featured book" data-feature-next><svg aria-hidden="true"><use href="#i-right"/></svg></button>
        </div>
        <div class="stage__progress" aria-hidden="true"><span data-feature-progress></span></div>
      </div>

    </div>

  </div>

  <div class="trust" aria-label="Publications and media">
    <div class="trust__track" data-marquee>
      <ul class="trust__row" role="list">
        <li><img src="assets/images/site/featured-in-2.webp" width="127" height="36" alt="The New York Times" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-3.webp" width="116" height="36" alt="Esquire" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-4.webp" width="110" height="36" alt="Los Angeles Times" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-5.webp" width="128" height="36" alt="NBC" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-6.webp" width="122" height="36" alt="Forbes" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-7.webp" width="181" height="45" alt="Penguin Random House" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-8.webp" width="114" height="45" alt="The Wall Street Journal" loading="lazy"></li>
        <li><img src="assets/images/site/featured-in-1.webp" width="128" height="36" alt="BBC" loading="lazy"></li>
      </ul>
    </div>
  </div>
</section>

<ul class="hero-books" hidden aria-hidden="true">
  <li data-book data-title="The Goodness of God" data-sub="Reflection at 80" data-author="Dr. Lee Roy Jefferson" data-genre="Faith" data-cover="assets/images/books/book-06.webp" data-id="06" data-desc="The Goodness of God is a deeply personal reflection on a lifetime of faith, ministry, family, service, and perseverance." data-featured></li>
  <li data-book data-title="Bloom Through the Pain" data-sub="A 90-Day Affirmation and Reflection Journal" data-author="Kadeisha Corbin" data-genre="Self-Help" data-cover="assets/images/books/book-20.webp" data-id="20" data-desc="Bloom Through the Pain is a 90-day journey of affirmations, Scripture, and reflection created to help readers heal, find strength, and rediscover the beauty God has placed within them." data-featured></li>
  <li data-book data-title="The Naked Truth of AI 2.0" data-sub="Divine Intervention" data-author="Douglas Hawes" data-genre="Faith" data-cover="assets/images/books/book-05.webp" data-id="05" data-desc="As artificial intelligence advances at extraordinary speed, The Naked Truth of AI 2.0: Divine Intervention asks a deeper question: Can technology provide knowledge without understanding the truth behind our existence?" data-featured></li>
  <li data-book data-title="The Path of Truth" data-sub="Beyond Belief, Beyond Illusion" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-12.webp" data-id="12" data-featured></li>
  <li data-book data-title="Bajo la Influencia del Kremlin" data-sub="La Penetración Rusa en Venezuela" data-author="Virginia Perez Perez" data-genre="Politics" data-cover="assets/images/books/book-25.webp" data-id="25" data-desc="An in-depth examination of the strategic relationship between Venezuela and Russia, revealing a complex network of agreements across energy, finance, defense, and other critical sectors." data-featured></li>
  <li data-book data-title="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava" data-sub="" data-author="Corey T. Alston Sr." data-genre="Children’s Fiction" data-cover="assets/images/books/book-03.webp" data-id="03"></li>
  <li data-book data-title="The Legal Tender Question" data-sub="Volume One" data-author="Joseph R. K. Eshun" data-genre="Business &amp; Law" data-cover="assets/images/books/book-18.webp" data-id="18"></li>
  <li data-book data-title="Poems of Life" data-sub="Reflections on Life, Love, and the Human Journey" data-author="O’Dell James Ford Sr." data-genre="Poetry" data-cover="assets/images/books/book-23.webp" data-id="23"></li>
  <li data-book data-title="Whispers of Time" data-sub="Poetry · French / Haitian Creole" data-author="Aggee Andrew Vetiaque" data-genre="Poetry" data-cover="assets/images/books/book-24.webp" data-id="24"></li>
  <li data-book data-title="You vs You" data-sub="How to Overcome Doubt, Build Discipline, and Create a Life with Purpose" data-author="Waheed Shaffiek" data-genre="Self-Help" data-cover="assets/images/books/book-26.webp" data-id="26"></li>
</ul>

<section class="section section--ivory services" id="services" aria-labelledby="services-title">
  <div class="ed-bg ed-bg--svc" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.05"></div></div>
  <div class="container">
    <div class="services__head">
      <div>
        <span class="ghost-num" aria-hidden="true">01</span><p class="eyebrow" data-reveal>Services</p>
        <h2 class="h2" id="services-title" data-reveal style="--d:.08s">Help for your book, <em>at every stage.</em></h2>
      </div>
      <p class="lead" data-reveal style="--d:.16s">Start with the service you need today. We can help with a first draft, an editorial review, a cover or a complete publishing plan. Audiobooks, illustration and promotion give you more ways to share your work.</p>
    </div>

    <div class="cat">
      <article class="cat-feature on-dark" data-reveal>
        <a class="cat-feature__link" href="ghostwriting">
          <span class="cat-feature__bg" aria-hidden="true"><img src="assets/images/photos/1758961339803-2d5a43cb34d1-1200.webp" width="1200" height="800" alt="" loading="lazy" decoding="async"></span>
          <span class="cat-feature__copy">
            <span class="cat-feature__meta"><span class="cat__n">01</span><span class="label">Featured service</span></span>
            <span class="cat-feature__title">Ghostwriting</span>
            <span class="cat-feature__desc">Develop your notes and conversations into a full manuscript with writing that reflects your perspective.</span>
            <span class="cat-feature__cta">Explore ghostwriting <svg aria-hidden="true"><use href="#i-arrow"/></svg></span>
          </span>
          <span class="cat-feature__book" aria-hidden="true">
            <span class="book3d">
              <span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/cover-12.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span>
              <span class="book3d__shadow"></span>
            </span>
          </span>
          <span class="cat-feature__caption"><span class="label">Published with <?= site_text('short_name') ?></span><span>The Path of Truth by Emilio Degher</span></span>
        </a>
      </article>

      <div class="cat-pair">
        <a class="cat-card cat-card--edit" href="book-editing" data-reveal style="--d:.08s">
          <span class="cat__n">02</span>
          <span class="cat-card__title">Book Editing</span>
          <span class="cat-card__desc">Get help with structure, language and final checks while keeping the voice of your draft.</span>
          <span class="cat__arrow"><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></span>
          <span class="cat-card__mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
        </a>
        <a class="cat-card cat-card--pub" href="book-publishing" data-reveal style="--d:.14s">
          <span class="cat__n">03</span>
          <span class="cat-card__title">Book Publishing</span>
          <span class="cat-card__desc">Prepare the interior, cover and files for the publishing route you have chosen.</span>
          <span class="cat__arrow"><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></span>
          <span class="cat-card__cover" aria-hidden="true"><img src="assets/images/books/cover-06.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span>
        </a>
      </div>

      <div class="sv-house" data-reveal style="--d:.1s">
        <div class="sv-house__head">
          <p class="label">Explore your options</p>
          <h3 class="sv-house__title">17 ways to support your book.</h3>
          <p class="sv-house__lead">Find the right help across writing, production, distribution and author promotion.</p>
        </div>
        <div class="sv-house__grid">
          <section class="sv-house__col" aria-labelledby="svg-0">
            <header class="sv-house__colhead"><span class="sv-house__n">I.</span><h4 id="svg-0">Writing &amp; Editorial</h4><span class="sv-house__c">03</span></header>
            <ul role="list">
              <li><a href="ghostwriting"><span class="sv-house__t">Ghostwriting</span><span class="sv-house__d">Work with a writer to give your ideas structure and develop the chapter drafts.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="book-editing"><span class="sv-house__t">Book Editing &amp; Formatting</span><span class="sv-house__d">Review the draft, work through revisions and prepare the text for your chosen edition.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="articles-magazines"><span class="sv-house__t">Articles &amp; Magazines</span><span class="sv-house__d">Share your knowledge through articles and features prepared for a particular readership.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
            </ul>
          </section>
          <section class="sv-house__col" aria-labelledby="svg-1">
            <header class="sv-house__colhead"><span class="sv-house__n">II.</span><h4 id="svg-1">Publishing &amp; Production</h4><span class="sv-house__c">05</span></header>
            <ul role="list">
              <li><a href="book-publishing"><span class="sv-house__t">Book Publishing</span><span class="sv-house__d">Coordinate the formatting, production checks and submission of your finished manuscript.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="book-cover-design"><span class="sv-house__t">Book Cover Design</span><span class="sv-house__d">Explore cover concepts and artwork that suit your story and genre.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="illustration"><span class="sv-house__t">Illustration</span><span class="sv-house__d">Plan artwork around the characters, scenes and ideas in your book.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="audio-book"><span class="sv-house__t">Audiobook Production</span><span class="sv-house__d">Create a listening edition with voice selection, recording and audio editing.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="book-video"><span class="sv-house__t">Book Video &amp; Trailers</span><span class="sv-house__d">Introduce your book with a short video prepared for your promotional channels.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
            </ul>
          </section>
          <section class="sv-house__col" aria-labelledby="svg-2">
            <header class="sv-house__colhead"><span class="sv-house__n">III.</span><h4 id="svg-2">Rights &amp; Distribution</h4><span class="sv-house__c">02</span></header>
            <ul role="list">
              <li><a href="copyrights-isbn"><span class="sv-house__t">Copyrights &amp; ISBN</span><span class="sv-house__d">Organise ISBNs, copyright paperwork and the title details for your editions.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="global-distribution"><span class="sv-house__t">Global Distribution</span><span class="sv-house__d">Prepare listings and distribution settings for the channels you want to use.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
            </ul>
          </section>
          <section class="sv-house__col" aria-labelledby="svg-3">
            <header class="sv-house__colhead"><span class="sv-house__n">IV.</span><h4 id="svg-3">Marketing &amp; Visibility</h4><span class="sv-house__c">07</span></header>
            <ul role="list">
              <li><a href="book-promotion"><span class="sv-house__t">Book Promotion &amp; Marketing</span><span class="sv-house__d">Plan launch materials and promotional activity around your likely readers.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="author-website"><span class="sv-house__t">Author Website</span><span class="sv-house__d">Give readers a clear place to explore your books, news and background.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="web-social-media"><span class="sv-house__t">Web &amp; Social Media</span><span class="sv-house__d">Connect your website and social profiles with a practical author content plan.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="billboard-campaigns"><span class="sv-house__t">Billboard Campaigns</span><span class="sv-house__d">Plan outdoor book artwork and coordinate the agreed advertising locations.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="podcasts"><span class="sv-house__t">Podcasts</span><span class="sv-house__d">Prepare for guest interviews or develop and produce your own author episodes.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="tv-interviews"><span class="sv-house__t">TV Interviews</span><span class="sv-house__d">Practise the interview and prepare the story angles and materials for outreach.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
              <li><a href="book-fairs"><span class="sv-house__t">Book Fairs</span><span class="sv-house__d">Prepare the displays and information needed to present your book at suitable events.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li>
            </ul>
          </section>
        </div>
      </div>
    </div>
  </div>

  <div class="container genres">
    <div class="genres__head" data-reveal>
      <div>
        <span class="ghost-num" aria-hidden="true">02</span><p class="eyebrow">Ghostwriting specialties</p>
        <h3 class="h3 genres__title">Writing support for the story you want to tell</h3>
      </div>
      <a class="text-link" href="ghostwriting">Explore ghostwriting <svg width="18" height="18" aria-hidden="true"><use href="#i-arrow"/></svg></a>
    </div>
    <ul class="genres__grid" role="list">
      <li class="genre" data-reveal style="--d:0s"><span class="genre__n">i.</span><h4>Blog Ghostwriting</h4><p>Share useful articles in a voice your readers recognise. We turn your notes and ideas into posts with a clear purpose and a natural flow.</p></li>
      <li class="genre" data-reveal style="--d:.06s"><span class="genre__n">ii.</span><h4>Celebrity Writing</h4><p>Tell the story behind your public life. We work through the memories, turning points and experiences you want readers to understand.</p></li>
      <li class="genre" data-reveal style="--d:.12s"><span class="genre__n">iii.</span><h4>Legal Ghostwriting</h4><p>Turn your professional knowledge into readable books and articles, with careful attention to terminology and your review of the details.</p></li>
      <li class="genre" data-reveal style="--d:.18s"><span class="genre__n">iv.</span><h4>Medical Ghostwriting</h4><p>Help readers understand your subject through clear explanations and an organised manuscript, with technical details reviewed by you.</p></li>
      <li class="genre" data-reveal style="--d:.24s"><span class="genre__n">v.</span><h4>Health &amp; Fitness Ghostwriting</h4><p>Build a practical book around your approach to health and fitness, using clear guidance and an encouraging voice.</p></li>
      <li class="genre" data-reveal style="--d:.30s"><span class="genre__n">vi.</span><h4>Fiction Ghostwriting</h4><p>Bring us your characters, a rough plot or a world you have imagined. We will help you develop the scenes and connect them into a complete story.</p></li>
    </ul>
  </div>

  <div class="container svc-path" data-reveal>
    <p class="svc-path__label label">How a book comes together</p>
    <ol class="svc-path__steps" role="list">
      <li>Idea</li><li>Manuscript</li><li>Design</li><li>Publish</li><li>Promote</li>
    </ol>
    <a class="svc-path__link" href="book-publishing#approach">See our process <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
  </div>
</section>

<section class="rw-sel rw-dark" id="selected-work" aria-labelledby="sel-title">
  <div class="container">
    <div class="rw-sel__rule rw-rv" aria-hidden="true"><span><?= site_text('short_name') ?> <i>/</i> Selected work</span><span>From the catalogue</span><span>In print</span></div>
    <div class="rw-sel__head">
      <div><p class="rw-eyebrow rw-rv"><span></span>Selected work</p>
      <h2 class="rw-h2 rw-rv" id="sel-title">A look at the books <em>on our shelves.</em></h2></div>
      <div class="rw-sel__side rw-rv">
        <p class="rw-lead">Browse titles from the <?= site_text('project_name') ?> catalogue and see how different ideas take shape as finished books.</p>
        <div class="rw-sel__links"><a class="rw-link" href="publications">Explore our publications <svg aria-hidden="true"><use href="#i-arrow"/></svg></a><a class="rw-link" href="featured-authors">Meet our featured authors <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
      </div>
    </div>
    <div class="rw-table" data-rw-table>
<div class="rw-table__row"><a class="rw-book rw-table__book" href="our-work#book-26" aria-label="You vs You by Waheed Shaffiek, view in Our Work" data-rw-book="26" style="--s:0.52;--z:7"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-26-s.webp" width="360" height="614" alt="You vs You: How to Overcome Doubt, Build Discipline, and Create a Life with Purpose by Waheed Shaffiek, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">You vs You</span><span class="rw-cap__s">How to Overcome Doubt, Build Discipline, and Create a Life with Purpose</span><span class="rw-cap__a">Waheed Shaffiek</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="our-work#book-23" aria-label="Poems of Life by O’Dell James Ford Sr., view in Our Work" data-rw-book="23" style="--s:0.62;--z:8"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-23-s.webp" width="360" height="614" alt="Poems of Life: Reflections on Life, Love, and the Human Journey by O’Dell James Ford Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Poems of Life</span><span class="rw-cap__s">Reflections on Life, Love, and the Human Journey</span><span class="rw-cap__a">O’Dell James Ford Sr.</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="our-work#corey-t-alston-sr" aria-label="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., view in Our Work" data-rw-book="03" style="--s:0.74;--z:9"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-03.webp" width="600" height="1024" alt="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="rw-cap__a">Corey T. Alston Sr.</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book is-lead" href="our-work#lee-roy-jefferson" aria-label="The Goodness of God by Dr. Lee Roy Jefferson, view in Our Work" data-rw-book="06" style="--s:1;--z:20"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-06.webp" width="600" height="1024" alt="The Goodness of God: Reflection at 80 by Dr. Lee Roy Jefferson, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Goodness of God</span><span class="rw-cap__s">Reflection at 80</span><span class="rw-cap__a">Dr. Lee Roy Jefferson</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="our-work#virginia-perez-perez" aria-label="Bajo la Influencia del Kremlin by Virginia Perez Perez, view in Our Work" data-rw-book="25" style="--s:0.74;--z:11"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-25.webp" width="600" height="1024" alt="Bajo la Influencia del Kremlin: La Penetración Rusa en Venezuela by Virginia Perez Perez, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Bajo la Influencia del Kremlin</span><span class="rw-cap__s">La Penetración Rusa en Venezuela</span><span class="rw-cap__a">Virginia Perez Perez</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="our-work#book-24" aria-label="Whispers of Time by Aggee Andrew Vetiaque, view in Our Work" data-rw-book="24" style="--s:0.62;--z:12"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-24-s.webp" width="360" height="614" alt="Whispers of Time: Poetry · French / Haitian Creole by Aggee Andrew Vetiaque, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Whispers of Time</span><span class="rw-cap__s">Poetry · French / Haitian Creole</span><span class="rw-cap__a">Aggee Andrew Vetiaque</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="our-work#book-18" aria-label="The Legal Tender Question by Joseph R. K. Eshun, view in Our Work" data-rw-book="18" style="--s:0.52;--z:13"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-18-s.webp" width="360" height="614" alt="The Legal Tender Question: Volume One by Joseph R. K. Eshun, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Legal Tender Question</span><span class="rw-cap__s">Volume One</span><span class="rw-cap__a">Joseph R. K. Eshun</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
<div class="rw-table__surface" aria-hidden="true"></div></div>
    <p class="rw-now" data-rw-now aria-live="polite"><span class="rw-now__n">In focus</span><span class="rw-now__main"><span class="rw-cap__t">The Goodness of God</span><span class="rw-cap__s">Reflection at 80</span><span class="rw-cap__a">Dr. Lee Roy Jefferson</span></span><span class="rw-now__hint">Explore a cover for book details</span></p>
  </div>
</section>

<section class="section section--ivory about" id="about" aria-labelledby="about-title">
  <div class="ed-bg ed-bg--about" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.05"></div></div>
  <div class="container about__grid">
    <figure class="about__figure" data-reveal="scale">
      <img src="assets/images/books/about-books.webp" width="492" height="471" alt="The Goodness of God, Whispers of Time and You vs You, books published with <?= site_text('project_name') ?>" loading="lazy" decoding="async">
      <figcaption class="about__badge"><span class="label"><?= site_text('project_name') ?></span><span>Writing · Editing · Publishing · Promotion</span></figcaption>
    </figure>
    <div class="about__copy">
      <span class="ghost-num" aria-hidden="true">04</span><p class="eyebrow" data-reveal>About us</p>
      <h2 class="h2" id="about-title" data-reveal style="--d:.08s">A team that takes <em>your book seriously.</em></h2>
      <p class="lead" data-reveal style="--d:.14s">At <?= site_text('project_name') ?>, we take time to understand what you want to write and where you need help. You review the work as it develops, ask questions and have a say in the decisions that shape your book.</p>

      <div class="about__partner" data-reveal style="--d:.2s">
        <h3 class="about__partner-title">Choose publishing support that fits your manuscript and your plans.</h3>
        <ul class="ticks" role="list">
          <li>Practical Publishing Guidance</li>
          <li>Suitable Distribution Channels</li>
          <li>Support With Your Decisions</li>
          <li>An Organised Project Schedule</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container why">
    <div class="why__head" data-reveal>
      <div>
        <p class="eyebrow">Why <?= site_text('project_name') ?></p>
        <h2 class="h3 why__title">Practical help, <em>from people who know books.</em></h2>
      </div>
      <p>A good working relationship makes a difference. We keep the work organised, explain the next step and make room for your feedback.</p>
    </div>
    <ul class="why__grid" role="list">
      <li class="why__item" data-reveal style="--d:0s"><span class="why__k">01</span><h3>Writers who listen</h3><p>Your experiences and ideas guide the draft, so the book feels like yours.</p></li>
      <li class="why__item" data-reveal style="--d:.08s"><span class="why__k">02</span><h3>Room to revise</h3><p>We work through your feedback to improve the draft and keep it on course.</p></li>
      <li class="why__item" data-reveal style="--d:.16s"><span class="why__k">03</span><h3>Attention to the reader</h3><p>Clear structure, believable scenes and a steady voice help readers stay with the book.</p></li>
      <li class="why__item" data-reveal style="--d:.24s"><span class="why__k">04</span><h3>Support along the way</h3><p>Ask questions, share feedback and get help with the next stage of your project.</p></li>
    </ul>
  </div>
</section>

<section class="section section--paper reviews" id="reviews" aria-labelledby="reviews-title" data-reviews>
  <div class="ed-bg ed-bg--rev" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.04"></div></div>
  <div class="container reviews__grid">
    <div class="reviews__head">
      <span class="ghost-num" aria-hidden="true">05</span><p class="eyebrow" data-reveal>Author stories</p>
      <h2 class="h2" id="reviews-title" data-reveal style="--d:.08s">Authors share <em>their experience.</em></h2>
      <p class="reviews__sub" data-reveal style="--d:.14s">Read what clients have shared about working with our team.</p>
      <div class="reviews__controls" data-reveal style="--d:.2s">
        <button class="icon-btn icon-btn--light" type="button" aria-label="Previous review" data-review-prev><svg aria-hidden="true"><use href="#i-left"/></svg></button>
        <button class="icon-btn icon-btn--light" type="button" aria-label="Next review" data-review-next><svg aria-hidden="true"><use href="#i-right"/></svg></button>
        <?php if (site_social_url('trustpilot') !== ''): ?>
        <a class="reviews__tp" href="<?= component_escape(site_social_url('trustpilot')) ?>" target="_blank" rel="noopener">
          <img src="assets/images/site/trustpilot.webp" width="145" height="70" alt="Review us on Trustpilot" loading="lazy">
        </a>
        <?php endif; ?>
      </div>
    </div>

    <div class="quotes" data-reveal="fade">
      <figure class="quote is-active" data-review>
        <svg class="quote__mark" aria-hidden="true"><use href="#i-quote"/></svg>
        <blockquote><p>I had a fantastic experience working with <?= site_text('project_name') ?>. They were able to effectively target my book’s audience and increase its visibility on various online platforms. I highly recommend their services to any author looking to improve their book’s sales and exposure.</p></blockquote>
        <figcaption>
          <img src="assets/images/site/reviewer-george-clint.webp" width="56" height="56" alt="" loading="lazy">
          <span><b>George Clint</b><span>Author</span></span>
        </figcaption>
      </figure>
      <figure class="quote" data-review>
        <svg class="quote__mark" aria-hidden="true"><use href="#i-quote"/></svg>
        <blockquote><p><?= site_text('project_name') ?> book marketing service was exactly what I needed to get my book noticed. They were knowledgeable and professional, and provided detailed reports on the progress of my book’s marketing campaign. I am thrilled with the results and would use their services again.</p></blockquote>
        <figcaption>
          <img src="assets/images/site/reviewer-olivia.webp" width="56" height="56" alt="" loading="lazy">
          <span><b>Olivia</b><span>Author</span></span>
        </figcaption>
      </figure>
      <div class="quotes__dots" role="tablist" aria-label="Choose review">
        <button type="button" role="tab" aria-selected="true" aria-label="Review 1" data-review-dot></button>
        <button type="button" role="tab" aria-selected="false" aria-label="Review 2" data-review-dot></button>
      </div>
    </div>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php render_component('modals/book-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
