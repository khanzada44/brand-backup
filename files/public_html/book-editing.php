<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'book-editing.php';
$pageScripts = ['assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/service2f72.css?v=20261003'];
$pageOgType = 'article';
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Manuscript Editing and Proofreading Services | <?= site_text('project_name') ?></title>
  <meta name="description" content="Get a thoughtful review of your manuscript with developmental editing, copy editing, sentence revisions and proofreading suited to your draft.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Manuscript Editing and Proofreading Services | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Get a thoughtful review of your manuscript with developmental editing, copy editing, sentence revisions and proofreading suited to your draft.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1580127645995-d43fe9598711-2000.webp" fetchpriority="high">
  
</head>
<body>

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#editing-services', 'section' => 'editing-services', 'label' => 'Editing services', 'icon' => '#i-pen', 'text' => 'Editing'],
    ['href' => '#process', 'section' => 'process', 'label' => 'Process', 'icon' => '#i-steps', 'text' => 'Process'],
    ['href' => '#faq', 'section' => 'faq', 'label' => 'FAQ', 'icon' => '#i-quote', 'text' => 'FAQ'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="sv-hero" id="top" aria-labelledby="sv-title">
  <div class="sv-hero__ambient" aria-hidden="true"><div class="sv-hero__img" data-parallax="0.06"></div><div class="sv-hero__veil"></div></div>
  <div class="container">
    <nav class="crumbs" aria-label="Breadcrumb">
      <ol role="list">
        <li><a href="./">Home</a></li>
        <li><a href="./#services">Services</a></li>
        <li aria-current="page">Book Editing</li>
      </ol>
    </nav>
    <div class="sv-hero__shell">
      <div class="sv-hero__copy">
        <p class="eyebrow" data-reveal>Book Editing</p>
        <h1 class="sv-hero__title" id="sv-title" data-reveal style="--d:.08s">Keep your voice. <em>Strengthen your draft.</em></h1>
        <p class="lead" data-reveal style="--d:.16s">A fresh editorial eye can help you see what is working, what needs attention and how to make your manuscript easier to read.</p>
        <div class="sv-hero__ctas" data-reveal style="--d:.22s">
          <button class="btn btn--primary" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        </div>
        <ul class="sv-hero__kinds" role="list" data-reveal style="--d:.28s">
          <li>Developmental</li><li>Copy editing</li><li>Proofreading</li><li>Revision</li>
        </ul>
      </div>
      <div class="sv-hero__stage on-dark" data-reveal="scale" style="--d:.12s">
        <div class="sv-hero__stage-bg" aria-hidden="true"><img src="assets/images/photos/1601675336070-7393219f765e-1200.webp" width="1200" height="800" alt="" decoding="async"></div>
        <div class="book3d sv-hero__book" aria-hidden="true">
          <div class="book3d__body"><div class="book3d__back"></div><img class="book3d__cover" src="assets/images/books/cover-05.webp" width="440" height="660" alt=""></div>
          <div class="book3d__shadow"></div>
        </div>
        <p class="sv-hero__caption"><span class="label">Published with <?= site_text('short_name') ?></span><span>The Naked Truth of AI 2.0 by Douglas Hawes</span></p>
        <span class="sv-hero__num" aria-hidden="true">02</span>
      </div>
    </div>
  </div>
</section>

<section class="section section--ivory sv-intro" id="overview" aria-labelledby="intro-title">
  <div class="container sv-intro__grid">
    <div class="sv-intro__statement">
      <span class="ghost-num" aria-hidden="true">01</span><p class="eyebrow" data-reveal>Your story, refined</p>
      <h2 class="h2" id="intro-title" data-reveal style="--d:.08s">Give your draft <em>a thoughtful second look.</em></h2>
    </div>
    <div class="sv-intro__body" data-reveal style="--d:.14s">
      <p class="sv-intro__lede">A draft can hold a good story and still need work. We look at how its chapters fit together, where the pace slows and which passages could say more with fewer words.</p>
      <p>Whether you plan to publish independently or approach a publisher, we help you decide what level of editing your manuscript needs.</p>
      <dl class="sv-intro__facts">
        <div><dt class="label">For authors who are</dt><dd>Self publishing <span>·</span> Submitting to traditional publishers</dd></div>
        <div><dt class="label">Genres we work in</dt><dd>Fiction, nonfiction, biographies, self help, romance, fantasy, business books and more</dd></div>
      </dl>
    </div>
  </div>
</section>

<section class="section section--ivory sv-kinds" id="editing-services" aria-labelledby="kinds-title">
  <div class="ed-bg ed-bg--svc" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.05"></div></div>
  <div class="container">
    <div class="sv-head">
      <div>
        <span class="ghost-num" aria-hidden="true">02</span><p class="eyebrow" data-reveal>What book editing includes</p>
        <h2 class="h2" id="kinds-title" data-reveal style="--d:.08s">Choose the editing <em>your manuscript needs.</em></h2>
      </div>
    </div>

    <div class="sv-kinds__grid">
      <article class="sv-feature" data-reveal>
        <div class="sv-feature__top"><span class="cat__n">01</span><span class="label">Structure &amp; story</span></div>
        <h3 class="sv-feature__title">Developmental Editing</h3>
        <p class="sv-feature__lede">We look at the book as a whole, including its structure, argument or story, and how each chapter supports it.</p>
        <p>For fiction, we review plot, characters, dialogue and pacing. For nonfiction, we consider organisation, explanations and the reader’s questions. You receive practical notes to guide the next draft.</p>
        <ul class="sv-feature__tags" role="list"><li>Plot</li><li>Character arcs</li><li>Pacing</li><li>Transitions</li><li>Dialogue</li><li>Themes</li></ul>
      </article>

      <ol class="sv-rows" role="list" start="2">
        <li class="sv-row" data-reveal style="--d:.06s">
          <span class="cat__n">02</span>
          <div><h3 class="sv-row__title">Copy Editing</h3><p>We check grammar, spelling, punctuation and usage, while keeping names, dates, terminology and style consistent throughout the book.</p></div>
        </li>
        <li class="sv-row" data-reveal style="--d:.12s">
          <span class="cat__n">03</span>
          <div><h3 class="sv-row__title">Proofreading</h3><p>Once the text and layout are settled, we check for remaining typos, punctuation problems and small inconsistencies before publication.</p></div>
        </li>
        <li class="sv-row" data-reveal style="--d:.18s">
          <span class="cat__n">04</span>
          <div><h3 class="sv-row__title">Comprehensive Revision</h3><p>We work at sentence level to improve rhythm, word choice and clarity. Repeated ideas, awkward transitions and passages that lose their focus get particular attention.</p></div>
        </li>
      </ol>
    </div>
  </div>
</section>

<section class="section section--dark sv-desk" id="on-the-page" aria-labelledby="desk-title">
  <div class="sv-desk__bg" aria-hidden="true"><div class="sv-desk__img" data-parallax="0.04"></div></div>
  <div class="container sv-desk__grid">
    <div class="sv-desk__copy">
      <span class="ghost-num" aria-hidden="true">03</span><p class="eyebrow" data-reveal>On the page</p>
      <h2 class="h2" id="desk-title" data-reveal style="--d:.08s">Changes that <em>serve the writing.</em></h2>
      <p class="lead" data-reveal style="--d:.14s">Some edits fix a small mistake. Others help a paragraph land or give a chapter a clearer direction. Each change should make the reader’s job easier.</p>
      <ul class="sv-legend" role="list" data-reveal style="--d:.2s">
        <li><span class="sv-legend__mark sv-legend__mark--note">¶</span><span><b>Margin notes</b>Structure, pacing and clarity: the developmental conversation.</span></li>
        <li><span class="sv-legend__mark sv-legend__mark--del">word</span><span><b>Deletions</b>Repeated ideas reviewed so each paragraph has a clear purpose.</span></li>
        <li><span class="sv-legend__mark sv-legend__mark--ins">^</span><span><b>Insertions</b>Word choice, punctuation and consistency, refined.</span></li>
      </ul>
    </div>

    <figure class="sheet-wrap" data-reveal="scale" style="--d:.1s">
      <div class="sheet" aria-label="Example of editorial markup on a manuscript page">
        <div class="sheet__head"><span>Chapter Three</span><span>47</span></div>
        <p class="sheet__p">Line editing focuses <del>in on</del> on the finer details of your writing<del>, and</del><ins>,</ins> enhancing clarity, flow<ins>,</ins> and readability. Our editors refine sentence structure, word choice<ins>,</ins> and tone to ensure consistency <del>and also</del><ins>and</ins> engagement.<span class="sheet__note sheet__note--a" aria-hidden="true">tighten: repeated idea</span></p>
        <p class="sheet__p">We eliminate redundancies, <mark>clarify complex ideas</mark>, and create a smooth reading experience<del>&nbsp;for the reader</del>.<span class="sheet__note sheet__note--b" aria-hidden="true">keep: strong</span></p>
        <p class="sheet__p sheet__p--muted">A careful line edit helps the prose read smoothly while keeping the author’s voice.</p>
        <span class="sheet__pen" aria-hidden="true"></span>
      </div>
      <figcaption>Illustrative editorial markup on a sample passage.</figcaption>
    </figure>
  </div>
</section>

<section class="section section--ivory sv-why" id="why-editing" aria-labelledby="why-title">
  <div class="container">
    <div class="sv-why__head">
      <span class="ghost-num" aria-hidden="true">04</span><p class="eyebrow" data-reveal>Why editing matters</p>
      <h2 class="h2" id="why-title" data-reveal style="--d:.08s">Good editing helps <em>the whole book work.</em></h2>
    </div>
    <dl class="sv-why__list">
      <div data-reveal><dt>Clarity</dt><dd>Difficult passages explained more clearly, with smoother links between ideas.</dd></div>
      <div data-reveal style="--d:.05s"><dt>Consistency</dt><dd>A consistent tone, style and format throughout the manuscript.</dd></div>
      <div data-reveal style="--d:.1s"><dt>Structure</dt><dd>A connected story with believable character development and a pace that suits the scenes.</dd></div>
      <div data-reveal style="--d:.15s"><dt>Readability</dt><dd>Sentences revised for clearer meaning and a more natural rhythm.</dd></div>
      <div data-reveal style="--d:.2s"><dt>Tone</dt><dd>Editorial choices that respect your genre and the way you write.</dd></div>
      <div data-reveal style="--d:.25s"><dt>Professionalism</dt><dd>An error free, publication ready book that leaves a lasting impression on readers.</dd></div>
    </dl>
  </div>
</section>

<section class="section section--paper sv-process" id="process" aria-labelledby="proc-title">
  <div class="ed-bg ed-bg--rev" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.04"></div></div>
  <div class="container sv-process__grid">
    <div class="sv-process__head">
      <span class="ghost-num" aria-hidden="true">05</span><p class="eyebrow" data-reveal>Our editing process</p>
      <h2 class="h2" id="proc-title" data-reveal style="--d:.08s">A clear route <em>through the edits.</em></h2>
      <p class="lead" data-reveal style="--d:.14s">We agree on the scope, review the manuscript and work through the changes with you before preparing the final version.</p>
    </div>
    <ol class="sv-steps" role="list">
      <li class="sv-step" data-reveal><span class="sv-step__n">01</span><div><p class="label">Strengthening the foundation</p><h3>Review</h3><p>We read the manuscript and identify its strengths, recurring issues and the changes that would make the greatest difference.</p></div></li>
      <li class="sv-step" data-reveal><span class="sv-step__n">02</span><div><p class="label">Refining style &amp; readability</p><h3>Edit</h3><p>We work through the prose, improving unclear passages and transitions without making every sentence sound the same.</p></div></li>
      <li class="sv-step" data-reveal><span class="sv-step__n">03</span><div><p class="label">Perfecting grammar &amp; consistency</p><h3>Refine</h3><p>We check language and style across the manuscript so details stay consistent from the opening chapter to the last.</p></div></li>
      <li class="sv-step" data-reveal><span class="sv-step__n">04</span><div><p class="label">The final touch</p><h3>Proofread</h3><p>A final review catches remaining text and layout issues before the files move on.</p></div></li>
      <li class="sv-step sv-step--end" data-reveal><span class="sv-step__n">05</span><div><p class="label">The result</p><h3>Final Manuscript</h3><p>A revised manuscript with the agreed editorial work completed.</p></div></li>
    </ol>
  </div>
</section>

<section class="section section--ivory sv-receive" id="receive" aria-labelledby="receive-title">
  <div class="container">
    <div class="sv-receive__panel" data-reveal="scale">
      <div class="sv-receive__intro">
        <span class="ghost-num" aria-hidden="true">06</span><p class="eyebrow">What you receive</p>
        <h2 class="h3" id="receive-title">Know what <em>your edit includes.</em></h2>
        <div class="sv-receive__books" aria-hidden="true">
          <img src="assets/images/books/cover-25.webp" width="440" height="660" alt="" loading="lazy">
          <img src="assets/images/books/cover-27.webp" width="440" height="660" alt="" loading="lazy">
          <img src="assets/images/books/cover-12.webp" width="440" height="660" alt="" loading="lazy">
        </div>
        <p class="sv-receive__books-cap label">Published with <?= site_text('project_name') ?></p>
      </div>
      <ul class="sv-receive__list" role="list">
        <li><span class="cat__n">i.</span><h3>Personalized feedback</h3><p>Notes that explain the main editorial decisions and give you useful direction for revisions.</p></li>
        <li><span class="cat__n">ii.</span><h3>Consistency checks</h3><p>A review of recurring details, language choices and formatting conventions.</p></li>
        <li><span class="cat__n">iii.</span><h3>Clarity enhancement</h3><p>Clearer sentences and smoother transitions between ideas and scenes.</p></li>
        <li><span class="cat__n">iv.</span><h3>Final polishing</h3><p>A final pass for the small mistakes that can distract a reader.</p></li>
      </ul>
    </div>
  </div>
</section>

<section class="section section--ivory faq" id="faq" aria-labelledby="faq-title">
  <div class="ed-bg ed-bg--faq" aria-hidden="true"><div class="ed-bg__img" data-parallax="0.04"></div></div>
  <div class="container faq__grid">
    <div class="faq__head">
      <span class="ghost-num" aria-hidden="true">07</span><p class="eyebrow" data-reveal>FAQ</p>
      <h2 class="h2" id="faq-title" data-reveal style="--d:.08s">Questions about <em>editing your book.</em></h2>
    </div>
    <?php render_component('sections/publishing-faq'); ?>
  </div>
</section>

<section class="cta on-dark" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1580127645995-d43fe9598711-1600.webp" alt="" loading="lazy" decoding="async" data-parallax="0.12">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal>Have a draft ready?</p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s">Let’s see what <em>your manuscript needs.</em></h2>
      <p class="lead" data-reveal style="--d:.16s">Tell us the genre, approximate word count and where you feel stuck. We will help you choose an appropriate editorial starting point.</p>
      <div class="sv-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Start Your Editing Project <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="#editing-form">Contact <?= site_text('project_name') ?></a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Start your editing project', 'rows' => 4, 'messageLabel' => 'What would you like help with?', 'id' => 'editing-form']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
