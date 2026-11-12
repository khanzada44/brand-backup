<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'author-website.php';
$pageScripts = ['assets/js/author-website2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/author2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Author Website Design and Development | <?= site_text('project_name') ?></title>
  <meta name="description" content="Bring your books, biography and news together on an author website. Discuss book pages, content updates and direct sales options with our team.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Author Website Design and Development | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Bring your books, biography and news together on an author website. Discuss book pages, content updates and direct sales options with our team.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1616400619175-5beda3a17896-2400.webp" media="(min-width: 761px)" fetchpriority="high">
  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1616400619175-5beda3a17896-1200.webp" media="(max-width: 760px)" fetchpriority="high">
  
</head>
<body class="page-author">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#showcase', 'section' => 'showcase', 'label' => 'Showcase', 'icon' => '#i-globe', 'text' => 'Website'],
    ['href' => '#pages', 'section' => 'pages', 'label' => 'Pages', 'icon' => '#i-book', 'text' => 'Pages'],
    ['href' => '#process', 'section' => 'process', 'label' => 'Process', 'icon' => '#i-steps', 'text' => 'Process'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="aw-hero on-dark" id="top" aria-labelledby="aw-title">
  <div class="aw-hero__media" aria-hidden="true"><div class="aw-hero__img" data-parallax="0.06"></div></div>
  <div class="container aw-hero__inner">
    <nav class="aw-crumbs" aria-label="Breadcrumb">
      <ol role="list">
        <li><a href="./">Home</a></li>
        <li><a href="./#services">Services</a></li>
        <li aria-current="page">Author Website</li>
      </ol>
    </nav>
    <div class="aw-hero__copy">
      <p class="eyebrow" data-reveal>Author website design</p>
      <h1 class="aw-hero__title" id="aw-title" data-reveal style="--d:.08s">Give readers a place <em>to find you.</em></h1>
      <p class="aw-hero__lead" data-reveal style="--d:.16s">An author website brings your books, background and latest news together in one place, with a design that feels connected to your writing.</p>
      <div class="aw-hero__ctas" data-reveal style="--d:.22s">
        <button class="btn btn--light" type="button" data-open-lead>Build My Author Website <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="#approach">See Our Approach</a>
      </div>
    </div>
    <p class="aw-hero__url" data-reveal style="--d:.3s" aria-hidden="true"><span class="aw-hero__lock"></span>www.<b>yourname</b>.com</p>
  </div>
</section>

<section class="section section--ivory aw-presence" id="approach" aria-labelledby="presence-title">
  <div class="container aw-presence__grid">
    <div class="aw-presence__head">
      <p class="aw-kicker" data-reveal><span>01</span>Your digital presence</p>
      <h2 class="aw-h2" id="presence-title" data-reveal style="--d:.08s">A home for your books <em>and the person behind them.</em></h2>
      <p class="aw-presence__lede" data-reveal style="--d:.14s">Readers may discover you through a recommendation or a single title. Your website helps them learn more, explore your other work and find a reliable way to get in touch.</p>
    </div>
    <ol class="aw-roles" role="list" data-reveal style="--d:.1s">
      <li><span>i.</span>Introduce the author</li>
      <li><span>ii.</span>Showcase your books</li>
      <li><span>iii.</span>Establish credibility</li>
      <li><span>iv.</span>Give readers a place to connect</li>
      <li><span>v.</span>Support media &amp; press</li>
      <li><span>vi.</span>Collect reader interest</li>
      <li><span>vii.</span>Make you easy to contact</li>
      <li><span>viii.</span>Create a lasting digital identity</li>
    </ol>
  </div>
</section>

<section class="section section--paper aw-built" id="showcase" aria-labelledby="built-title">
  <div class="container">
    <div class="aw-built__head">
      <p class="aw-kicker" data-reveal><span>02</span>The author’s home page</p>
      <h2 class="aw-h2" id="built-title" data-reveal style="--d:.08s">Your books. <em>Your corner of the web.</em></h2>
    </div>
    <figure class="aw-browser" data-reveal="scale" style="--d:.1s">
      <div class="aw-browser__bar" aria-hidden="true"><i></i><i></i><i></i><span>clarawhitmore.com</span></div>
      <div class="aw-screen" aria-label="Illustrative author website design for a fictional author">
<?php render_component('previews/coastal-home'); ?>
      </div>
      <ul class="aw-callouts" role="list">
        <li style="--x:62%;--y:1.5%"><b>Navigation</b>Books, about, journal, press, events</li>
        <li style="--x:58%;--y:22%"><b>Featured book</b>The newest title, front and centre</li>
        <li style="--x:2%;--y:47%"><b>Biography</b>Portrait, short bio and social links</li>
        <li style="--x:38%;--y:47%"><b>Excerpt</b>A taste of the writing</li>
        <li style="--x:2%;--y:66%"><b>Journal &amp; events</b>Reasons for readers to return</li>
        <li style="--x:60%;--y:84%"><b>Reader connection</b>Newsletter sign up</li>
      </ul>
      <figcaption>Illustrative design for a fictional author, showing how an <?= site_text('short_name') ?> author website can be structured.</figcaption>
    </figure>
  </div>
</section>

<section class="section section--ivory aw-pages" id="pages" aria-labelledby="pages-title">
  <div class="aw-photo aw-photo--pages" data-aw-bg aria-hidden="true"><div class="aw-photo__img"></div></div>
  <div class="container aw-pages__grid">
    <div class="aw-pages__head">
      <p class="aw-kicker" data-reveal><span>03</span>Site structure</p>
      <h2 class="aw-h2" id="pages-title" data-reveal style="--d:.08s">Useful pages, <em>with a clear purpose.</em></h2>
      <p data-reveal style="--d:.14s">We can plan a site you can update with new book details, articles and event news. Editing features are agreed as part of the build.</p>
    </div>
    <ol class="aw-toc" role="list">
      <li data-reveal><span class="aw-toc__n">01</span><b>Author Home</b><i></i><span class="aw-toc__d">First impression</span></li>
      <li data-reveal><span class="aw-toc__n">02</span><b>About the Author</b><i></i><span class="aw-toc__d">Your story</span></li>
      <li data-reveal><span class="aw-toc__n">03</span><b>Books &amp; Publications</b><i></i><span class="aw-toc__d">Your shelf</span></li>
      <li data-reveal><span class="aw-toc__n">04</span><b>Individual Book Pages</b><i></i><span class="aw-toc__d">One page per title</span></li>
      <li data-reveal><span class="aw-toc__n">05</span><b>Media &amp; Press</b><i></i><span class="aw-toc__d">For journalists</span></li>
      <li data-reveal><span class="aw-toc__n">06</span><b>Events &amp; Appearances</b><i></i><span class="aw-toc__d">Readings &amp; signings</span></li>
      <li data-reveal><span class="aw-toc__n">07</span><b>Reader Connection</b><i></i><span class="aw-toc__d">Community</span></li>
      <li data-reveal><span class="aw-toc__n">08</span><b>Contact</b><i></i><span class="aw-toc__d">Contact form</span></li>
      <li data-reveal><span class="aw-toc__n">09</span><b>Newsletter / Mailing List</b><i></i><span class="aw-toc__d">Sign up</span></li>
      <li data-reveal><span class="aw-toc__n">10</span><b>Blog or Journal</b><i></i><span class="aw-toc__d">Optional</span></li>
    </ol>
  </div>
</section>

<section class="section section--dark aw-devices" id="responsive" aria-labelledby="devices-title">
  <div class="container">
    <div class="aw-devices__head">
      <p class="aw-kicker aw-kicker--dark" data-reveal><span>04</span>Responsive design</p>
      <h2 class="aw-h2" id="devices-title" data-reveal style="--d:.08s">Easy to explore <em>on any screen.</em></h2>
      <p data-reveal style="--d:.14s">We design for the ways readers visit, with readable text, straightforward navigation and book information that works on phones, tablets and computers.</p>
    </div>
    <div class="aw-trio" data-reveal="scale" style="--d:.1s" aria-label="The same illustrative author website shown on desktop, tablet and phone">
      <div class="aw-dev aw-dev--desk"><div class="aw-screen aw-screen--desk"><?php render_component('previews/coastal-home'); ?></div></div>
      <div class="aw-dev aw-dev--tab"><div class="aw-screen aw-screen--tab"><div class="cw cw-tab">
  <header class="cw-nav"><span class="cw-mark">Clara Whitmore</span><span class="cw-links"><span>Books</span><span>About</span><span>Journal</span></span><span class="cw-burger"></span></header>
  <section class="cw-tabhero"><span class="bk bk--harbour bk--tab"><img src="assets/images/photos/1707922402605-2739e9e503ad-700x1050.webp" alt="" loading="lazy" decoding="async"><span class="bk__top"><span class="bk__kicker">A Novel</span><span class="bk__t">The Quiet Harbour</span></span><span class="bk__a">Clara Whitmore</span></span><div><p class="cw-eyebrow">New novel · Autumn</p><p class="cw-h1 cw-h1--tab">The Quiet Harbour</p><p class="cw-small">A daughter, a harbour town and the one summer that changed them both.</p><div class="cw-actions"><span class="cw-btn">Order now</span><span class="cw-link">Excerpt →</span></div></div></section>
  <section class="cw-tababout"><img class="cw-portrait" src="assets/images/photos/1667053508464-eb11b394df83-500x620.webp" alt="" loading="lazy" decoding="async"><div><p class="cw-label">About Clara</p><p class="cw-small">Clara Whitmore writes quiet coastal fiction about family, memory and the small towns we carry with us.</p></div></section>
  <section class="cw-tabbooks"><p class="cw-label">Also by Clara</p><div><span class="bk bk--salt "><span class="bk__top"><span class="bk__t">Salt &amp;<br>Silence</span><span class="bk__rule"></span></span><span class="bk__sun"></span><span class="bk__a">Clara Whitmore</span></span><span class="bk bk--tide "><img src="assets/images/photos/1760872069217-7580345401e3-700x1050.webp" alt="" loading="lazy" decoding="async"><span class="bk__top"><span class="bk__kicker">A Novel</span></span><span class="bk__t">The Last Tide</span><span class="bk__a">Clara Whitmore</span></span><span class="cw-small">Salt &amp; Silence · 2024<br>The Last Tide · 2021</span></div></section>
  <section class="cw-news cw-news--stack"><p class="cw-h3">Letters from the coast</p><span class="cw-field">your@email.com</span><span class="cw-btn">Subscribe</span></section>
</div></div></div>
      <div class="aw-dev aw-dev--phone"><span class="aw-dev__notch"></span><div class="aw-screen aw-screen--phone"><div class="cw cw-phone">
  <header class="cw-nav"><span class="cw-mark">Clara Whitmore</span><span class="cw-burger"></span></header>
  <p class="cw-eyebrow">New novel · Autumn</p>
  <p class="cw-h1 cw-h1--phone">Stories about the people who stay behind.</p>
  <span class="bk bk--harbour bk--phone"><img src="assets/images/photos/1707922402605-2739e9e503ad-700x1050.webp" alt="" loading="lazy" decoding="async"><span class="bk__top"><span class="bk__kicker">A Novel</span><span class="bk__t">The Quiet Harbour</span></span><span class="bk__a">Clara Whitmore</span></span>
  <span class="cw-btn cw-btn--block">Read the first chapter</span>
  <p class="cw-quote cw-quote--phone">“The tide never asked permission.”</p>
  <p class="cw-label">More books</p><div class="cw-phonebooks"><span class="bk bk--salt "><span class="bk__top"><span class="bk__t">Salt &amp;<br>Silence</span><span class="bk__rule"></span></span><span class="bk__sun"></span><span class="bk__a">Clara Whitmore</span></span><span class="bk bk--tide "><img src="assets/images/photos/1760872069217-7580345401e3-700x1050.webp" alt="" loading="lazy" decoding="async"><span class="bk__top"><span class="bk__kicker">A Novel</span></span><span class="bk__t">The Last Tide</span><span class="bk__a">Clara Whitmore</span></span></div>
</div></div></div>
    </div>
    <ul class="aw-devices__notes" role="list" data-reveal style="--d:.16s">
      <li><b>Typography</b> set for long reading</li><li><b>Navigation</b> that adapts to thumbs</li><li><b>Books</b> presented at every size</li><li><b>Accessibility</b> in contrast and structure</li>
    </ul>
  </div>
</section>

<section class="section section--ivory aw-books" id="books" aria-labelledby="books-title">
  <div class="container aw-books__grid">
    <div class="aw-books__head">
      <p class="aw-kicker" data-reveal><span>05</span>Book pages</p>
      <h2 class="aw-h2" id="books-title" data-reveal style="--d:.08s">Let each book <em>have its own space.</em></h2>
      <p data-reveal style="--d:.14s">A dedicated book page can hold the description, cover, sample and buying links. If direct sales are part of your plan, we can discuss a store and payment setup.</p>
    </div>
    <figure class="aw-browser aw-browser--book" data-reveal="scale" style="--d:.1s">
      <div class="aw-browser__bar" aria-hidden="true"><i></i><i></i><i></i><span>clarawhitmore.com/books/salt and silence</span></div>
      <div class="aw-screen" aria-label="Illustrative book page for a fictional title"><div class="cw cw-book">
  <header class="cw-nav"><span class="cw-mark">Clara Whitmore</span><nav class="cw-links"><span class="is-on">Books</span><span>About</span><span>Journal</span><span>Press</span><span>Events</span><span>Contact</span></nav><span class="cw-btn cw-btn--line">Newsletter</span></header>
  <p class="cw-crumb">Books <i>/</i> Salt &amp; Silence</p>
  <section class="cw-bookhero">
    <div class="cw-bookhero__cover"><span class="bk bk--salt bk--xl"><span class="bk__top"><span class="bk__t">Salt &amp;<br>Silence</span><span class="bk__rule"></span></span><span class="bk__sun"></span><span class="bk__a">Clara Whitmore</span></span></div>
    <div class="cw-bookhero__info">
      <p class="cw-eyebrow">Literary fiction · 2024</p>
      <p class="cw-h1 cw-h1--book">Salt &amp; Silence</p>
      <p class="cw-by">by Clara Whitmore</p>
      <p class="cw-lead">When a lighthouse keeper’s daughter returns to the island she swore she’d leave forever, she finds the town has kept every one of her secrets, and one of its own.</p>
      <div class="cw-actions"><span class="cw-btn">Buy the book</span><span class="cw-link">Read an excerpt →</span></div>
      <dl class="cw-spec"><div><dt>Format</dt><dd>Hardcover, ebook, audiobook</dd></div><div><dt>Pages</dt><dd>312</dd></div><div><dt>Published</dt><dd>March 2024</dd></div></dl>
    </div>
  </section>
  <section class="cw-bookbody">
    <div class="cw-bookabout"><p class="cw-label">About the book</p><p class="cw-body">Nell Aldous left Carrick Island at eighteen and built a life that never once required her to look back. Twenty years later, her father’s death brings her home to the lighthouse, the keeper’s cottage and a community that remembers her better than she remembers herself.</p><p class="cw-body">Told across one winter, <i>Salt &amp; Silence</i> is a novel about inheritance and the quiet courage it takes to stay.</p></div>
    <figure class="cw-praise"><p class="cw-label">Praise for Salt &amp; Silence</p><blockquote>“A tender, tidal novel. Whitmore writes silence the way other writers write storms.”</blockquote><figcaption>The Coastal Review</figcaption><blockquote class="cw-praise__2">“Unhurried, luminous and quietly devastating.”</blockquote><figcaption>Northlight Magazine</figcaption></figure>
  </section>
  <section class="cw-also"><p class="cw-label">Also by Clara</p><div class="cw-also__row"><span class="cw-also__item"><span class="bk bk--harbour "><img src="assets/images/photos/1707922402605-2739e9e503ad-700x1050.webp" alt="" loading="lazy" decoding="async"><span class="bk__top"><span class="bk__kicker">A Novel</span><span class="bk__t">The Quiet Harbour</span></span><span class="bk__a">Clara Whitmore</span></span><span><b>The Quiet Harbour</b><em>2026 · Novel</em></span></span><span class="cw-also__item"><span class="bk bk--tide "><img src="assets/images/photos/1760872069217-7580345401e3-700x1050.webp" alt="" loading="lazy" decoding="async"><span class="bk__top"><span class="bk__kicker">A Novel</span></span><span class="bk__t">The Last Tide</span><span class="bk__a">Clara Whitmore</span></span><span><b>The Last Tide</b><em>2021 · Novel</em></span></span></div><div class="cw-news cw-news--inline"><div><p class="cw-h3">Letters from the coast</p><p class="cw-small">New writing and events, once a month.</p></div><span class="cw-field">your@email.com</span><span class="cw-btn">Subscribe</span></div></section>
</div></div>
      <figcaption>Illustrative example: fictional author and titles.</figcaption>
    </figure>
  </div>
</section>

<section class="section section--paper aw-details" id="details" aria-labelledby="details-title">
  <div class="aw-photo aw-photo--details" data-aw-bg aria-hidden="true"><div class="aw-photo__img"></div></div>
  <div class="container">
    <div class="aw-details__head">
      <p class="aw-kicker" data-reveal><span>06</span>Craft</p>
      <h2 class="aw-h2" id="details-title" data-reveal style="--d:.08s">The details that <em>make browsing easier.</em></h2>
    </div>
    <p class="aw-words" data-reveal style="--d:.1s">
      <span>Typography</span> <i>·</i> <span>Spacing</span> <i>·</i> <span>Navigation</span> <i>·</i> <span>Image direction</span> <i>·</i> <span>Mobile responsiveness</span> <i>·</i> <span>Accessibility</span> <i>·</i> <span>Page hierarchy</span> <i>·</i> <span>Loading performance</span> <i>·</i> <span>SEO structure</span> <i>·</i> <span>Social sharing</span> <i>·</i> <span>Contact forms</span>
    </p>
    <div class="aw-details__cols" data-reveal style="--d:.16s">
      <p><b>Design.</b> Type, colours and layouts chosen for comfortable reading and a clear view of your books.</p>
      <p><b>Build.</b> Pages planned with responsive layouts, useful metadata and attention to loading performance.</p>
      <p><b>Care.</b> Checks before launch and a clear discussion of any support you need afterwards.</p>
    </div>
  </div>
</section>

<section class="aw-journey on-dark" id="process" aria-labelledby="journey-title">
  <div class="aw-journey__media" data-aw-bg aria-hidden="true"><div class="aw-journey__img"></div></div>
  <div class="container">
    <div class="aw-journey__head">
      <p class="aw-kicker aw-kicker--dark" data-reveal><span>07</span>The long view</p>
      <h2 class="aw-h2" id="journey-title" data-reveal style="--d:.08s">A website that grows <em>with your writing.</em></h2>
    </div>
    <ol class="aw-path" role="list">
      <li data-reveal><b>Author</b><span>Planning &amp; concept: your vision, genre and branding.</span></li>
      <li data-reveal style="--d:.05s"><b>Story</b><span>The voice and personality the site should carry.</span></li>
      <li data-reveal style="--d:.1s"><b>Book</b><span>Your titles, presented with care.</span></li>
      <li data-reveal style="--d:.15s"><b>Website</b><span>Designed, developed, tested and launched.</span></li>
      <li data-reveal style="--d:.2s"><b>Readers</b><span>Found through search, kept through connection.</span></li>
      <li data-reveal style="--d:.25s"><b>Long term platform</b><span>Updated by you, supported by us.</span></li>
    </ol>
  </div>
</section>

<section class="section section--ivory faq" id="faq" aria-labelledby="faq-title">
  <div class="container faq__grid">
    <div class="faq__head">
      <p class="aw-kicker" data-reveal><span>08</span>FAQ</p>
      <h2 class="h2" id="faq-title" data-reveal style="--d:.08s">Questions about <em>your author website.</em></h2>
    </div>
    <div class="faq__list" data-faq>
      <details class="qa" data-reveal open>
        <summary><span>Why do authors need a professional website?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>It gives readers one dependable place to explore your books, learn about you and find your official links.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>What features should an author’s website include?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Most authors need book pages, a biography and contact information. A journal, newsletter or store can be added where it serves your plans.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>Can I update my website content myself?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Yes, if content management is included in the build. We discuss what you want to update and explain how to make those changes.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>Will readers be able to use it on a phone?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Yes. We plan and check layouts for mobile, tablet and desktop screens.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>How does SEO help my author website?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Clear page titles, descriptions and organised content help search engines understand the site. Search positions and visitor numbers still depend on several factors.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>Can I sell books through my website?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>We can discuss a store, payment provider and delivery process if you want direct sales. These features are scoped before the build.</p></div>
      </details>
      <details class="qa" data-reveal>
        <summary><span>How do I get started with my author website?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Share your books, preferred style and the features you need. We will help you turn those requirements into a website brief.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="cta on-dark aw-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1499750310107-5fef28a66643-1600.webp" alt="" loading="lazy" decoding="async" data-parallax="0.08">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal>Build your author website</p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s">Let’s plan <em>your author website.</em></h2>
      <p class="lead" data-reveal style="--d:.16s">Show us your books and tell us what you want readers to find when they visit.</p>
      <div class="aw-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Build My Author Website <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us</a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Start your author website', 'rows' => 4, 'messageLabel' => 'What are you writing, and where do you need help?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
