<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'about.php';
$pageScripts = ['assets/js/about2f72.js?v=20261003', 'assets/js/real-work2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/about2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>About Our Book Services Team | <?= site_text('project_name') ?></title>
  <meta name="description" content="Meet the team helping authors write, revise, design and publish their books. Learn how we work with you from the first conversation.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="About Our Book Services Team | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Meet the team helping authors write, revise, design and publish their books. Learn how we work with you from the first conversation.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1760237658139-ea4ff6c33a91-2400.webp" fetchpriority="high">
  
</head>
<body class="page-about">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#who', 'section' => 'who', 'label' => 'Who we are', 'icon' => '#i-book', 'text' => 'Who we are'],
    ['href' => '#approach', 'section' => 'approach', 'label' => 'Our approach', 'icon' => '#i-steps', 'text' => 'Approach'],
    ['href' => '#services-index', 'section' => 'services-index', 'label' => 'What we do', 'icon' => '#i-star', 'text' => 'What we do'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="ab-hero" id="top" aria-labelledby="ab-title">
  <div class="ab-hero__bg" aria-hidden="true"><div class="ab-hero__img" data-parallax="0.05" data-photo="1760237658139-ea4ff6c33a91-2400"></div></div>
  <div class="container ab-hero__grid">
    <nav class="ab-crumbs" aria-label="Breadcrumb">
      <ol role="list">
        <li><a href="./">Home</a></li>
        <li aria-current="page">About</li>
      </ol>
    </nav>
    <div class="ab-hero__copy">
      <p class="ab-eyebrow ab-rv"><span></span>About <?= site_text('project_name') ?></p>
      <h1 class="ab-hero__title ab-rv" id="ab-title">Helping authors <em>finish what they started.</em></h1>
      <p class="ab-hero__lead ab-rv"><?= site_text('project_name') ?> brings together writing, editing, design and publishing support for authors at different stages of their book.</p>
      <a class="ab-hero__more ab-rv" href="#who">Our story <svg aria-hidden="true"><use href="#i-down"/></svg></a>
    </div>
    <figure class="ab-hero__fig ab-rv">
      <img src="assets/images/photos/1674702685239-b4ab4f44f944-1000x1300.webp" alt="Loose manuscript pages spread across a writing desk" onerror="this.onerror=null;this.style.visibility='hidden'" decoding="async" fetchpriority="high">
      <figcaption><span>p. 01</span>The manuscript, before it becomes a book.</figcaption>
    </figure>
  </div>
</section>

<section class="ab-who" id="who" aria-labelledby="who-title">
  <div class="container">
    <p class="ab-label"><span>01</span><i>/</i>Who we are<b>The house</b></p>
    <div class="ab-who__grid">
      <figure class="ab-who__fig ab-rv">
        <img src="assets/images/photos/1608280392091-724833b66c2b-1200x1500.webp" alt="Stacks of books in soft window light" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async">
        <figcaption>
          <span class="ab-meta"><b>Plate I</b>The shelf, in afternoon light</span>
          <span class="ab-meta ab-meta--r"><?= site_text('project_name') ?> · <?= component_escape(site_location()) ?></span>
        </figcaption>
      </figure>
      <div class="ab-who__copy">
        <h2 class="ab-statement ab-rv" id="who-title">People to help you <em>work through the book.</em></h2>
        <p class="ab-who__first ab-rv">Writing a book involves a lot of decisions. We help you make them in a sensible order, from finding a structure to reviewing the final pages.</p>
        <div class="ab-rv">
          <p>You know what you want to say. We ask questions, explain the options and work through the details with you.</p>
          <p>You can come to us for one service or connect several parts of the process, including writing, editing, design, publication and promotion.</p>
        </div>
        <dl class="ab-who__facts ab-rv">
          <div><dt>What we do</dt><dd>Writing · Editing · Publishing · Promotion</dd></div>
          <div><dt>Where we are</dt><dd><?= component_escape(site_address(false)) ?></dd></div>
        </dl>
      </div>
    </div>
  </div>
</section>

<section class="ab-state" aria-labelledby="state-title">
  <div class="ab-state__bg" aria-hidden="true"><div class="ab-state__img" data-parallax="0.05" data-photo="1605787050388-845c63b60920-2200"></div></div>
  <div class="container ab-state__inner">
    <p class="ab-eyebrow ab-rv"><span></span>Our approach</p>
    <h2 class="ab-state__title ab-rv" id="state-title">Start where you are. <em>Build from there.</em></h2>
    <p class="ab-state__text ab-rv">Some authors arrive with a finished draft. Others have notes or an idea they have carried for years. We discuss what you have and agree on the work that will move it forward.</p>
  </div>
</section>

<section class="ab-journey" id="approach" aria-labelledby="journey-title">
  <div class="container">
    <p class="ab-label"><span>02</span><i>/</i>The author’s journey</p>
    <div class="ab-journey__head">
      <h2 class="ab-h2 ab-rv" id="journey-title">What happens <em>along the way.</em></h2>
      <p class="ab-body ab-rv">Every project has its own pace, but these are the main stages we work through with authors.</p>
    </div>
    <ol class="ab-trail" role="list">
      <li class="ab-trail__step ab-rv"><span class="ab-trail__glyph" aria-hidden="true"><svg viewBox="0 0 64 40"><circle cx="32" cy="20" r="4"/><circle cx="32" cy="20" r="11" opacity=".35"/></svg></span><span class="ab-trail__n">01</span><h3>Idea</h3><p>We listen to the idea, consider its readers and help you give it a workable shape.</p></li>
      <li class="ab-trail__step ab-rv"><span class="ab-trail__glyph" aria-hidden="true"><svg viewBox="0 0 64 40"><rect x="22" y="4" width="22" height="32" rx="1"/><path d="M27 12h12M27 17h12M27 22h9M27 27h11"/></svg></span><span class="ab-trail__n">02</span><h3>Manuscript</h3><p>We help develop the draft while keeping your experiences, perspective and voice at the centre.</p></li>
      <li class="ab-trail__step ab-rv"><span class="ab-trail__glyph" aria-hidden="true"><svg viewBox="0 0 64 40"><rect x="22" y="4" width="22" height="32" rx="1"/><path d="M27 12h12M27 17h5M35 17h4M27 22h12"/><path d="M40 28l6-6 3 3-6 6z"/></svg></span><span class="ab-trail__n">03</span><h3>Editing</h3><p>You review the changes and work with us on the passages that need more attention.</p></li>
      <li class="ab-trail__step ab-rv"><span class="ab-trail__glyph" aria-hidden="true"><svg viewBox="0 0 64 40"><rect x="18" y="8" width="18" height="28" rx="1"/><rect x="24" y="4" width="18" height="28" rx="1"/><rect x="30" y="0" width="18" height="28" rx="1" opacity=".5"/></svg></span><span class="ab-trail__n">04</span><h3>Production</h3><p>The interior, cover and publishing files are prepared around the chosen editions.</p></li>
      <li class="ab-trail__step ab-rv"><span class="ab-trail__glyph" aria-hidden="true"><svg viewBox="0 0 64 40"><path d="M20 6h20a4 4 0 0 1 4 4v26H24a4 4 0 0 1-4-4z"/><path d="M24 36a4 4 0 0 1 0-8h20"/><path d="M27 13h11"/></svg></span><span class="ab-trail__n">05</span><h3>Publication</h3><p>We help prepare the release and discuss ways to introduce the book to readers.</p></li>
    </ol>
  </div>
</section>

<figure class="ab-break" aria-labelledby="break-1">
  <div class="ab-break__img"><img src="assets/images/photos/1756993263826-9b4bae15e2b2-2400x1100.webp" alt="A writing desk covered with books, papers and an inkwell" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async" data-parallax="0.06"></div>
  <figcaption class="container ab-break__cap" id="break-1"><span class="ab-break__k">The work behind the story</span><span class="ab-break__t">Every finished book begins long before it reaches the shelf.</span></figcaption>
</figure>

<section class="ab-why" id="why" aria-labelledby="why-title">
  <div class="container">
    <p class="ab-label"><span>03</span><i>/</i>The <?= site_text('short_name') ?> difference</p>
    <h2 class="ab-why__title ab-rv" id="why-title">What working with us <em>can offer.</em></h2>
    <div class="ab-why__grid">
      <p class="ab-why__big ab-rv">Clear steps and a say in the work.</p>
      <ol class="ab-rows" role="list">
        <li class="ab-rv"><span class="ab-rows__n">01</span><div><h3>Publishing guidance</h3><p>Help understanding the files, formats and decisions involved in publication.</p></div></li>
        <li class="ab-rv"><span class="ab-rows__n">02</span><div><h3>Distribution options</h3><p>A discussion of the channels that fit your formats and intended readership.</p></div></li>
        <li class="ab-rv"><span class="ab-rows__n">03</span><div><h3>A place to ask questions</h3><p>Project support for feedback, decisions and the next stage of the work.</p></div></li>
        <li class="ab-rv"><span class="ab-rows__n">04</span><div><h3>An agreed schedule</h3><p>Milestones that account for the work involved and the time you need to review it.</p></div></li>
      </ol>
    </div>
  </div>
</section>

<section class="ab-yours" aria-labelledby="yours-title">
  <div class="container ab-yours__grid">
    <div class="ab-yours__art ab-rv">
      <figure class="ab-yours__photo"><img src="assets/images/photos/1682253406151-45237a6f7acf-1200x900.webp" alt="Two open notebooks of handwritten manuscript on a desk" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></figure>
      <figure class="ab-yours__book">
        <div class="book3d ab-yours__3d"><div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" src="assets/images/books/cover-06.webp" width="440" height="660" alt="Cover of The Goodness of God by Dr. Lee Roy Jefferson, published with <?= site_text('project_name') ?>" loading="lazy" decoding="async"></div><div class="book3d__shadow"></div></div>
        <figcaption>The Goodness of God · published with <?= site_text('short_name') ?></figcaption>
      </figure>
    </div>
    <div class="ab-yours__copy">
      <ol class="ab-flow ab-rv" role="list" aria-label="Author, manuscript, book"><li>Author</li><li>Manuscript</li><li>Book</li></ol>
      <h2 class="ab-h2 ab-rv" id="yours-title">Your name. <em>Your perspective.</em></h2>
      <p class="ab-body ab-rv">We help shape the writing and presentation around the book you want to make.</p>
      <p class="ab-body ab-rv">Your feedback matters at each review stage. It helps us keep the project close to your intentions.</p>
    </div>
  </div>
</section>

<section class="ab-phil on-dark" aria-labelledby="phil-title">
  <div class="container ab-phil__grid">
    <div class="ab-phil__head">
      <p class="ab-eyebrow ab-eyebrow--light ab-rv"><span></span>The <?= site_text('short_name') ?> philosophy</p>
      <h2 class="ab-phil__title ab-rv" id="phil-title">There is a person <em>behind every manuscript.</em></h2>
      <p class="ab-phil__text ab-rv">A book may hold years of experience, a hard lesson or an imagined world. We take that starting point seriously and give the writing and presentation the attention they need.</p>
    </div>
    <ol class="ab-phil__list" role="list">
        <li class="ab-rv"><span>01</span><h3>The author’s voice</h3><p>Your way of speaking and seeing the world should remain recognisable in the writing.</p></li>
        <li class="ab-rv"><span>02</span><h3>Careful editing</h3><p>A reader should be able to follow the story or argument without avoidable distractions.</p></li>
        <li class="ab-rv"><span>03</span><h3>Considered presentation</h3><p>The cover and interior should set the right expectations for the writing inside.</p></li>
        <li class="ab-rv"><span>04</span><h3>Thoughtful production</h3><p>Well prepared files help the book move from an approved draft into production.</p></li>
        <li class="ab-rv"><span>05</span><h3>Reaching readers</h3><p>Promotion gives you ways to introduce the finished work to people who may enjoy it.</p></li>
    </ol>
  </div>
</section>

<section class="rw-print ab-print" aria-labelledby="print-title">
  <div class="container rw-print__grid">
    <div class="rw-print__copy">
      <p class="rw-eyebrow rw-rv"><span></span>Our work in print</p>
      <h2 class="rw-h2 rw-rv" id="print-title">A selection <em>from our shelves.</em></h2>
      <p class="rw-lead rw-rv">Explore books from our catalogue and the different subjects their authors have chosen.</p>
      <p class="rw-now" data-rw-now aria-live="polite"><span class="rw-now__n">In print</span><span class="rw-now__main"><span class="rw-cap__t">A Life Led from the Heart</span><span class="rw-cap__a">Emilio Degher</span></span><span class="rw-now__hint">Explore a cover for book details</span></p>
      <a class="rw-link rw-rv" href="our-work">View our publications <svg aria-hidden="true"><use href="#i-arrow"/></svg></a>
    </div>
    <div class="rw-rv"><div class="rw-table" data-rw-table>
<div class="rw-table__row"><a class="rw-book rw-table__book" href="our-work#book-26" aria-label="You vs You by Waheed Shaffiek, view in Our Work" data-rw-book="26" style="--s:0.74;--z:9"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-26.webp" width="600" height="1024" alt="You vs You: How to Overcome Doubt, Build Discipline, and Create a Life with Purpose by Waheed Shaffiek, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">You vs You</span><span class="rw-cap__s">How to Overcome Doubt, Build Discipline, and Create a Life with Purpose</span><span class="rw-cap__a">Waheed Shaffiek</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book is-lead" href="our-work#emilio-degher" aria-label="A Life Led from the Heart by Emilio Degher, view in Our Work" data-rw-book="11" style="--s:1;--z:20"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-11.webp" width="600" height="1024" alt="A Life Led from the Heart by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">A Life Led from the Heart</span><span class="rw-cap__a">Emilio Degher</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="our-work#book-24" aria-label="Whispers of Time by Aggee Andrew Vetiaque, view in Our Work" data-rw-book="24" style="--s:0.74;--z:11"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-24.webp" width="600" height="1024" alt="Whispers of Time: Poetry · French / Haitian Creole by Aggee Andrew Vetiaque, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Whispers of Time</span><span class="rw-cap__s">Poetry · French / Haitian Creole</span><span class="rw-cap__a">Aggee Andrew Vetiaque</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
<div class="rw-table__surface" aria-hidden="true"></div></div></div>
  </div>
</section>

<section class="ab-index" id="services-index" aria-labelledby="index-title">
  <div class="container">
    <p class="ab-label"><span>04</span><i>/</i>What we do</p>
    <div class="ab-index__grid">
      <div class="ab-index__head">
        <h2 class="ab-h2 ab-rv" id="index-title">Find the help <em>you need now.</em></h2>
        <p class="ab-body ab-rv">Choose a single service or discuss a connected plan for writing, production and promotion.</p>
      </div>
      <ol class="ab-index__list ab-rv" role="list">
        <li><a class="ab-index__row" href="ghostwriting"><span class="ab-index__n">01</span><span class="ab-index__t">Ghostwriting</span><span class="ab-index__d">Developing your story from the ground up</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="book-editing"><span class="ab-index__n">02</span><span class="ab-index__t">Book Editing</span><span class="ab-index__d">Refining the manuscript</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="book-publishing"><span class="ab-index__n">03</span><span class="ab-index__t">Book Publishing</span><span class="ab-index__d">Moving the finished work toward publication</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="book-promotion"><span class="ab-index__n">04</span><span class="ab-index__t">Book Promotion</span><span class="ab-index__d">Helping the book find its readers</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="book-cover-design"><span class="ab-index__n">05</span><span class="ab-index__t">Book Cover Design</span><span class="ab-index__d">Giving the book its first impression</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="illustration"><span class="ab-index__n">06</span><span class="ab-index__t">Illustration</span><span class="ab-index__d">Bringing the pages to life with artwork</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="audio-book"><span class="ab-index__n">07</span><span class="ab-index__t">Audio Book</span><span class="ab-index__d">Turning the book into a listening experience</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="author-website"><span class="ab-index__n">08</span><span class="ab-index__t">Author Website</span><span class="ab-index__d">A home for the author online</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
        <li><a class="ab-index__row" href="book-video"><span class="ab-index__n">09</span><span class="ab-index__t">Book Video</span><span class="ab-index__d">Telling the book’s story on screen</span><span class="ab-index__go" aria-hidden="true"><svg><use href="#i-arrow"/></svg></span></a></li>
      </ol>
    </div>
  </div>
</section>

<section class="ab-shelf on-dark" aria-labelledby="shelf-title">
  <div class="ab-shelf__img" aria-hidden="true"><img src="assets/images/photos/1568667256549-094345857637-2400x1300.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async" data-parallax="0.06"></div>
  <div class="container ab-shelf__inner">
    <p class="ab-eyebrow ab-eyebrow--light ab-rv"><span></span>The finished book</p>
    <h2 class="ab-shelf__title ab-rv" id="shelf-title">A manuscript, <em>made into a book.</em></h2>
  </div>
</section>

<section class="cta on-dark ab-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1760237658139-ea4ff6c33a91-1800.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async" data-parallax="0.06">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="ab-eyebrow ab-eyebrow--light"><span></span>Your story starts here</p>
      <h2 class="ab-cta__title" id="cta-title">Where are you <em>with your book?</em></h2>
      <p class="ab-cta__text">Tell us what you have written, what you want to achieve and where you would welcome some help.</p>
      <div class="ab-cta__btns">
        <button class="btn btn--light" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Share your book plans', 'rows' => 4, 'messageLabel' => 'What are you writing, and where do you need help?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
