<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'ghostwriting.php';
$pageScripts = ['assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/ghostwriting2f72.css?v=20261003'];
$pageThemeColor = '#0D0D0F';
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Book Ghostwriting in Your Voice | <?= site_text('project_name') ?></title>
  <meta name="description" content="Turn your ideas, experiences or expertise into a manuscript with a ghostwriter. Work with us on the outline, chapter drafts and revisions.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Book Ghostwriting in Your Voice | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Turn your ideas, experiences or expertise into a manuscript with a ghostwriter. Work with us on the outline, chapter drafts and revisions.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

  <link rel="preload" as="image" type="image/webp" href="assets/images/photos/1455390582262-044cdead277a-2400.webp" fetchpriority="high">
  
</head>
<body class="page-ghost">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#voice', 'section' => 'voice', 'label' => 'Your voice', 'icon' => '#i-pen', 'text' => 'Voice'],
    ['href' => '#process', 'section' => 'process', 'label' => 'Journey', 'icon' => '#i-steps', 'text' => 'Journey'],
    ['href' => '#manuscript', 'section' => 'manuscript', 'label' => 'Manuscript', 'icon' => '#i-book', 'text' => 'Manuscript'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="gw-hero on-dark" id="top" aria-labelledby="gw-title">
  <div class="gw-hero__media" aria-hidden="true"><div class="gw-hero__img" data-parallax="0.04"></div></div>
  <div class="container gw-hero__inner">
    <nav class="gw-crumbs" aria-label="Breadcrumb">
      <ol role="list">
        <li><a href="./">Home</a></li>
        <li><a href="./#services">Services</a></li>
        <li aria-current="page">Ghostwriting</li>
      </ol>
    </nav>
    <p class="gw-eyebrow">Ghostwriting</p>
    <h1 class="gw-hero__title" id="gw-title"><span>Your ideas.</span> <span>Your name.</span> <em>A book we write with you.</em></h1>
    <div class="gw-hero__foot">
      <p class="gw-hero__lead">You bring the experiences, knowledge or story. We help organise the material and write a manuscript that keeps your voice at its heart.</p>
      <div class="gw-hero__ctas">
        <button class="btn btn--light" type="button" data-open-lead>Discuss Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
      </div>
    </div>
  </div>
</section>

<section class="gw-idea" id="approach" aria-labelledby="idea-title">
  <figure class="gw-idea__photo">
    <img src="assets/images/photos/1501618669935-18b6ecb13d6d-1400x1700.webp" alt="An open notebook with blank pages and a pen, ready for the first line" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async">
    <figcaption>Page one, before the first line.</figcaption>
  </figure>
  <div class="gw-idea__copy">
    <p class="gw-kicker"><b>I</b>Every book starts somewhere</p>
    <h2 class="gw-h2" id="idea-title">A book can begin <em>with a conversation.</em></h2>
    <p class="gw-body gw-body--drop">You may have a folder of notes, a few chapters or a memory you keep returning to. We start with that material and help you work out what the book could become.</p>
    <p class="gw-idea__label">It might begin with</p>
    <ul class="gw-idea__list" role="list"><li>a life story</li><li>an experience</li><li>an idea</li><li>professional expertise</li><li>personal memories</li><li>a fictional concept</li><li>a message you want to share</li></ul>
  </div>
</section>

<section class="gw-sec gw-voice" id="voice" aria-labelledby="voice-title">
  <div class="container">
    <div class="gw-voice__head">
      <p class="gw-kicker gw-kicker--c"><b>II</b>Your voice matters</p>
      <h2 class="gw-h2 gw-h2--c" id="voice-title">Writing that feels <em>like it came from you.</em></h2>
      <p class="gw-body gw-body--c">We listen to how you explain things, read any samples you share and discuss the tone you want. Early pages give you a chance to tell us what feels right before the draft grows.</p>
    </div>
    <div class="gw-voice__grid">
      <figure class="gw-page" aria-label="An illustrative manuscript page with a writer’s margin notes">
        <div class="gw-page__sheet">
          <p class="gw-page__run"><span>Chapter Three</span><span>Draft 2 · p. 41</span></p>
          <p class="gw-page__text"><span class="gw-mark gw-mark--a">My father kept his tools in the order he used them.</span> Hammer, then level, then the small brass square he never lent to anyone. I didn’t understand, back then, that he was teaching me how to begin. <span class="gw-mark gw-mark--b">You start with what you know. You keep what matters close.</span> And you <span class="gw-mark gw-mark--c">measure twice</span>, because some things you only get to build once.</p>
          <p class="gw-page__text">It took me thirty years and a workshop of my own to hear it properly. <span class="gw-mark gw-mark--d">Some lessons are only loud in hindsight.</span></p>
          <span class="gw-note gw-note--a" aria-hidden="true">his rhythm: short, then long</span>
          <span class="gw-note gw-note--b" aria-hidden="true">tone: warm and direct</span>
          <span class="gw-note gw-note--c" aria-hidden="true">keep: his phrase ✓</span>
          <span class="gw-note gw-note--d" aria-hidden="true">a memory, not a lecture</span>
        </div>
        <figcaption>Illustrative page: how an author’s phrasing and rhythm are kept through the draft.</figcaption>
      </figure>
      <div class="gw-voice__list">
        <p class="gw-voice__label">What we listen for</p>
        <ol role="list">
          <li><b>Personality</b><span>The way you see things, and what you notice first.</span></li>
          <li><b>Tone</b><span>Warm, dry, direct, reflective, whatever is true to you.</span></li>
          <li><b>Perspective</b><span>Where you stand in the story, and why.</span></li>
          <li><b>Experiences</b><span>The details only you could know.</span></li>
          <li><b>Rhythm</b><span>How your sentences move: short, long, paused.</span></li>
          <li><b>Message</b><span>What you want a reader to carry away.</span></li>
          <li><b>Emotional character</b><span>The feeling underneath the words.</span></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="gw-sec gw-journey" id="process" aria-labelledby="journey-title">
  <div class="gw-bg" data-photo="1760307837453-ce60cb209e52-2000" style="--o:.2;--b:5px" aria-hidden="true"></div>
  <div class="container gw-journey__grid">
    <div class="gw-journey__head">
      <p class="gw-kicker"><b>III</b>The writing journey</p>
      <h2 class="gw-h2" id="journey-title">A working plan, <em>from outline to draft.</em></h2>
    </div>
    <ol class="gw-steps" role="list">
        <li class="gw-step"><span class="gw-step__n">I.</span><div class="gw-step__body"><h3>Discover</h3><p>We discuss the subject, intended readers and material you already have.</p></div><span class="gw-step__out">Conversations</span></li>
        <li class="gw-step"><span class="gw-step__n">II.</span><div class="gw-step__body"><h3>Develop</h3><p>We agree on an outline and the approach to the writing.</p></div><span class="gw-step__out">An outline</span></li>
        <li class="gw-step"><span class="gw-step__n">III.</span><div class="gw-step__body"><h3>Write</h3><p>We draft chapters around the outline and share work for your review.</p></div><span class="gw-step__out">Chapters</span></li>
        <li class="gw-step"><span class="gw-step__n">IV.</span><div class="gw-step__body"><h3>Refine</h3><p>We use your feedback to improve the content, voice and connections between chapters.</p></div><span class="gw-step__out">Revisions</span></li>
        <li class="gw-step"><span class="gw-step__n">V.</span><div class="gw-step__body"><h3>Complete</h3><p>We bring the chapters together into a complete manuscript for the agreed next stage.</p></div><span class="gw-step__out">A manuscript</span></li>
    </ol>
  </div>
</section>

<section class="gw-sec gw-forms" id="forms" aria-labelledby="forms-title">
  <div class="container gw-forms__grid">
    <div class="gw-forms__aside">
      <p class="gw-kicker"><b>IV</b>Your story can take many forms</p>
      <h2 class="gw-h2" id="forms-title">Different books. <em>The same care with your voice.</em></h2>
      <figure class="gw-forms__photo">
        <img src="assets/images/photos/1535546204504-586398ee6677-1000x760.webp" alt="A vintage typewriter on a desk beside a single sunflower" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async">
      </figure>
    </div>
    <ol class="gw-forms__list" role="list">
        <li><span class="gw-forms__n">01</span><h3>Memoir</h3><p>Memories and turning points shaped around the part of your life you want to explore.</p></li>
        <li><span class="gw-forms__n">02</span><h3>Autobiography</h3><p>Your life story organised into a clear and readable account.</p></li>
        <li><span class="gw-forms__n">03</span><h3>Business &amp; Expertise</h3><p>Your practical knowledge and professional experience explained for your readers.</p></li>
        <li><span class="gw-forms__n">04</span><h3>Self Help</h3><p>Lessons and ideas developed into guidance readers can follow.</p></li>
        <li><span class="gw-forms__n">05</span><h3>Fiction</h3><p>Characters, plot and setting connected across a full story.</p></li>
        <li><span class="gw-forms__n">06</span><h3>Personal Story</h3><p>An important experience recorded in the words and tone it deserves.</p></li>
    </ol>
  </div>
</section>

<section class="gw-room on-dark" id="room" aria-labelledby="room-title">
  <div class="gw-room__photo" aria-hidden="true"><img src="assets/images/photos/1762417691650-f2e4bcca7eaf-2200x1300.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async" data-parallax="0.05"></div>
  <div class="container gw-room__inner">
    <p class="gw-kicker gw-kicker--light"><b>V</b>The writing room</p>
    <h2 class="gw-h2 gw-h2--light" id="room-title">Time and attention <em>for the writing.</em></h2>
    <p class="gw-body gw-body--light">A draft develops through interviews, notes, research and revision. We keep those parts organised so you can focus on the material only you can provide.</p>
    <ul class="gw-room__words" role="list"><li>Conversations</li><li>Research</li><li>Writing</li><li>Revision</li><li>Voice</li></ul>
  </div>
</section>

<section class="gw-sec gw-collab" id="collaboration" aria-labelledby="collab-title">
  <div class="container">
    <div class="gw-collab__head">
      <p class="gw-kicker gw-kicker--c"><b>VI</b>Collaboration</p>
      <h2 class="gw-h2 gw-h2--c" id="collab-title">Bring your story. <em>We will help with the words.</em></h2>
      <p class="gw-body gw-body--c">You remain involved in the decisions and reviews. We bring structure, writing time and an outside eye to help the manuscript progress.</p>
    </div>
    <div class="gw-exchange">
      <div class="gw-exchange__side gw-exchange__side--you">
        <p class="gw-exchange__label">You bring</p>
        <ul role="list"><li>Your experience</li><li>Your ideas</li><li>Your memories</li><li>Your knowledge</li><li>Your voice</li></ul>
      </div>
      <div class="gw-exchange__spine" aria-hidden="true"><span>&amp;</span></div>
      <div class="gw-exchange__side gw-exchange__side--we">
        <p class="gw-exchange__label">We bring</p>
        <ul role="list"><li>Structure</li><li>Writing</li><li>Editorial direction</li><li>Research</li><li>Revision</li><li>Manuscript development</li></ul>
      </div>
    </div>
  </div>
</section>

<section class="gw-sec gw-final" id="manuscript" aria-labelledby="final-title">
  <div class="container">
    <div class="gw-final__head">
      <p class="gw-kicker"><b>VII</b>The finished manuscript</p>
      <h2 class="gw-h2" id="final-title">Give your material <em>a complete shape.</em></h2>
      <p class="gw-body">The goal is a connected manuscript that reflects your ideas and can move on to editing, design and publication.</p>
    </div>
    <div class="gw-prog">
      <figure class="gw-prog__item gw-prog__item--1"><div class="gw-prog__img"><img src="assets/images/photos/1556970181-98e37c414e87-900x1100.webp" alt="A handwritten note on a desk under lamplight" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div><figcaption><span>01</span>Idea</figcaption></figure>
      <figure class="gw-prog__item gw-prog__item--2"><div class="gw-prog__img"><img src="assets/images/photos/1526656001029-20a71b17f7ba-900x1100.webp" alt="Bundles of notes and papers tied with string" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div><figcaption><span>02</span>Notes</figcaption></figure>
      <figure class="gw-prog__item gw-prog__item--3"><div class="gw-prog__img"><img src="assets/images/photos/1570626742839-59acd9822944-900x1100.webp" alt="A page in a typewriter, mid chapter" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div><figcaption><span>03</span>Chapters</figcaption></figure>
      <figure class="gw-prog__item gw-prog__item--4"><div class="gw-prog__img"><img src="assets/images/photos/1642655358689-56b944d6f5f6-900x1100.webp" alt="A tall stack of finished manuscript pages by a window" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async"></div><figcaption><span>04</span>Manuscript</figcaption></figure>
    </div>
  </div>
</section>

<section class="section section--ivory faq gw-faq" id="faq" aria-labelledby="faq-title">
  <div class="container faq__grid">
    <div class="faq__head">
      <p class="gw-kicker"><b>VIII</b>FAQ</p>
      <h2 class="h2" id="faq-title">Questions about <em>working with a ghostwriter.</em></h2>
    </div>
    <div class="faq__list" data-faq>
      <details class="qa" open>
        <summary><span>What is ghostwriting and how does it work?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>A ghostwriter writes on your behalf using your ideas and source material. You discuss the direction, review the draft and publish the finished work under your name.</p></div>
      </details>
      <details class="qa">
        <summary><span>How will we work together?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>We begin with conversations and an outline, then share draft material for feedback. The project scope sets out how interviews, chapter reviews and revisions will work.</p></div>
      </details>
      <details class="qa">
        <summary><span>Will I retain full rights to my book?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>The original terms give you ownership of the completed book and author credit, with no royalties or acknowledgement due to the ghostwriter. Your agreement records those terms for the project.</p></div>
      </details>
      <details class="qa">
        <summary><span>How long does the ghostwriting process take?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Timing depends on the length, research and material available. We agree on milestones after understanding the book and the time you can give to reviews.</p></div>
      </details>
      <details class="qa">
        <summary><span>Can a ghostwriter match my writing style?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>We use conversations, writing samples and your feedback on early pages to establish a voice that feels familiar to you.</p></div>
      </details>
      <details class="qa">
        <summary><span>How do I get started with your ghostwriting services?</span><i aria-hidden="true"></i></summary>
        <div class="qa__a"><p>Tell us about the book, the material you have and who you want to read it. We can then discuss a scope and quote.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="cta on-dark gw-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1705602791162-e808808176ec-1800.webp" alt="" onerror="this.onerror=null;this.style.visibility='hidden'" loading="lazy" decoding="async" data-parallax="0.06">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow">Your story is ready</p>
      <h2 class="display cta__title gw-cta__title" id="cta-title">Let’s make time <em>for your book.</em></h2>
      <p class="lead">A few notes are enough to start a conversation. Share what you have and we will help you consider the next step.</p>
      <div class="gw-cta__btns">
        <button class="btn btn--light" type="button" data-open-lead>Discuss Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us</a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Start your story', 'rows' => 4, 'messageLabel' => 'What are you writing, and where do you need help?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
