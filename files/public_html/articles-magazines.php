<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'articles-magazines.php';
$pageScripts = ['assets/js/service-page2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['services'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Article and Magazine Writing for Authors | <?= site_text('project_name') ?></title>
  <meta name="description" content="Describe your books beyond the book with articles, author profiles and magazine features written, edited and prepared for your intended readership.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Article and Magazine Writing for Authors | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Describe your books beyond the book with articles, author profiles and magazine features written, edited and prepared for your intended readership.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-ns ns-articles-magazines ns-field--ivory">

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
  <div class="container"><nav class="ns-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li><a href="./#services">Services</a></li><li aria-current="page">Articles &amp; Magazines</li></ol></nav>
    <div class="ns-hero__grid"><div class="ns-hero__copy"><p class="ns-eyebrow"><span></span>Writing &amp; Editorial</p><h1 class="ns-title" id="ns-title">Give your ideas <em>another place to be read.</em></h1><p class="ns-lead">Articles and magazine features can introduce your knowledge and your book to a different readership. We help with the angle, writing, editing and preparation.</p><div class="ns-hero__btns"><button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button></div><ul class="ns-chips" role="list"><li>Feature articles</li><li>Author profiles</li><li>Opinion pieces</li><li>Magazine layouts</li></ul></div>
      <figure class="ns-hero__fig"><img src="assets/images/photos/1579366877909-40560cf603e2-2000.webp" alt="An open magazine spread with photographs and printed articles" decoding="async" fetchpriority="high" onerror="this.onerror=null;this.style.visibility='hidden'"><figcaption><span>Articles &amp; Magazines</span><?= site_text('project_name') ?></figcaption></figure></div>
  </div>
</section>
<section class="ns-intro" aria-label="Introduction">
  <div class="container ns-intro__grid">
    <p class="ns-intro__state ns-rv">A useful article gives readers something they can take away.</p>
    <div class="ns-intro__side ns-rv"><p>We work from your subject and experience to develop pieces that suit a particular publication. The focus stays on a clear idea and the people who will read it.</p><p class="ns-intro__part">Part of <a href="./#services">Writing &amp; Editorial</a></p></div>
  </div>
</section>
<section class="ns-sig ns-mag" aria-labelledby="sig-title">
  <div class="container ns-mag__grid">
    <div class="ns-sig__head"><p class="ns-label ns-rv">The spread</p><h2 class="ns-h2 ns-rv" id="sig-title">Articles written <em>for their readers.</em></h2>
      <ul class="ns-mag__formats ns-rv" role="list"><li>Feature article</li><li>Author profile</li><li>Opinion piece</li><li>Q&amp;A interview</li><li>Book excerpt</li><li>Newsletter &amp; long form</li></ul></div>
    <figure class="ns-mag__spread ns-rv" aria-label="Example layout of a magazine feature spread">
      <div class="ns-mag__page"><span class="ns-mag__kick">Feature</span><span class="ns-mag__hl">The idea behind <em>the book.</em></span><span class="ns-mag__by">By the author</span>
        <span class="ns-mag__text"><b>A</b><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="ns-mag__pq">“The sentence readers remember.”</span><span class="ns-mag__text"><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="ns-mag__folio">24</span></div>
      <div class="ns-mag__page ns-mag__page--img"><img src="assets/images/photos/1684323748175-5735beec2308-1400x1000.webp" alt="Magazines displayed on a news stand shelf" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"><span class="ns-mag__folio">25</span></div>
      <figcaption>Example layout: a two page feature spread</figcaption>
    </figure>
  </div>
</section>
<section class="ns-inc" aria-labelledby="inc-title">
  <div class="container ns-inc__grid">
    <div class="ns-inc__head"><p class="ns-label ns-rv">What we handle</p><h2 class="ns-h2 ns-rv" id="inc-title">What we can help with.</h2>
      <figure class="ns-inc__fig ns-rv"><img src="assets/images/photos/1579366877909-40560cf603e2-900x1100.webp" alt="" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.visibility='hidden'"></figure></div>
    <ol class="ns-inc__list ns-rv" role="list"><li><span class="ns-inc__n">01</span><h3 class="ns-inc__t">Story &amp; angle</h3><p class="ns-inc__d">Find an angle that connects your book or expertise with the publication’s audience.</p></li><li><span class="ns-inc__n">02</span><h3 class="ns-inc__t">Research &amp; interviews</h3><p class="ns-inc__d">Gather supporting details and interview material for a credible, useful piece.</p></li><li><span class="ns-inc__n">03</span><h3 class="ns-inc__t">Writing in your voice</h3><p class="ns-inc__d">Develop copy that uses your knowledge and sounds natural in your voice.</p></li><li><span class="ns-inc__n">04</span><h3 class="ns-inc__t">Editing &amp; proofreading</h3><p class="ns-inc__d">Check the structure, language and details before submission.</p></li><li><span class="ns-inc__n">05</span><h3 class="ns-inc__t">Magazine ready layout</h3><p class="ns-inc__d">Prepare a readable layout when the project calls for a designed spread.</p></li><li><span class="ns-inc__n">06</span><h3 class="ns-inc__t">Print &amp; digital formats</h3><p class="ns-inc__d">Adapt the agreed piece for its print or digital destination.</p></li></ol>
  </div>
</section>
<section class="ns-steps" aria-labelledby="steps-title">
  <div class="container">
    <p class="ns-label ns-rv" id="steps-title">The steps we work through</p>
    <ol class="ns-steps__list ns-rv" role="list"><li><span>01</span><b>Brief</b><p>Discuss the subject, publication and readers you have in mind.</p></li><li><span>02</span><b>Angle &amp; outline</b><p>Agree on the angle and outline before drafting.</p></li><li><span>03</span><b>Draft &amp; revise</b><p>Review the draft and work through your feedback.</p></li><li><span>04</span><b>Ready to publish</b><p>Prepare the final copy and any agreed layout files.</p></li></ol>
  </div>
</section>
<section class="ns-rel" aria-labelledby="rel-title">
  <div class="container ns-rel__grid">
    <div><p class="ns-label">Also in Writing &amp; Editorial</p><h2 class="ns-rel__title" id="rel-title">Other ways we can support your book.</h2>
      <a class="ns-link" href="./#services">All services <svg aria-hidden="true"><use href="#i-arrow"/></svg></a></div>
    <ul class="ns-rel__list" role="list"><li><a href="ghostwriting"><span class="ns-rel__t">Ghostwriting</span><span class="ns-rel__d">Work with a writer to give your ideas structure and develop the chapter drafts.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li><li><a href="book-editing"><span class="ns-rel__t">Book Editing &amp; Formatting</span><span class="ns-rel__d">Review the draft, work through revisions and prepare the text for your chosen edition.</span><svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a></li></ul>
  </div>
</section>
<?php render_component('sections/service-cta', ['image' => 'assets/images/photos/1684323748175-5735beec2308-1600.webp', 'eyebrowHtml' => 'Articles &amp; Magazines', 'titleHtml' => 'What would you like <em>to write about?</em>']); ?>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
