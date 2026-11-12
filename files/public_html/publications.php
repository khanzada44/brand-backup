<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'publications.php';
$pageScripts = ['assets/js/publications2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/publications2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Browse Our Published Book Catalogue | <?= site_text('project_name') ?></title>
  <meta name="description" content="Explore the books in our catalogue across fiction, poetry, faith, business and more. Select a title to learn about the book and its author.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Browse Our Published Book Catalogue | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Explore the books in our catalogue across fiction, poetry, faith, business and more. Select a title to learn about the book and its author.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-pubs">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#catalogue', 'section' => 'catalogue', 'label' => 'The catalogue', 'icon' => '#i-book', 'text' => 'Books'],
    ['href' => '#collections', 'section' => 'collections', 'label' => 'Collections', 'icon' => '#i-steps', 'text' => 'Collections'],
    ['href' => '#index', 'section' => 'index', 'label' => 'Catalogue index', 'icon' => '#i-quote', 'text' => 'Index'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="pc-hero on-dark" id="top" aria-labelledby="pc-title">
  <div class="pc-hero__glow" aria-hidden="true"></div>
  <div class="container">
    <nav class="pc-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li aria-current="page">Publications</li></ol></nav>
    <div class="pc-rule" aria-hidden="true"><span><?= site_text('short_name') ?> <i>/</i> Catalogue</span><span><?= site_text('project_name') ?></span><span>2026 Edition</span></div>
    <div class="pc-hero__grid">
      <div class="pc-hero__copy">
        <p class="pc-eyebrow pc-eyebrow--light">Our publications</p>
        <h1 class="pc-title" id="pc-title">Take a look <em>through our catalogue.</em></h1>
      </div>
      <div class="pc-hero__side">
        <p class="pc-hero__lead">Browse books published with <?= site_text('project_name') ?>, with titles across personal stories, fiction, faith, poetry and professional subjects.</p>
        <dl class="pc-facts">
          <div><dt>29</dt><dd>titles in the catalogue</dd></div>
          <div><dt>08</dt><dd>categories</dd></div>
        </dl>
      </div>
    </div>
    <div class="pc-hero__stage" role="group" aria-label="Books from the catalogue">
      <div class="pc-hero__row" style="--sum:5.30;--n:7"><button type="button" class="pc-book pc-hero__book pc-hero__book--3" data-pc-open="24" aria-label="View Whispers of Time by Aggee Andrew Vetiaque" style="--s:0.6"><span class="pc-book__obj"><img src="assets/images/books/book-24-s.webp" width="360" height="614" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button><button type="button" class="pc-book pc-hero__book pc-hero__book--2" data-pc-open="23" aria-label="View Poems of Life by O’Dell James Ford Sr." style="--s:0.74"><span class="pc-book__obj"><img src="assets/images/books/book-23-s.webp" width="360" height="614" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button><button type="button" class="pc-book pc-hero__book pc-hero__book--1" data-pc-open="13" aria-label="View The Exodus Code by Emilio Degher" style="--s:0.86"><span class="pc-book__obj"><img src="assets/images/books/book-13-s.webp" width="360" height="614" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button><button type="button" class="pc-book pc-hero__book is-lead pc-hero__book--0" data-pc-open="04" aria-label="View The Cosmic Mind by Maneseh" style="--s:1"><span class="pc-book__obj"><img src="assets/images/books/book-04.webp" width="600" height="1024" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button><button type="button" class="pc-book pc-hero__book pc-hero__book--1" data-pc-open="27" aria-label="View Change to Stay Unchanged by Yerzhan Dosmukhamedov" style="--s:0.82"><span class="pc-book__obj"><img src="assets/images/books/book-27-s.webp" width="360" height="614" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button><button type="button" class="pc-book pc-hero__book pc-hero__book--2" data-pc-open="20" aria-label="View Bloom Through the Pain by Kadeisha Corbin" style="--s:0.7"><span class="pc-book__obj"><img src="assets/images/books/book-20-s.webp" width="360" height="614" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button><button type="button" class="pc-book pc-hero__book pc-hero__book--3" data-pc-open="03" aria-label="View The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr." style="--s:0.58"><span class="pc-book__obj"><img src="assets/images/books/book-03-s.webp" width="360" height="614" alt="" decoding="async"><span class="pc-book__floor" aria-hidden="true"></span></span></button></div>
      <div class="pc-hero__table" aria-hidden="true"></div>
    </div>
    <div class="pc-contents">
      <p class="pc-contents__label">A guide to the collection</p>
      <ul role="list"><li><button type="button" data-pc-filter="Philosophy &amp; Spirituality"><span>Philosophy &amp; Spirituality</span><b>08</b></button></li><li><button type="button" data-pc-filter="Politics"><span>Politics</span><b>05</b></button></li><li><button type="button" data-pc-filter="Children’s Fiction"><span>Children’s Fiction</span><b>04</b></button></li><li><button type="button" data-pc-filter="Business &amp; Law"><span>Business &amp; Law</span><b>03</b></button></li><li><button type="button" data-pc-filter="Faith"><span>Faith</span><b>03</b></button></li><li><button type="button" data-pc-filter="Self-Help"><span>Self Help</span><b>03</b></button></li><li><button type="button" data-pc-filter="Poetry"><span>Poetry</span><b>02</b></button></li><li><button type="button" data-pc-filter="Fiction"><span>Fiction</span><b>01</b></button></li></ul>
    </div>
  </div>
</section>

<section class="pub pb-cat" id="catalogue" aria-labelledby="pf-heading">
  <h2 class="pb-sr" id="pf-heading">Featured book and catalogue</h2>
  <div class="pub-feature" id="featured" data-pub-feature aria-label="Featured publication" role="region">
    <div class="pub-feature__bg" aria-hidden="true"><div class="pub-feature__img" data-parallax="0.06" data-photo="1761824197923-283b689fe7aa-2200"></div></div>
    <div class="container pub-feature__grid">
      <figure class="pub-feature__stage" data-pub-rv>
        <span class="pub-feature__light" aria-hidden="true"></span>
        <div class="book3d is-mockup pub-feature__book"><div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" data-pf-cover src="assets/images/books/book-06.webp" width="600" height="1024" alt="Cover of The Goodness of God by Dr. Lee Roy Jefferson" decoding="async"></div><div class="book3d__shadow"></div></div>
        <span class="pub-feature__plinth" aria-hidden="true"></span>
      </figure>
      <div class="pub-feature__copy" aria-live="polite">
        <div class="pub-feature__meta"><span class="pub-feature__kicker">Featured edition</span><span class="pub-feature__genre" data-pf-genre>Faith</span></div>
        <h3 class="pub-feature__title" data-pf-title>The Goodness of God</h3>
        <p class="pub-feature__sub" data-pf-sub>Reflection at 80</p>
        <p class="pub-feature__desc" data-pf-desc>A personal account of faith, family and service, reflecting on the experiences of a lifetime.</p>
        <p class="pub-feature__author">by <span data-pf-author>Dr. Lee Roy Jefferson</span></p>
        <button class="pub-link" type="button" data-pf-view>View publication <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <div class="pub-feature__nav">
          <span class="pub-feature__count" aria-hidden="true"><b data-pf-index>01</b> / 05</span>
          <span class="pub-feature__progress" aria-hidden="true"><span data-pf-progress style="width:20.00%"></span></span>
          <button class="pub-arrow" type="button" aria-label="Previous featured publication" data-pf-prev><svg aria-hidden="true"><use href="#i-left"/></svg></button>
          <button class="pub-arrow" type="button" aria-label="Next featured publication" data-pf-next><svg aria-hidden="true"><use href="#i-right"/></svg></button>
          <ol class="pub-feature__thumbs" role="list">
          <li><button type="button" class="pub-feature__thumb is-active" data-pf-go="0" aria-label="Show The Goodness of God"><img src="assets/images/books/cover-06.webp" width="440" height="660" alt=""" loading="lazy" decoding="async"></button></li>
          <li><button type="button" class="pub-feature__thumb" data-pf-go="1" aria-label="Show Bloom Through the Pain"><img src="assets/images/books/cover-20.webp" width="440" height="660" alt=""" loading="lazy" decoding="async"></button></li>
          <li><button type="button" class="pub-feature__thumb" data-pf-go="2" aria-label="Show The Naked Truth of AI 2.0"><img src="assets/images/books/cover-05.webp" width="440" height="660" alt=""" loading="lazy" decoding="async"></button></li>
          <li><button type="button" class="pub-feature__thumb" data-pf-go="3" aria-label="Show The Path of Truth"><img src="assets/images/books/cover-12.webp" width="440" height="660" alt=""" loading="lazy" decoding="async"></button></li>
          <li><button type="button" class="pub-feature__thumb" data-pf-go="4" aria-label="Show Bajo la Influencia del Kremlin"><img src="assets/images/books/cover-25.webp" width="440" height="660" alt=""" loading="lazy" decoding="async"></button></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="pub-library" id="pub-shelf">
    <div class="container pub-library__head">
      <div>
        <p class="pub-eyebrow" data-pub-rv>The shelf</p>
        <h3 class="pub-h3" data-pub-rv>Find your <em>next title.</em></h3>
      </div>
      <div class="pub-library__tools">
        <div class="filters pub-filters" role="toolbar" aria-label="Filter publications" data-filters>
            <button type="button" class="filters__btn pub-filter is-active" data-filter="all" aria-pressed="true">All</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Philosophy & Spirituality" aria-pressed="false">Philosophy & Spirituality</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Faith" aria-pressed="false">Faith</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Politics" aria-pressed="false">Politics</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Poetry" aria-pressed="false">Poetry</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Self-Help" aria-pressed="false">Self Help</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Children’s Fiction" aria-pressed="false">Children’s Fiction</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Fiction" aria-pressed="false">Fiction</button>
            <button type="button" class="filters__btn pub-filter" data-filter="Business & Law" aria-pressed="false">Business & Law</button>
        </div>
        <div class="pub-library__arrows">
          <button class="pub-arrow" type="button" aria-label="Scroll books left" data-rail-prev><svg aria-hidden="true"><use href="#i-left"/></svg></button>
          <button class="pub-arrow" type="button" aria-label="Scroll books right" data-rail-next><svg aria-hidden="true"><use href="#i-right"/></svg></button>
        </div>
      </div>
    </div>
    <div class="pub-shelf" data-shelf data-pub-shelf>
      <ul class="pub-shelf__track" role="list" data-shelf-track>
          <li class="bcard pub-book" data-book data-title="The Goodness of God" data-sub="Reflection at 80" data-author="Dr. Lee Roy Jefferson" data-genre="Faith" data-cover="assets/images/books/book-06.webp" data-id="06" data-desc="The Goodness of God is a deeply personal reflection on a lifetime of faith, ministry, family, service, and perseverance." data-featured style="--b:178px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Goodness of God by Dr. Lee Roy Jefferson">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-06.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Goodness of God</span><span class="pub-book__author">Dr. Lee Roy Jefferson</span><span class="pub-book__genre">Faith</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Bloom Through the Pain" data-sub="A 90-Day Affirmation and Reflection Journal" data-author="Kadeisha Corbin" data-genre="Self-Help" data-cover="assets/images/books/book-20.webp" data-id="20" data-desc="Bloom Through the Pain is a 90-day journey of affirmations, Scripture, and reflection created to help readers heal, find strength, and rediscover the beauty God has placed within them." data-featured style="--b:150px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Bloom Through the Pain by Kadeisha Corbin">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-20.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Bloom Through the Pain</span><span class="pub-book__author">Kadeisha Corbin</span><span class="pub-book__genre">Self Help</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Naked Truth of AI 2.0" data-sub="Divine Intervention" data-author="Douglas Hawes" data-genre="Faith" data-cover="assets/images/books/book-05.webp" data-id="05" data-desc="As artificial intelligence advances at extraordinary speed, The Naked Truth of AI 2.0: Divine Intervention asks a deeper question: Can technology provide knowledge without understanding the truth behind our existence?" data-featured style="--b:198px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Naked Truth of AI 2.0 by Douglas Hawes">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-05.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Naked Truth of AI 2.0</span><span class="pub-book__author">Douglas Hawes</span><span class="pub-book__genre">Faith</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Path of Truth" data-sub="Beyond Belief, Beyond Illusion" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-12.webp" data-id="12" data-featured style="--b:162px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Path of Truth by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-12.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Path of Truth</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Bajo la Influencia del Kremlin" data-sub="La Penetración Rusa en Venezuela" data-author="Virginia Perez Perez" data-genre="Politics" data-cover="assets/images/books/book-25.webp" data-id="25" data-desc="An in-depth examination of the strategic relationship between Venezuela and Russia, revealing a complex network of agreements across energy, finance, defense, and other critical sectors." data-featured style="--b:186px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Bajo la Influencia del Kremlin by Virginia Perez Perez">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-25.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Bajo la Influencia del Kremlin</span><span class="pub-book__author">Virginia Perez Perez</span><span class="pub-book__genre">Politics</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="It Hurts Worse When It Is Family" data-sub="" data-author="" data-genre="Fiction" data-cover="assets/images/books/book-01.webp" data-id="01" style="--b:178px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View It Hurts Worse When It Is Family">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-01.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">It Hurts Worse When It Is Family</span><span class="pub-book__author"></span><span class="pub-book__genre">Fiction</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Adventures of Bryson" data-sub="Bryson the Alien" data-author="" data-genre="Children’s Fiction" data-cover="assets/images/books/book-02.webp" data-id="02" style="--b:150px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Adventures of Bryson">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-02.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Adventures of Bryson</span><span class="pub-book__author"></span><span class="pub-book__genre">Children’s Fiction</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava" data-sub="" data-author="Corey T. Alston Sr." data-genre="Children’s Fiction" data-cover="assets/images/books/book-03.webp" data-id="03" style="--b:198px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr.">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-03.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="pub-book__author">Corey T. Alston Sr.</span><span class="pub-book__genre">Children’s Fiction</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Cosmic Mind" data-sub="Consciousness, Creation and the Search for Meaning" data-author="Maneseh" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-04.webp" data-id="04" style="--b:162px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Cosmic Mind by Maneseh">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-04.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Cosmic Mind</span><span class="pub-book__author">Maneseh</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Giorgia Meloni" data-sub="" data-author="Dr. Rajinder Singh SJD" data-genre="Politics" data-cover="assets/images/books/book-07.webp" data-id="07" style="--b:186px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Giorgia Meloni by Dr. Rajinder Singh SJD">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-07.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Giorgia Meloni</span><span class="pub-book__author">Dr. Rajinder Singh SJD</span><span class="pub-book__genre">Politics</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Donald J. Trump" data-sub="" data-author="Dr. Rajinder Singh SJD" data-genre="Politics" data-cover="assets/images/books/book-08.webp" data-id="08" style="--b:178px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Donald J. Trump by Dr. Rajinder Singh SJD">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-08.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Donald J. Trump</span><span class="pub-book__author">Dr. Rajinder Singh SJD</span><span class="pub-book__genre">Politics</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Eternal Coherence" data-sub="Jesus Christ and the Architecture of Reality" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-09.webp" data-id="09" style="--b:150px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Eternal Coherence by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-09.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Eternal Coherence</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Awakening of Thought" data-sub="" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-10.webp" data-id="10" style="--b:198px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Awakening of Thought by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-10.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Awakening of Thought</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="A Life Led from the Heart" data-sub="" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-11.webp" data-id="11" style="--b:162px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View A Life Led from the Heart by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-11.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">A Life Led from the Heart</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Exodus Code" data-sub="Truth Beyond Time" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-13.webp" data-id="13" style="--b:186px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Exodus Code by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-13.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Exodus Code</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Awakening of Memory" data-sub="" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-14.webp" data-id="14" style="--b:178px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Awakening of Memory by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-14.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Awakening of Memory</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Sole" data-sub="On the Soul, the Heavens, and the Silence Between the Creator and the Listener" data-author="Emilio Degher" data-genre="Philosophy &amp; Spirituality" data-cover="assets/images/books/book-15.webp" data-id="15" style="--b:150px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Sole by Emilio Degher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-15.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Sole</span><span class="pub-book__author">Emilio Degher</span><span class="pub-book__genre">Philosophy &amp; Spirituality</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="I Am Good in the Bad" data-sub="" data-author="Emilio Dagher" data-genre="Self-Help" data-cover="assets/images/books/book-16.webp" data-id="16" style="--b:198px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View I Am Good in the Bad by Emilio Dagher">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-16.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">I Am Good in the Bad</span><span class="pub-book__author">Emilio Dagher</span><span class="pub-book__genre">Self Help</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Business Administration Mastery" data-sub="The Complete Guide for Aspiring Leaders" data-author="" data-genre="Business &amp; Law" data-cover="assets/images/books/book-17.webp" data-id="17" style="--b:162px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Business Administration Mastery">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-17.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Business Administration Mastery</span><span class="pub-book__author"></span><span class="pub-book__genre">Business &amp; Law</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Legal Tender Question" data-sub="Volume One" data-author="Joseph R. K. Eshun" data-genre="Business &amp; Law" data-cover="assets/images/books/book-18.webp" data-id="18" style="--b:186px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Legal Tender Question by Joseph R. K. Eshun">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-18.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Legal Tender Question</span><span class="pub-book__author">Joseph R. K. Eshun</span><span class="pub-book__genre">Business &amp; Law</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Legal Tender Question" data-sub="Volume Two" data-author="Joseph R. K. Eshun" data-genre="Business &amp; Law" data-cover="assets/images/books/book-19.webp" data-id="19" style="--b:178px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Legal Tender Question by Joseph R. K. Eshun">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-19.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Legal Tender Question</span><span class="pub-book__author">Joseph R. K. Eshun</span><span class="pub-book__genre">Business &amp; Law</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Thank You Trump" data-sub="The 51st State" data-author="Khalid Rauf Qureshi" data-genre="Politics" data-cover="assets/images/books/book-21.webp" data-id="21" style="--b:150px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Thank You Trump by Khalid Rauf Qureshi">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-21.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Thank You Trump</span><span class="pub-book__author">Khalid Rauf Qureshi</span><span class="pub-book__genre">Politics</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Rise Up Under the Blood" data-sub="" data-author="" data-genre="Faith" data-cover="assets/images/books/book-22.webp" data-id="22" style="--b:198px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Rise Up Under the Blood">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-22.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Rise Up Under the Blood</span><span class="pub-book__author"></span><span class="pub-book__genre">Faith</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Poems of Life" data-sub="Reflections on Life, Love, and the Human Journey" data-author="O’Dell James Ford Sr." data-genre="Poetry" data-cover="assets/images/books/book-23.webp" data-id="23" style="--b:162px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Poems of Life by O’Dell James Ford Sr.">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-23.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Poems of Life</span><span class="pub-book__author">O’Dell James Ford Sr.</span><span class="pub-book__genre">Poetry</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Whispers of Time" data-sub="Poetry · French / Haitian Creole" data-author="Aggee Andrew Vetiaque" data-genre="Poetry" data-cover="assets/images/books/book-24.webp" data-id="24" style="--b:186px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Whispers of Time by Aggee Andrew Vetiaque">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-24.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Whispers of Time</span><span class="pub-book__author">Aggee Andrew Vetiaque</span><span class="pub-book__genre">Poetry</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="You vs You" data-sub="How to Overcome Doubt, Build Discipline, and Create a Life with Purpose" data-author="Waheed Shaffiek" data-genre="Self-Help" data-cover="assets/images/books/book-26.webp" data-id="26" style="--b:178px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View You vs You by Waheed Shaffiek">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-26.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">You vs You</span><span class="pub-book__author">Waheed Shaffiek</span><span class="pub-book__genre">Self Help</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="Change to Stay Unchanged" data-sub="Authoritarian Reform in Kazakhstan Under the Tokayev Regime" data-author="Yerzhan Dosmukhamedov" data-genre="Politics" data-cover="assets/images/books/book-27.webp" data-id="27" style="--b:150px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View Change to Stay Unchanged by Yerzhan Dosmukhamedov">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-27.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">Change to Stay Unchanged</span><span class="pub-book__author">Yerzhan Dosmukhamedov</span><span class="pub-book__genre">Politics</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Dragon Who Finds His Roar" data-sub="" data-author="Linda Mazzia" data-genre="Children’s Fiction" data-cover="assets/images/books/book-28.webp" data-id="28" style="--b:198px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Dragon Who Finds His Roar by Linda Mazzia">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-28.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Dragon Who Finds His Roar</span><span class="pub-book__author">Linda Mazzia</span><span class="pub-book__genre">Children’s Fiction</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
          <li class="bcard pub-book" data-book data-title="The Bunny in the Superhero Cape" data-sub="" data-author="Linda Mazzia" data-genre="Children’s Fiction" data-cover="assets/images/books/book-29.webp" data-id="29" style="--b:162px">
            <button class="bcard__btn pub-book__btn" type="button" aria-label="View The Bunny in the Superhero Cape by Linda Mazzia">
              <span class="pub-book__obj"><span class="book3d is-mockup pub-book__3d"><span class="book3d__body"><span class="book3d__back"></span><img class="book3d__cover" src="assets/images/books/book-29.webp" width="600" height="1024" alt="" loading="lazy" decoding="async"></span><span class="book3d__shadow"></span></span></span>
              <span class="pub-book__info"><span class="pub-book__title">The Bunny in the Superhero Cape</span><span class="pub-book__author">Linda Mazzia</span><span class="pub-book__genre">Children’s Fiction</span><span class="pub-book__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span>
            </button>
          </li>
      </ul>
    </div>
    <div class="container pub-library__foot">
      <div class="pub-library__progress" aria-hidden="true"><span data-shelf-progress></span></div>
      <p class="pub-library__hint">Choose a book for more details</p>
    </div>
  </div>
  <div class="container pub-statement">
    <p class="pub-statement__a" data-pub-rv>An author starts with something to say.</p>
    <figure class="pub-statement__fig" data-pub-rv>
      <img class="pub-statement__mock" src="assets/images/books/book-23.webp" width="600" height="1024" alt="Cover of Poems of Life by O’Dell James Ford Sr." loading="lazy" decoding="async">
      <figcaption>Poems of Life by O’Dell James Ford Sr.</figcaption>
    </figure>
    <p class="pub-statement__b" data-pub-rv>We help prepare it for the page.</p>
  </div>
</section>

<section class="pc-coll" id="collections" aria-labelledby="pc-coll-title">
  <div class="container">
    <header class="pc-coll__head pc-rv">
      <div><p class="pc-eyebrow">Selected publications</p>
      <h2 class="pc-h2" id="pc-coll-title">Explore the books <em>by subject.</em></h2></div>
      <p class="pc-coll__note">Browse 29 titles across eight categories and select a book to see more.</p>
    </header>

    <article class="pc-plate pc-plate--a pc-rv" aria-labelledby="pc-plate-0">
      <header class="pc-plate__head">
        <p class="pc-plate__no">Collection 01</p>
        <h3 class="pc-plate__title" id="pc-plate-0">Philosophy &amp; Spirituality</h3>
        <p class="pc-plate__count">8 titles</p>
        <button type="button" class="pc-link" data-pc-filter="Philosophy &amp; Spirituality">See them on the shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </header>
      <div class="pc-plate__shelf"><div class="pc-plate__books" style="--n:8;--sum:5.36"><button type="button" class="pc-book is-lead" data-pc-open="12" aria-label="View The Path of Truth by Emilio Degher" style="--s:1"><span class="pc-book__obj"><img src="assets/images/books/book-12.webp" width="600" height="1024" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Path of Truth</span><span class="pc-book__a">Emilio Degher</span></span></button><button type="button" class="pc-book " data-pc-open="04" aria-label="View The Cosmic Mind by Maneseh" style="--s:0.7"><span class="pc-book__obj"><img src="assets/images/books/book-04-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Cosmic Mind</span><span class="pc-book__a">Maneseh</span></span></button><button type="button" class="pc-book " data-pc-open="09" aria-label="View Eternal Coherence by Emilio Degher" style="--s:0.6"><span class="pc-book__obj"><img src="assets/images/books/book-09-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">Eternal Coherence</span><span class="pc-book__a">Emilio Degher</span></span></button><button type="button" class="pc-book " data-pc-open="10" aria-label="View The Awakening of Thought by Emilio Degher" style="--s:0.66"><span class="pc-book__obj"><img src="assets/images/books/book-10-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Awakening of Thought</span><span class="pc-book__a">Emilio Degher</span></span></button><button type="button" class="pc-book " data-pc-open="11" aria-label="View A Life Led from the Heart by Emilio Degher" style="--s:0.56"><span class="pc-book__obj"><img src="assets/images/books/book-11-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">A Life Led from the Heart</span><span class="pc-book__a">Emilio Degher</span></span></button><button type="button" class="pc-book " data-pc-open="13" aria-label="View The Exodus Code by Emilio Degher" style="--s:0.62"><span class="pc-book__obj"><img src="assets/images/books/book-13-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Exodus Code</span><span class="pc-book__a">Emilio Degher</span></span></button><button type="button" class="pc-book " data-pc-open="14" aria-label="View The Awakening of Memory by Emilio Degher" style="--s:0.58"><span class="pc-book__obj"><img src="assets/images/books/book-14-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Awakening of Memory</span><span class="pc-book__a">Emilio Degher</span></span></button><button type="button" class="pc-book " data-pc-open="15" aria-label="View The Sole by Emilio Degher" style="--s:0.64"><span class="pc-book__obj"><img src="assets/images/books/book-15-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Sole</span><span class="pc-book__a">Emilio Degher</span></span></button></div></div>
    </article>
    <article class="pc-plate pc-plate--b pc-rv" aria-labelledby="pc-plate-1">
      <header class="pc-plate__head">
        <p class="pc-plate__no">Collection 02</p>
        <h3 class="pc-plate__title" id="pc-plate-1">Politics</h3>
        <p class="pc-plate__count">5 titles</p>
        <button type="button" class="pc-link" data-pc-filter="Politics">See them on the shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </header>
      <div class="pc-plate__shelf"><div class="pc-plate__books" style="--n:5;--sum:3.52"><button type="button" class="pc-book is-lead" data-pc-open="25" aria-label="View Bajo la Influencia del Kremlin by Virginia Perez Perez" style="--s:1"><span class="pc-book__obj"><img src="assets/images/books/book-25.webp" width="600" height="1024" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">Bajo la Influencia del Kremlin</span><span class="pc-book__a">Virginia Perez Perez</span></span></button><button type="button" class="pc-book " data-pc-open="07" aria-label="View Giorgia Meloni by Dr. Rajinder Singh SJD" style="--s:0.7"><span class="pc-book__obj"><img src="assets/images/books/book-07-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">Giorgia Meloni</span><span class="pc-book__a">Dr. Rajinder Singh SJD</span></span></button><button type="button" class="pc-book " data-pc-open="08" aria-label="View Donald J. Trump by Dr. Rajinder Singh SJD" style="--s:0.6"><span class="pc-book__obj"><img src="assets/images/books/book-08-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">Donald J. Trump</span><span class="pc-book__a">Dr. Rajinder Singh SJD</span></span></button><button type="button" class="pc-book " data-pc-open="21" aria-label="View Thank You Trump by Khalid Rauf Qureshi" style="--s:0.66"><span class="pc-book__obj"><img src="assets/images/books/book-21-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">Thank You Trump</span><span class="pc-book__a">Khalid Rauf Qureshi</span></span></button><button type="button" class="pc-book " data-pc-open="27" aria-label="View Change to Stay Unchanged by Yerzhan Dosmukhamedov" style="--s:0.56"><span class="pc-book__obj"><img src="assets/images/books/book-27-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">Change to Stay Unchanged</span><span class="pc-book__a">Yerzhan Dosmukhamedov</span></span></button></div></div>
    </article>
    <article class="pc-plate pc-plate--c pc-rv" aria-labelledby="pc-plate-2">
      <header class="pc-plate__head">
        <p class="pc-plate__no">Collection 03</p>
        <h3 class="pc-plate__title" id="pc-plate-2">Children’s Fiction</h3>
        <p class="pc-plate__count">4 titles</p>
        <button type="button" class="pc-link" data-pc-filter="Children’s Fiction">See them on the shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </header>
      <div class="pc-plate__shelf"><div class="pc-plate__books" style="--n:4;--sum:2.96"><button type="button" class="pc-book is-lead" data-pc-open="03" aria-label="View The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr." style="--s:1"><span class="pc-book__obj"><img src="assets/images/books/book-03.webp" width="600" height="1024" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="pc-book__a">Corey T. Alston Sr.</span></span></button><button type="button" class="pc-book " data-pc-open="02" aria-label="View The Adventures of Bryson" style="--s:0.7"><span class="pc-book__obj"><img src="assets/images/books/book-02-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Adventures of Bryson</span></span></button><button type="button" class="pc-book " data-pc-open="28" aria-label="View The Dragon Who Finds His Roar by Linda Mazzia" style="--s:0.6"><span class="pc-book__obj"><img src="assets/images/books/book-28-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Dragon Who Finds His Roar</span><span class="pc-book__a">Linda Mazzia</span></span></button><button type="button" class="pc-book " data-pc-open="29" aria-label="View The Bunny in the Superhero Cape by Linda Mazzia" style="--s:0.66"><span class="pc-book__obj"><img src="assets/images/books/book-29-s.webp" width="360" height="614" alt="" decoding="async" loading="lazy"><span class="pc-book__floor" aria-hidden="true"></span></span><span class="pc-book__cap"><span class="pc-book__t">The Bunny in the Superhero Cape</span><span class="pc-book__a">Linda Mazzia</span></span></button></div></div>
    </article>
    <ol class="pc-crows pc-rv" role="list">
      <li class="pc-crow">
        <h3 class="pc-crow__name">Business &amp; Law</h3>
        <p class="pc-crow__count">3 titles</p>
        <ul class="pc-crow__covers" role="list"><li><button type="button" class="pc-thumb" data-pc-open="17" aria-label="View Business Administration Mastery"><img src="assets/images/books/cover-17.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="18" aria-label="View The Legal Tender Question: Volume One"><img src="assets/images/books/cover-18.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="19" aria-label="View The Legal Tender Question: Volume Two"><img src="assets/images/books/cover-19.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li></ul>
        <p class="pc-crow__titles">Business Administration Mastery · The Legal Tender Question</p>
        <button type="button" class="pc-link pc-crow__go" data-pc-filter="Business &amp; Law" aria-label="See Business &amp; Law on the shelf">Shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </li>
      <li class="pc-crow">
        <h3 class="pc-crow__name">Faith</h3>
        <p class="pc-crow__count">3 titles</p>
        <ul class="pc-crow__covers" role="list"><li><button type="button" class="pc-thumb" data-pc-open="05" aria-label="View The Naked Truth of AI 2.0"><img src="assets/images/books/cover-05.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="06" aria-label="View The Goodness of God"><img src="assets/images/books/cover-06.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="22" aria-label="View Rise Up Under the Blood"><img src="assets/images/books/cover-22.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li></ul>
        <p class="pc-crow__titles">The Naked Truth of AI 2.0 · The Goodness of God · Rise Up Under the Blood</p>
        <button type="button" class="pc-link pc-crow__go" data-pc-filter="Faith" aria-label="See Faith on the shelf">Shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </li>
      <li class="pc-crow">
        <h3 class="pc-crow__name">Self Help</h3>
        <p class="pc-crow__count">3 titles</p>
        <ul class="pc-crow__covers" role="list"><li><button type="button" class="pc-thumb" data-pc-open="16" aria-label="View I Am Good in the Bad"><img src="assets/images/books/cover-16.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="20" aria-label="View Bloom Through the Pain"><img src="assets/images/books/cover-20.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="26" aria-label="View You vs You"><img src="assets/images/books/cover-26.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li></ul>
        <p class="pc-crow__titles">I Am Good in the Bad · Bloom Through the Pain · You vs You</p>
        <button type="button" class="pc-link pc-crow__go" data-pc-filter="Self-Help" aria-label="See Self Help on the shelf">Shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </li>
      <li class="pc-crow">
        <h3 class="pc-crow__name">Poetry</h3>
        <p class="pc-crow__count">1 title</p>
        <ul class="pc-crow__covers" role="list"><li><button type="button" class="pc-thumb" data-pc-open="23" aria-label="View Poems of Life"><img src="assets/images/books/cover-23.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li><li><button type="button" class="pc-thumb" data-pc-open="24" aria-label="View Whispers of Time"><img src="assets/images/books/cover-24.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li></ul>
        <p class="pc-crow__titles">Poems of Life · Whispers of Time</p>
        <button type="button" class="pc-link pc-crow__go" data-pc-filter="Poetry" aria-label="See Poetry on the shelf">Shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </li>
      <li class="pc-crow">
        <h3 class="pc-crow__name">Fiction</h3>
        <p class="pc-crow__count">1 title</p>
        <ul class="pc-crow__covers" role="list"><li><button type="button" class="pc-thumb" data-pc-open="01" aria-label="View It Hurts Worse When It Is Family"><img src="assets/images/books/cover-01.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></button></li></ul>
        <p class="pc-crow__titles">It Hurts Worse When It Is Family</p>
        <button type="button" class="pc-link pc-crow__go" data-pc-filter="Fiction" aria-label="See Fiction on the shelf">Shelf <svg aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </li>
    </ol>
  </div>
</section>

<section class="pc-index" id="index" aria-labelledby="pc-index-title">
  <div class="container pc-index__grid">
    <div class="pc-index__side">
      <p class="pc-eyebrow pc-rv">Index</p>
      <h2 class="pc-h2 pc-rv" id="pc-index-title">The <?= site_text('short_name') ?> <em>catalogue.</em></h2>
      <p class="pc-index__note pc-rv">Browse all 29 books in catalogue order.</p>
      <figure class="pc-peek" data-pc-peek-box aria-hidden="true">
        <span class="pc-peek__no"><b data-pc-peek-no>01</b> / 29</span>
        <img data-pc-peek-img src="assets/images/books/book-06.webp" width="600" height="1024" alt="" loading="lazy" decoding="async">
        <span class="pc-peek__floor"></span>
      </figure>
    </div>
    <div class="pc-index__main">
      <div class="pc-index__cols" aria-hidden="true"><span>No.</span><span>Title</span><span>Author</span><span>Category</span></div>
      <ol class="pc-rows" role="list">
        <li><button type="button" class="pc-row" data-pc-open="06" data-pc-peek="assets/images/books/book-06.webp" data-pc-no="01" aria-label="View The Goodness of God: Reflection at 80 by Dr. Lee Roy Jefferson"><span class="pc-row__no">01</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-06.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Goodness of God<small>Reflection at 80</small></span><span class="pc-row__author">Dr. Lee Roy Jefferson</span><span class="pc-row__cat">Faith</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="20" data-pc-peek="assets/images/books/book-20.webp" data-pc-no="02" aria-label="View Bloom Through the Pain: A 90 Day Affirmation and Reflection Journal by Kadeisha Corbin"><span class="pc-row__no">02</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-20.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Bloom Through the Pain<small>A 90 Day Affirmation and Reflection Journal</small></span><span class="pc-row__author">Kadeisha Corbin</span><span class="pc-row__cat">Self Help</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="05" data-pc-peek="assets/images/books/book-05.webp" data-pc-no="03" aria-label="View The Naked Truth of AI 2.0: Divine Intervention by Douglas Hawes"><span class="pc-row__no">03</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-05.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Naked Truth of AI 2.0<small>Divine Intervention</small></span><span class="pc-row__author">Douglas Hawes</span><span class="pc-row__cat">Faith</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="12" data-pc-peek="assets/images/books/book-12.webp" data-pc-no="04" aria-label="View The Path of Truth: Beyond Belief, Beyond Illusion by Emilio Degher"><span class="pc-row__no">04</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-12.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Path of Truth<small>Beyond Belief, Beyond Illusion</small></span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="25" data-pc-peek="assets/images/books/book-25.webp" data-pc-no="05" aria-label="View Bajo la Influencia del Kremlin: La Penetración Rusa en Venezuela by Virginia Perez Perez"><span class="pc-row__no">05</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-25.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Bajo la Influencia del Kremlin<small>La Penetración Rusa en Venezuela</small></span><span class="pc-row__author">Virginia Perez Perez</span><span class="pc-row__cat">Politics</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="01" data-pc-peek="assets/images/books/book-01.webp" data-pc-no="06" aria-label="View It Hurts Worse When It Is Family"><span class="pc-row__no">06</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-01.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">It Hurts Worse When It Is Family</span><span class="pc-row__author"></span><span class="pc-row__cat">Fiction</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="02" data-pc-peek="assets/images/books/book-02.webp" data-pc-no="07" aria-label="View The Adventures of Bryson: Bryson the Alien"><span class="pc-row__no">07</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-02.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Adventures of Bryson<small>Bryson the Alien</small></span><span class="pc-row__author"></span><span class="pc-row__cat">Children’s Fiction</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="03" data-pc-peek="assets/images/books/book-03.webp" data-pc-no="08" aria-label="View The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr."><span class="pc-row__no">08</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-03.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="pc-row__author">Corey T. Alston Sr.</span><span class="pc-row__cat">Children’s Fiction</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="04" data-pc-peek="assets/images/books/book-04.webp" data-pc-no="09" aria-label="View The Cosmic Mind: Consciousness, Creation and the Search for Meaning by Maneseh"><span class="pc-row__no">09</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-04.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Cosmic Mind<small>Consciousness, Creation and the Search for Meaning</small></span><span class="pc-row__author">Maneseh</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="07" data-pc-peek="assets/images/books/book-07.webp" data-pc-no="10" aria-label="View Giorgia Meloni by Dr. Rajinder Singh SJD"><span class="pc-row__no">10</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-07.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Giorgia Meloni</span><span class="pc-row__author">Dr. Rajinder Singh SJD</span><span class="pc-row__cat">Politics</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="08" data-pc-peek="assets/images/books/book-08.webp" data-pc-no="11" aria-label="View Donald J. Trump by Dr. Rajinder Singh SJD"><span class="pc-row__no">11</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-08.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Donald J. Trump</span><span class="pc-row__author">Dr. Rajinder Singh SJD</span><span class="pc-row__cat">Politics</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="09" data-pc-peek="assets/images/books/book-09.webp" data-pc-no="12" aria-label="View Eternal Coherence: Jesus Christ and the Architecture of Reality by Emilio Degher"><span class="pc-row__no">12</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-09.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Eternal Coherence<small>Jesus Christ and the Architecture of Reality</small></span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="10" data-pc-peek="assets/images/books/book-10.webp" data-pc-no="13" aria-label="View The Awakening of Thought by Emilio Degher"><span class="pc-row__no">13</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-10.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Awakening of Thought</span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="11" data-pc-peek="assets/images/books/book-11.webp" data-pc-no="14" aria-label="View A Life Led from the Heart by Emilio Degher"><span class="pc-row__no">14</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-11.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">A Life Led from the Heart</span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="13" data-pc-peek="assets/images/books/book-13.webp" data-pc-no="15" aria-label="View The Exodus Code: Truth Beyond Time by Emilio Degher"><span class="pc-row__no">15</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-13.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Exodus Code<small>Truth Beyond Time</small></span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="14" data-pc-peek="assets/images/books/book-14.webp" data-pc-no="16" aria-label="View The Awakening of Memory by Emilio Degher"><span class="pc-row__no">16</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-14.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Awakening of Memory</span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="15" data-pc-peek="assets/images/books/book-15.webp" data-pc-no="17" aria-label="View The Sole: On the Soul, the Heavens, and the Silence Between the Creator and the Listener by Emilio Degher"><span class="pc-row__no">17</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-15.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Sole<small>On the Soul, the Heavens, and the Silence Between the Creator and the Listener</small></span><span class="pc-row__author">Emilio Degher</span><span class="pc-row__cat">Philosophy &amp; Spirituality</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="16" data-pc-peek="assets/images/books/book-16.webp" data-pc-no="18" aria-label="View I Am Good in the Bad by Emilio Dagher"><span class="pc-row__no">18</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-16.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">I Am Good in the Bad</span><span class="pc-row__author">Emilio Dagher</span><span class="pc-row__cat">Self Help</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="17" data-pc-peek="assets/images/books/book-17.webp" data-pc-no="19" aria-label="View Business Administration Mastery: The Complete Guide for Aspiring Leaders"><span class="pc-row__no">19</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-17.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Business Administration Mastery<small>The Complete Guide for Aspiring Leaders</small></span><span class="pc-row__author"></span><span class="pc-row__cat">Business &amp; Law</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="18" data-pc-peek="assets/images/books/book-18.webp" data-pc-no="20" aria-label="View The Legal Tender Question: Volume One by Joseph R. K. Eshun"><span class="pc-row__no">20</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-18.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Legal Tender Question<small>Volume One</small></span><span class="pc-row__author">Joseph R. K. Eshun</span><span class="pc-row__cat">Business &amp; Law</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="19" data-pc-peek="assets/images/books/book-19.webp" data-pc-no="21" aria-label="View The Legal Tender Question: Volume Two by Joseph R. K. Eshun"><span class="pc-row__no">21</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-19.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Legal Tender Question<small>Volume Two</small></span><span class="pc-row__author">Joseph R. K. Eshun</span><span class="pc-row__cat">Business &amp; Law</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="21" data-pc-peek="assets/images/books/book-21.webp" data-pc-no="22" aria-label="View Thank You Trump: The 51st State by Khalid Rauf Qureshi"><span class="pc-row__no">22</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-21.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Thank You Trump<small>The 51st State</small></span><span class="pc-row__author">Khalid Rauf Qureshi</span><span class="pc-row__cat">Politics</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="22" data-pc-peek="assets/images/books/book-22.webp" data-pc-no="23" aria-label="View Rise Up Under the Blood"><span class="pc-row__no">23</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-22.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Rise Up Under the Blood</span><span class="pc-row__author"></span><span class="pc-row__cat">Faith</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="23" data-pc-peek="assets/images/books/book-23.webp" data-pc-no="24" aria-label="View Poems of Life: Reflections on Life, Love, and the Human Journey by O’Dell James Ford Sr."><span class="pc-row__no">24</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-23.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Poems of Life<small>Reflections on Life, Love, and the Human Journey</small></span><span class="pc-row__author">O’Dell James Ford Sr.</span><span class="pc-row__cat">Poetry</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="24" data-pc-peek="assets/images/books/book-24.webp" data-pc-no="25" aria-label="View Whispers of Time: Poetry · French / Haitian Creole by Aggee Andrew Vetiaque"><span class="pc-row__no">25</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-24.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Whispers of Time<small>Poetry · French / Haitian Creole</small></span><span class="pc-row__author">Aggee Andrew Vetiaque</span><span class="pc-row__cat">Poetry</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="26" data-pc-peek="assets/images/books/book-26.webp" data-pc-no="26" aria-label="View You vs You: How to Overcome Doubt, Build Discipline, and Create a Life with Purpose by Waheed Shaffiek"><span class="pc-row__no">26</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-26.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">You vs You<small>How to Overcome Doubt, Build Discipline, and Create a Life with Purpose</small></span><span class="pc-row__author">Waheed Shaffiek</span><span class="pc-row__cat">Self Help</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="27" data-pc-peek="assets/images/books/book-27.webp" data-pc-no="27" aria-label="View Change to Stay Unchanged: Authoritarian Reform in Kazakhstan Under the Tokayev Regime by Yerzhan Dosmukhamedov"><span class="pc-row__no">27</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-27.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">Change to Stay Unchanged<small>Authoritarian Reform in Kazakhstan Under the Tokayev Regime</small></span><span class="pc-row__author">Yerzhan Dosmukhamedov</span><span class="pc-row__cat">Politics</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="28" data-pc-peek="assets/images/books/book-28.webp" data-pc-no="28" aria-label="View The Dragon Who Finds His Roar by Linda Mazzia"><span class="pc-row__no">28</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-28.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Dragon Who Finds His Roar</span><span class="pc-row__author">Linda Mazzia</span><span class="pc-row__cat">Children’s Fiction</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
        <li><button type="button" class="pc-row" data-pc-open="29" data-pc-peek="assets/images/books/book-29.webp" data-pc-no="29" aria-label="View The Bunny in the Superhero Cape by Linda Mazzia"><span class="pc-row__no">29</span><span class="pc-row__thumb" aria-hidden="true"><img src="assets/images/books/cover-29.webp" width="440" height="660" alt="" loading="lazy" decoding="async"></span><span class="pc-row__title">The Bunny in the Superhero Cape</span><span class="pc-row__author">Linda Mazzia</span><span class="pc-row__cat">Children’s Fiction</span><span class="pc-row__go" aria-hidden="true"><svg aria-hidden="true"><use href="#i-arrow"/></svg></span></button></li>
      </ol>
      <p class="pc-index__more"><a class="pc-link" href="featured-authors">Meet the authors behind these books <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></p>
    </div>
  </div>
</section>

<section class="cta on-dark pb-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1663735498345-39c452a6d5d8-1600.webp" alt="" loading="lazy" decoding="async" data-parallax="0.08">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal>The next title</p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s">Your book <em>could be next.</em></h2>
      <p class="lead" data-reveal style="--d:.16s">Share your manuscript or idea and let’s discuss how to prepare it for readers.</p>
      <div class="pb-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Start Your Publishing Journey <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact">Speak With Us <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Share your book plans', 'rows' => 4, 'messageLabel' => 'What would you like help with?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php render_component('modals/book-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
