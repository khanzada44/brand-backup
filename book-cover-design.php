<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'book-cover-design.php';
$pageScripts = ['assets/js/book-cover-design2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/cover2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Custom Book Cover Design for Print and Digital | <?= site_text('project_name') ?></title>
  <meta name="description" content="Develop a book cover around your story and genre, with concepts, typography, artwork and final files for your chosen print and digital editions.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Custom Book Cover Design for Print and Digital | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Develop a book cover around your story and genre, with concepts, typography, artwork and final files for your chosen print and digital editions.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1667929048193-4fef49b0ba0a-2400.webp" media="(min-width: 761px)" fetchpriority="high">
  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1667929048193-4fef49b0ba0a-1200.webp" media="(max-width: 760px)" fetchpriority="high">
  
</head>
<body class="page-cover">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#cover-services', 'section' => 'cover-services', 'label' => 'Services', 'icon' => '#i-brush', 'text' => 'Services'],
    ['href' => '#covers', 'section' => 'covers', 'label' => 'Covers', 'icon' => '#i-book', 'text' => 'Covers'],
    ['href' => '#process', 'section' => 'process', 'label' => 'Process', 'icon' => '#i-steps', 'text' => 'Process'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="cd-hero on-dark" id="top" aria-labelledby="cd-title">
  <div class="cd-hero__media" aria-hidden="true"><div class="cd-hero__img" data-parallax="0.06"></div></div>
  <div class="container cd-hero__inner">
    <nav class="cd-crumbs" aria-label="Breadcrumb">
      <ol role="list">
        <li><a href="./">Home</a></li>
        <li><a href="./#services">Services</a></li>
        <li aria-current="page">Book Cover Design</li>
      </ol>
    </nav>
    <div class="cd-hero__copy">
      <span class="cd-crop cd-crop--tl" aria-hidden="true"></span><span class="cd-crop cd-crop--br" aria-hidden="true"></span>
      <p class="eyebrow" data-reveal>Book cover design</p>
      <h1 class="cd-hero__title" id="cd-title" data-reveal style="--d:.08s">A cover that feels <em>right for your book.</em></h1>
      <p class="cd-hero__lead" data-reveal style="--d:.16s">We design book covers around the story, the genre and the readers you hope to reach, with clear typography and artwork that belongs to your work.</p>
      <div class="cd-hero__ctas" data-reveal style="--d:.22s">
        <button class="btn btn--light" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </div>
    </div>
    <ul class="cd-hero__disciplines" role="list" data-reveal style="--d:.3s">
      <li>Art direction</li><li>Typography</li><li>Book design</li><li>Publishing</li>
    </ul>
  </div>
</section>

<section class="section section--ivory cd-first" id="overview" aria-labelledby="first-title">
  <div class="cd-bg cd-bg--first" data-cd-bg aria-hidden="true"><div class="cd-bg__img"></div></div>
  <div class="container cd-first__grid">
    <div class="cd-first__lead">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 01</p>
      <h2 class="cd-h2" id="first-title" data-reveal style="--d:.08s">Your reader’s <em>first look.</em></h2>
    </div>
    <div class="cd-first__body" data-reveal style="--d:.14s">
      <p class="cd-first__drop">The cover helps a reader decide what kind of book they are holding.</p>
      <p>We study the manuscript, talk through references and explore the balance of imagery and type. You see the direction develop before the final artwork is prepared.</p>
      <p class="cd-first__types">Cover approaches: illustrated, photographic and led by typography</p>
    </div>
    <figure class="cd-first__print" data-reveal="scale" style="--d:.1s">
      <span class="cd-marks" aria-hidden="true"></span>
      <img src="assets/images/books/cover-24.webp" width="440" height="660" alt="Cover of Whispers of Time by Aggee Andrew Vetiaque, published with <?= site_text('project_name') ?>" loading="lazy" decoding="async">
      <figcaption><span class="label">Published with <?= site_text('short_name') ?></span> Whispers of Time by Aggee Andrew Vetiaque</figcaption>
    </figure>
  </div>
</section>

<section class="section section--ivory cd-index" id="cover-services" aria-labelledby="index-title">
  <figure class="cd-index__panel" data-cd-bg aria-hidden="true"><div class="cd-index__panel-img"></div><figcaption class="label">In the studio</figcaption></figure>
  <div class="container">
    <div class="cd-index__head">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 02</p>
      <h2 class="cd-h2" id="index-title" data-reveal style="--d:.08s">From the brief <em>to the cover file.</em></h2>
      <p data-reveal style="--d:.14s">A complete cover project considers the front, spine, back and digital edition from the beginning.</p>
    </div>
    <ol class="cd-rows" role="list">
      <li class="cd-row" data-reveal><span class="cd-row__n">01</span><h3>Concept &amp; Art Direction</h3><p>Agree on the mood, visual references and direction of the design.</p></li>
      <li class="cd-row" data-reveal><span class="cd-row__n">02</span><h3>Typography &amp; Title Treatment</h3><p>Set the title, subtitle and author name so they are readable and suited to the genre.</p></li>
      <li class="cd-row" data-reveal><span class="cd-row__n">03</span><h3>Front Cover Design</h3><p>Bring the imagery and type together in a clear front cover design.</p></li>
      <li class="cd-row" data-reveal><span class="cd-row__n">04</span><h3>Full Wraparound Design</h3><p>Extend the design across the front, spine and back of your print edition.</p></li>
      <li class="cd-strip" aria-hidden="true">
        <span style="--p:50% 22%"><img src="assets/images/books/cover-05.webp" alt="" loading="lazy" decoding="async"></span>
        <span style="--p:50% 12%"><img src="assets/images/books/cover-12.webp" alt="" loading="lazy" decoding="async"></span>
        <span style="--p:50% 14%"><img src="assets/images/books/cover-25.webp" alt="" loading="lazy" decoding="async"></span>
        <span style="--p:50% 16%"><img src="assets/images/books/cover-27.webp" alt="" loading="lazy" decoding="async"></span>
        <em class="cd-strip__cap">Title typography, cropped. Covers published with <?= site_text('short_name') ?></em>
      </li>
      <li class="cd-row" data-reveal><span class="cd-row__n">05</span><h3>Spine &amp; Back Cover</h3><p>Arrange the spine, description and other back cover details with care.</p></li>
      <li class="cd-row" data-reveal><span class="cd-row__n">06</span><h3>Print &amp; Digital Formatting</h3><p>Adapt the artwork to the requirements of your chosen editions.</p></li>
      <li class="cd-row" data-reveal><span class="cd-row__n">07</span><h3>Genre Positioning</h3><p>Consider the visual cues readers expect when browsing your category.</p></li>
      <li class="cd-row" data-reveal><span class="cd-row__n">08</span><h3>Final Production Files</h3><p>Prepare the agreed cover files for publishing and printing.</p></li>
    </ol>
  </div>
</section>

<section class="section section--dark cd-show" id="covers" aria-labelledby="show-title">
  <div class="cd-bg cd-bg--show" data-cd-bg aria-hidden="true"><div class="cd-bg__img"></div></div>
  <div class="container cd-show__grid">
    <div class="cd-show__copy">
      <p class="cd-chapter cd-chapter--dark" data-reveal><span>Ch.</span> 03</p>
      <h2 class="cd-h2" id="show-title" data-reveal style="--d:.08s">Take a look <em>at the catalogue.</em></h2>
      <p data-reveal style="--d:.14s">Browse cover examples from books published with <?= site_text('project_name') ?>. Notice how the imagery and type change with the subject.</p>
      <ol class="cd-show__list" role="list" data-reveal style="--d:.2s">
        <li><b>Bloom Through the Pain</b><span>Kadeisha Corbin</span></li>
        <li><b>Bajo la Influencia del Kremlin</b><span>Virginia Perez Perez</span></li>
        <li><b>You vs You</b><span>Waheed Shaffiek</span></li>
      </ol>
    </div>
    <div class="cd-show__stage" data-reveal="scale" style="--d:.1s">
      <figure class="cd-show__back cd-show__back--a"><img src="assets/images/books/cover-25.webp" width="440" height="660" alt="Cover of Bajo la Influencia del Kremlin by Virginia Perez Perez" loading="lazy" decoding="async"></figure>
      <figure class="cd-show__back cd-show__back--b"><img src="assets/images/books/cover-26.webp" width="440" height="660" alt="Cover of You vs You by Waheed Shaffiek" loading="lazy" decoding="async"></figure>
      <div class="book3d cd-show__hero" data-tilt aria-hidden="true">
        <div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" src="assets/images/books/cover-20.webp" width="440" height="660" alt="" loading="lazy"></div>
        <div class="book3d__shadow"></div>
      </div>
      <figure class="cd-show__loupe" aria-hidden="true"><img src="assets/images/books/cover-20.webp" alt="" loading="lazy" decoding="async"></figure>
    </div>
  </div>
</section>

<section class="section section--ivory cd-details" id="details" aria-labelledby="details-title">
  <div class="cd-bg cd-bg--details" data-cd-bg aria-hidden="true"><div class="cd-bg__img"></div></div>
  <div class="cd-details__grid">
    <figure class="cd-details__photo" data-reveal="scale">
      <img src="assets/images/photos/1618470341957-dc61f2aa50d1-1400.webp" width="1400" height="1050" alt="Close up of a cloth bound book cover with gold foil lettering and ornament" loading="lazy" decoding="async">
    </figure>
    <div class="cd-details__copy">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 04</p>
      <h2 class="cd-h2" id="details-title" data-reveal style="--d:.08s">Small choices, <em>visible differences.</em></h2>
      <p class="cd-details__lede" data-reveal style="--d:.14s">The space around a title, the weight of a font and the crop of an image can change how a cover feels. We review those choices as part of the design.</p>
      <dl class="cd-terms" data-reveal style="--d:.2s">
        <div><dt>Typography</dt><dd>Typefaces chosen for the genre and set with care.</dd></div>
        <div><dt>Hierarchy</dt><dd>Title, subtitle and author read in the right order.</dd></div>
        <div><dt>Color</dt><dd>A palette that signals mood before a word is read.</dd></div>
        <div><dt>Composition</dt><dd>Balance, focus and space that hold the eye.</dd></div>
        <div><dt>Paper &amp; texture</dt><dd>How the design will feel in the hand.</dd></div>
        <div><dt>Imagery</dt><dd>Photography or illustration that tells the story at a glance.</dd></div>
        <div><dt>Genre</dt><dd>Familiar enough to belong, distinct enough to stand out.</dd></div>
        <div><dt>Spine alignment</dt><dd>Legible on the shelf and aligned to the page count.</dd></div>
        <div><dt>Back cover structure</dt><dd>Room for the blurb, author and barcode.</dd></div>
        <div><dt>Print finishing</dt><dd>Artwork prepared to print exactly as designed.</dd></div>
      </dl>
    </div>
  </div>
</section>

<section class="section section--paper cd-process" id="process" aria-labelledby="proc-title">
  <div class="cd-bg cd-bg--process" data-cd-bg aria-hidden="true"><div class="cd-bg__img"></div></div>
  <div class="container">
    <div class="cd-process__head">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 05</p>
      <h2 class="cd-h2" id="proc-title" data-reveal style="--d:.08s">A cover developed <em>with your input.</em></h2>
      <p data-reveal style="--d:.14s">We start with a brief, share concepts and work through the agreed revisions before preparing the final files.</p>
    </div>
    <ol class="cd-steps" role="list">
      <li data-reveal><span class="cd-steps__n">01</span><h3>Discover</h3><p>Discuss the book, its readers and your design preferences.</p></li>
      <li data-reveal style="--d:.06s"><span class="cd-steps__n">02</span><h3>Concept</h3><p>Explore possible directions through initial cover ideas.</p></li>
      <li data-reveal style="--d:.12s"><span class="cd-steps__n">03</span><h3>Design</h3><p>Develop the chosen idea with imagery, typography and layout.</p></li>
      <li data-reveal style="--d:.18s"><span class="cd-steps__n">04</span><h3>Refine</h3><p>Work through feedback and check the details together.</p></li>
      <li data-reveal style="--d:.24s"><span class="cd-steps__n">05</span><h3>Deliver</h3><p>Export the agreed artwork for the selected publishing formats.</p></li>
    </ol>
  </div>
</section>

<section class="section section--ivory cd-anywhere" id="everywhere" aria-labelledby="any-title">
  <div class="cd-bg cd-bg--anywhere" data-cd-bg aria-hidden="true"><div class="cd-bg__img"></div></div>
  <div class="container">
    <div class="cd-anywhere__head">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 06</p>
      <h2 class="cd-h2" id="any-title" data-reveal style="--d:.08s">From the shelf <em>to the small screen.</em></h2>
      <p data-reveal style="--d:.14s">Your cover needs to read as a small online image as well as a printed book. We check both views as the design develops.</p>
    </div>
    <div class="cd-contexts" data-reveal>
      <figure class="cd-ctx cd-ctx--shelf">
        <div class="cd-ctx__frame">
          <span class="cd-spine" style="--c:#2b2f3a;--h:88%"></span>
          <span class="cd-spine" style="--c:#6d4a33;--h:94%"></span>
          <img src="assets/images/books/cover-12.webp" alt="" loading="lazy" decoding="async">
          <span class="cd-spine" style="--c:#8a7a5c;--h:90%"></span>
          <span class="cd-ctx__shelf" aria-hidden="true"></span>
        </div>
        <figcaption><b>On the shelf</b> Bookstores &amp; print</figcaption>
      </figure>
      <figure class="cd-ctx cd-ctx--thumb">
        <div class="cd-ctx__frame">
          <div class="cd-listing"><img src="assets/images/books/cover-12.webp" alt="" loading="lazy" decoding="async"><span><i></i><i></i><i></i></span></div>
          <div class="cd-listing cd-listing--dim"><span class="cd-listing__blank"></span><span><i></i><i></i><i></i></span></div>
          <div class="cd-listing cd-listing--dim"><span class="cd-listing__blank"></span><span><i></i><i></i><i></i></span></div>
        </div>
        <figcaption><b>As a thumbnail</b> Amazon &amp; ebook stores</figcaption>
      </figure>
      <figure class="cd-ctx cd-ctx--feed">
        <div class="cd-ctx__frame"><div class="cd-post"><img src="assets/images/books/cover-12.webp" alt="" loading="lazy" decoding="async"></div><span class="cd-post__line"></span><span class="cd-post__line cd-post__line--s"></span></div>
        <figcaption><b>In a feed</b> Social media &amp; ads</figcaption>
      </figure>
      <figure class="cd-ctx cd-ctx--catalog">
        <div class="cd-ctx__frame"><div class="cd-page"><img src="assets/images/books/cover-12.webp" alt="" loading="lazy" decoding="async"><span><i></i><i></i><i></i><i></i><i></i></span></div></div>
        <figcaption><b>On the page</b> Catalogs &amp; author websites</figcaption>
      </figure>
    </div>
    <p class="cd-anywhere__note">Featured example: The Path of Truth by Emilio Degher, from <?= site_text('project_name') ?>.</p>
  </div>
</section>

<section class="section section--paper cd-spec" id="deliverables" aria-labelledby="spec-title">
  <div class="cd-bg cd-bg--spec" data-cd-bg aria-hidden="true"><div class="cd-bg__img"></div></div>
  <div class="container cd-spec__grid">
    <div class="cd-spec__head">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 07</p>
      <h2 class="cd-h2" id="spec-title" data-reveal style="--d:.08s">Your finished <em>cover package.</em></h2>
      <p data-reveal style="--d:.14s">We agree on the formats you need and prepare files around the requirements of your chosen publisher or printer.</p>
    </div>
    <div class="cd-sheet" data-reveal="scale" style="--d:.1s">
      <span class="cd-marks" aria-hidden="true"></span>
      <p class="cd-sheet__title"><span>Cover package</span><span>Specification</span></p>
      <ul class="cd-sheet__list" role="list">
        <li><b>Front cover design</b><i></i><span>Final artwork</span></li>
        <li><b>Full wraparound cover</b><i></i><span>Front · spine · back</span></li>
        <li><b>Spine and back cover</b><i></i><span>For print editions</span></li>
        <li><b>Print ready files</b><i></i><span>PDF</span></li>
        <li><b>Ebook cover</b><i></i><span>Digital editions</span></li>
        <li><b>High resolution artwork</b><i></i><span>Print &amp; digital</span></li>
        <li><b>Multiple file formats</b><i></i><span>PDF · JPEG · PNG</span></li>
        <li><b>Production specifications</b><i></i><span>Amazon KDP · IngramSpark</span></li>
        <li><b>Final approved cover files</b><i></i><span>After your approval</span></li>
      </ul>
    </div>
  </div>
</section>

<section class="cd-campaign on-dark" aria-labelledby="campaign-title">
  <div class="cd-campaign__media" aria-hidden="true">
    <img src="assets/images/photos/1598113226787-55dbeaeed8e9-2200.webp" width="2200" height="1464" alt="" loading="lazy" decoding="async" data-parallax="0.05">
  </div>
  <div class="container cd-campaign__inner">
    <h2 class="cd-campaign__title" id="campaign-title" data-reveal>Make the cover <em>an invitation to read.</em></h2>
  </div>
</section>

<section class="section section--ivory faq" id="faq" aria-labelledby="faq-title">
  <div class="container faq__grid">
    <div class="faq__head">
      <p class="cd-chapter" data-reveal><span>Ch.</span> 08</p>
      <h2 class="h2" id="faq-title" data-reveal style="--d:.08s">Questions about <em>designing your cover.</em></h2>
    </div>
    <div class="faq__list" data-faq>
      <details class="qa" data-reveal open>
        <summary><span>Why is a professional book cover important?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>A considered cover helps readers recognise the genre, understand the tone and take a closer look at the book.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>What types of book cover designs do you offer?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>We can explore illustration, photography or typography as the main design approach, along with presentation mockups where included in the brief.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>Can I request changes to my book cover design?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Yes. You review the design and share feedback during the revision rounds agreed for your project.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>Do you provide covers for both print and ebooks?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Yes. Tell us which editions you need so we can plan the correct artwork and dimensions.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>How long does the book cover design process take?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>It depends on the artwork, formats and review rounds. We agree on the schedule once the brief is clear.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>Can you create a book cover that fits my genre?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Yes. We look at your genre, comparable books and your own preferences before developing the concepts.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>How do I get started with my book cover design?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Share the title, genre, synopsis and any covers you like. We will use that conversation to build the design brief.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="cta on-dark cd-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1613577553731-e102e5de62f5-1600.webp" alt="" loading="lazy" decoding="async" data-parallax="0.08">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal>Start your cover</p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s">What should your book <em>look like?</em></h2>
      <p class="lead" data-reveal style="--d:.16s">Tell us about the story and the impression you want the cover to make.</p>
      <div class="cd-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Start Your Cover <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Talk to Our Design Team</a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Start your cover', 'rows' => 4, 'messageLabel' => 'Tell us about the book and your cover ideas']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
