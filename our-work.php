<?php
require_once __DIR__ . '/components/render.php';
$currentPage = 'our-work.php';
$pageScripts = ['assets/js/real-work2f72.js?v=20261003', 'assets/js/main2f72.js?v=20261105-production'];
$pageStyles = ['assets/css/work2f72.css?v=20261003'];
?>
<!doctype html>
<html lang="en-US" class="no-js">

<head>
<?php require __DIR__ . '/components/layout/head.php'; ?>
<title>Browse the Books and Author Projects | <?= site_text('project_name') ?></title>
  <meta name="description" content="Browse selected books and author profiles from our catalogue. See the subjects, stories and finished editions that make up our work.">
  <link rel="canonical" href="<?= component_escape(site_url($currentPage)) ?>">

  <meta property="og:title" content="Browse the Books and Author Projects | <?= site_text('project_name') ?>">
  <meta property="og:description" content="Browse selected books and author profiles from our catalogue. See the subjects, stories and finished editions that make up our work.">
  <meta property="og:url" content="<?= component_escape(site_url($currentPage)) ?>">

</head>
<body class="page-work">

<?php render_component('shared/icons'); ?>

<?php render_component('shared/skip-link'); ?>

<?php require __DIR__ . '/components/layout/header.php'; ?>

<?php render_component('navigation/section-rail', ['links' => [
    ['href' => '#top', 'section' => 'top', 'label' => 'Top', 'icon' => '#i-home', 'text' => 'Top'],
    ['href' => '#selected', 'section' => 'selected', 'label' => 'Selected work', 'icon' => '#i-book', 'text' => 'Work'],
    ['href' => '#authors', 'section' => 'authors', 'label' => 'Featured authors', 'icon' => '#i-pen', 'text' => 'Authors'],
    ['href' => '#contact', 'section' => 'contact', 'label' => 'Contact', 'icon' => '#i-chat', 'text' => 'Contact']
]]); ?>

<main id="main">

<section class="ow-mast" id="top" aria-labelledby="ow-title">
  <div class="container">
    <nav class="ow-crumbs" aria-label="Breadcrumb"><ol role="list"><li><a href="./">Home</a></li><li aria-current="page">Our Work</li></ol></nav>
    <div class="ow-rule rw-rv" aria-hidden="true"><span><?= site_text('short_name') ?> <i>/</i> Our work</span><span>Books in print</span><span>Featured authors</span></div>
    <div class="ow-mast__grid">
      <div>
        <p class="rw-eyebrow rw-rv"><span></span>Our work</p>
        <h1 class="ow-title rw-rv" id="ow-title">Different voices. <em>Finished books.</em></h1>
      </div>
      <div class="ow-mast__side rw-rv">
        <p class="rw-lead">Explore books published with <?= site_text('project_name') ?> and meet some of the authors behind them.</p>
        <dl class="ow-facts">
          <div><dt>29</dt><dd>titles in this selection</dd></div>
          <div><dt>10</dt><dd>featured authors</dd></div>
        </dl>
        <nav class="ow-jump" aria-label="On this page"><a href="#selected">Selected work</a><a href="#authors">Featured authors</a><a href="#catalogue">The catalogue</a></nav>
      </div>
    </div>
  </div>
</section>

<section class="rw-sel rw-dark" id="selected" aria-labelledby="sel-title">
  <div class="container">
    <div class="rw-sel__rule rw-rv" aria-hidden="true"><span>Selected work</span><span>07 titles</span><span>In print</span></div>
    <div class="rw-sel__head">
      <div><p class="rw-eyebrow rw-rv"><span></span>Selected work</p>
      <h2 class="rw-h2 rw-rv" id="sel-title">A few titles <em>to explore.</em></h2></div>
      <div class="rw-sel__side rw-rv"><p class="rw-lead">Seven authors and seven different approaches to the written page.</p></div>
    </div>
    <div class="rw-table" data-rw-table>
<div class="rw-table__row"><a class="rw-book rw-table__book" href="#lee-roy-jefferson" aria-label="The Goodness of God by Dr. Lee Roy Jefferson, view in Our Work" data-rw-book="06" style="--s:0.52;--z:7"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-06-s.webp" width="360" height="614" alt="The Goodness of God: Reflection at 80 by Dr. Lee Roy Jefferson, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Goodness of God</span><span class="rw-cap__s">Reflection at 80</span><span class="rw-cap__a">Dr. Lee Roy Jefferson</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="#virginia-perez-perez" aria-label="Bajo la Influencia del Kremlin by Virginia Perez Perez, view in Our Work" data-rw-book="25" style="--s:0.62;--z:8"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-25-s.webp" width="360" height="614" alt="Bajo la Influencia del Kremlin: La Penetración Rusa en Venezuela by Virginia Perez Perez, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Bajo la Influencia del Kremlin</span><span class="rw-cap__s">La Penetración Rusa en Venezuela</span><span class="rw-cap__a">Virginia Perez Perez</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="#emilio-degher" aria-label="The Path of Truth by Emilio Degher, view in Our Work" data-rw-book="12" style="--s:0.74;--z:9"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-12.webp" width="600" height="1024" alt="The Path of Truth: Beyond Belief, Beyond Illusion by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Path of Truth</span><span class="rw-cap__s">Beyond Belief, Beyond Illusion</span><span class="rw-cap__a">Emilio Degher</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book is-lead" href="#douglas-hawes" aria-label="The Naked Truth of AI 2.0 by Douglas Hawes, view in Our Work" data-rw-book="05" style="--s:1;--z:20"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-05.webp" width="600" height="1024" alt="The Naked Truth of AI 2.0: Divine Intervention by Douglas Hawes, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Naked Truth of AI 2.0</span><span class="rw-cap__s">Divine Intervention</span><span class="rw-cap__a">Douglas Hawes</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="#kadeisha-corbin" aria-label="Bloom Through the Pain by Kadeisha Corbin, view in Our Work" data-rw-book="20" style="--s:0.74;--z:11"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-20.webp" width="600" height="1024" alt="Bloom Through the Pain: A 90 Day Affirmation and Reflection Journal by Kadeisha Corbin, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Bloom Through the Pain</span><span class="rw-cap__s">A 90 Day Affirmation and Reflection Journal</span><span class="rw-cap__a">Kadeisha Corbin</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="#corey-t-alston-sr" aria-label="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., view in Our Work" data-rw-book="03" style="--s:0.62;--z:12"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-03-s.webp" width="360" height="614" alt="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="rw-cap__a">Corey T. Alston Sr.</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-table__book" href="#book-23" aria-label="Poems of Life by O’Dell James Ford Sr., view in Our Work" data-rw-book="23" style="--s:0.52;--z:13"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-23-s.webp" width="360" height="614" alt="Poems of Life: Reflections on Life, Love, and the Human Journey by O’Dell James Ford Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Poems of Life</span><span class="rw-cap__s">Reflections on Life, Love, and the Human Journey</span><span class="rw-cap__a">O’Dell James Ford Sr.</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
<div class="rw-table__surface" aria-hidden="true"></div></div>
    <p class="rw-now" data-rw-now aria-live="polite"><span class="rw-now__n">In focus</span><span class="rw-now__main"><span class="rw-cap__t">The Naked Truth of AI 2.0</span><span class="rw-cap__s">Divine Intervention</span><span class="rw-cap__a">Douglas Hawes</span></span><span class="rw-now__hint">Explore a cover for book details</span></p>
  </div>
</section>

<section class="ow-authors" id="authors" aria-labelledby="authors-title">
  <div class="container">
    <div class="rw-authors__head">
      <div><p class="rw-eyebrow rw-rv"><span></span>Featured authors</p>
      <h2 class="rw-h2 rw-rv" id="authors-title">The writers <em>behind the collection.</em></h2></div>
      <div class="rw-authors__side rw-rv"><p class="rw-lead">Read about the authors, their interests and the books they have brought to readers.</p></div>
    </div>
<article class="rw-spread rw-rv" id="emilio-degher" aria-labelledby="au-emilio-degher">
  <div class="rw-spread__num" aria-hidden="true"><span>01</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-emilio-degher.webp" width="480" height="600" alt="Portrait of Emilio Degher" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-emilio-degher">Emilio Degher</h3>
    <p class="rw-spread__genre">Philosophy · Spirituality · Personal Growth</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'eternal-coherence']); ?>
    <p class="rw-spread__bio">Emilio Degher writes about philosophy, psychology and spiritual awareness. His books ask readers to examine familiar beliefs and consider how purpose, understanding and personal strength shape their lives.</p>
    <div class="rw-spread__about"><p class="rw-label">Thought provoking works by Emilio Degher</p><p>Emilio Degher explores faith, awareness and the search for meaning, inviting readers to consider the beliefs that shape everyday life.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#emilio-degher" aria-label="The Path of Truth by Emilio Degher, view in Our Work" data-rw-book="12"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-12.webp" width="600" height="1024" alt="The Path of Truth: Beyond Belief, Beyond Illusion by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Path of Truth</span><span class="rw-cap__s">Beyond Belief, Beyond Illusion</span><span class="rw-cap__a">Emilio Degher</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-spread__minor" href="#emilio-degher" aria-label="Eternal Coherence by Emilio Degher, view in Our Work" data-rw-book="09"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-09-s.webp" width="360" height="614" alt="Eternal Coherence: Jesus Christ and the Architecture of Reality by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Eternal Coherence</span><span class="rw-cap__s">Jesus Christ and the Architecture of Reality</span><span class="rw-cap__a">Emilio Degher</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-spread__minor" href="#emilio-degher" aria-label="The Awakening of Memory by Emilio Degher, view in Our Work" data-rw-book="14"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-14-s.webp" width="360" height="614" alt="The Awakening of Memory by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Awakening of Memory</span><span class="rw-cap__a">Emilio Degher</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread is-rev rw-rv" id="kadeisha-corbin" aria-labelledby="au-kadeisha-corbin">
  <div class="rw-spread__num" aria-hidden="true"><span>02</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-kadeisha-corbin.webp" width="480" height="600" alt="Portrait of Kadeisha Corbin" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-kadeisha-corbin">Kadeisha Corbin</h3>
    <p class="rw-spread__genre">Self Help · Inspirational · Guided Journal</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'bloom-through-the-pain']); ?>
    <p class="rw-spread__bio">Kadeisha Corbin brings faith and reflection into her writing through Scripture, affirmations and journal prompts. Her work offers readers space to pause and consider their own healing and growth.</p>
    <div class="rw-spread__about"><p class="rw-label">A healing journal by Kadeisha Corbin</p><p>Bloom Through the Pain offers ninety days of affirmations, Scripture and space for reflection, with an emphasis on healing and personal growth.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#kadeisha-corbin" aria-label="Bloom Through the Pain by Kadeisha Corbin, view in Our Work" data-rw-book="20"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-20.webp" width="600" height="1024" alt="Bloom Through the Pain: A 90 Day Affirmation and Reflection Journal by Kadeisha Corbin, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Bloom Through the Pain</span><span class="rw-cap__s">A 90 Day Affirmation and Reflection Journal</span><span class="rw-cap__a">Kadeisha Corbin</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread rw-rv" id="douglas-hawes" aria-labelledby="au-douglas-hawes">
  <div class="rw-spread__num" aria-hidden="true"><span>03</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-douglas-hawes.webp" width="480" height="600" alt="Portrait of Douglas Hawes" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-douglas-hawes">Douglas Hawes</h3>
    <p class="rw-spread__genre">Faith &amp; Technology · Christian Apologetics · Science &amp; Spirituality</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'the-naked-truth-of-ai-2-0-divine-intervention']); ?>
    <p class="rw-spread__bio">Douglas Hawes writes about artificial intelligence, science and Christian faith. He considers how technology affects human thought and choice while exploring creation, free will and humanity’s relationship with God.</p>
    <div class="rw-spread__about"><p class="rw-label">Divine intervention by Douglas Hawes</p><p>The Naked Truth of AI 2.0: Divine Intervention considers artificial intelligence alongside questions of creation, faith and human purpose.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#douglas-hawes" aria-label="The Naked Truth of AI 2.0 by Douglas Hawes, view in Our Work" data-rw-book="05"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-05.webp" width="600" height="1024" alt="The Naked Truth of AI 2.0: Divine Intervention by Douglas Hawes, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Naked Truth of AI 2.0</span><span class="rw-cap__s">Divine Intervention</span><span class="rw-cap__a">Douglas Hawes</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread is-rev rw-rv" id="lee-roy-jefferson" aria-labelledby="au-lee-roy-jefferson">
  <div class="rw-spread__num" aria-hidden="true"><span>04</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-lee-roy-jefferson.webp" width="480" height="600" alt="Portrait of Dr. Lee Roy Jefferson" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-lee-roy-jefferson">Dr. Lee Roy Jefferson</h3>
    <p class="rw-spread__genre">Christian Memoir · Faith &amp; Inspiration · Ministry</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'the-goodness-of-god']); ?>
    <p class="rw-spread__bio">Dr. Lee Roy Jefferson is a pastor, educator and community advocate with more than sixty years in ministry. His work has included church service, mentoring and leadership in religious education and community organisations.</p>
    <div class="rw-spread__about"><p class="rw-label">Reflection at 80 by Dr. Lee Roy Jefferson</p><p>In The Goodness of God, Dr. Lee Roy Jefferson looks back on faith, family, ministry and perseverance across his life.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#lee-roy-jefferson" aria-label="The Goodness of God by Dr. Lee Roy Jefferson, view in Our Work" data-rw-book="06"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-06.webp" width="600" height="1024" alt="The Goodness of God: Reflection at 80 by Dr. Lee Roy Jefferson, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Goodness of God</span><span class="rw-cap__s">Reflection at 80</span><span class="rw-cap__a">Dr. Lee Roy Jefferson</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread rw-rv" id="corey-t-alston-sr" aria-labelledby="au-corey-t-alston-sr">
  <div class="rw-spread__num" aria-hidden="true"><span>05</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-corey-t-alston-sr.webp" width="480" height="600" alt="Portrait of Corey T. Alston Sr." loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-corey-t-alston-sr">Corey T. Alston Sr.</h3>
    <p class="rw-spread__genre">Children’s Fiction · Adventure · Friendship &amp; Imagination</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'the-story-book-chronicles-a-dreamy-adventure-of-isla-and-ava']); ?>
    <p class="rw-spread__bio">Corey T. Alston Sr. writes children’s adventures inspired by Ava and Isla. Friendship, bravery and a playful imagination run through his stories for young readers.</p>
    <div class="rw-spread__about"><p class="rw-label">A dreamy adventure by Corey T. Alston Sr.</p><p>Isla and Ava set off on a dream adventure, following a fire truck, crossing a river and discovering what friendship and courage can help them face.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#corey-t-alston-sr" aria-label="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., view in Our Work" data-rw-book="03"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-03.webp" width="600" height="1024" alt="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="rw-cap__a">Corey T. Alston Sr.</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread is-rev rw-rv" id="virginia-perez-perez" aria-labelledby="au-virginia-perez-perez">
  <div class="rw-spread__num" aria-hidden="true"><span>06</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-virginia-perez-perez.webp" width="480" height="600" alt="Portrait of Virginia Perez Perez" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-virginia-perez-perez">Virginia Perez Perez</h3>
    <p class="rw-spread__genre">Geopolitics · International Relations · Political Analysis</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'bajo-la-influencia-del-kremlin']); ?>
    <p class="rw-spread__bio">Virginia Perez Perez draws on experience in Venezuelan public administration and the Ministry of Foreign Affairs. Her writing considers bilateral agreements and international relations in their strategic and historical context.</p>
    <div class="rw-spread__about"><p class="rw-label">A geopolitical analysis by Virginia Perez Perez</p><p>Virginia Perez Perez examines agreements between Venezuela and Russia across energy, finance and defence, considering their implications for sovereignty and international relations.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#virginia-perez-perez" aria-label="Bajo la Influencia del Kremlin by Virginia Perez Perez, view in Our Work" data-rw-book="25"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-25.webp" width="600" height="1024" alt="Bajo la Influencia del Kremlin: La Penetración Rusa en Venezuela by Virginia Perez Perez, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Bajo la Influencia del Kremlin</span><span class="rw-cap__s">La Penetración Rusa en Venezuela</span><span class="rw-cap__a">Virginia Perez Perez</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread rw-rv" id="rajinder-singh" aria-labelledby="au-rajinder-singh">
  <div class="rw-spread__num" aria-hidden="true"><span>07</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-rajinder-singh.webp" width="480" height="600" alt="Portrait of Dr. Rajinder Singh SJD" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-rajinder-singh">Dr. Rajinder Singh SJD</h3>
    <p class="rw-spread__genre">Political Biography · Leadership · Global Affairs</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'giorgia-meloni']); ?>
    <p class="rw-spread__bio">Dr. Rajinder Singh SJD is a researcher and author whose background spans science, intellectual property law and international legal studies. He writes about public affairs, political figures and social questions.</p>
    <div class="rw-spread__about"><p class="rw-label">Political profiles by Dr. Rajinder Singh SJD</p><p>These political studies consider Giorgia Meloni and Donald J. Trump through biographical context, public careers and commentary on their influence.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#rajinder-singh" aria-label="Giorgia Meloni by Dr. Rajinder Singh SJD, view in Our Work" data-rw-book="07"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-07.webp" width="600" height="1024" alt="Giorgia Meloni by Dr. Rajinder Singh SJD, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Giorgia Meloni</span><span class="rw-cap__a">Dr. Rajinder Singh SJD</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-spread__minor" href="#rajinder-singh" aria-label="Donald J. Trump by Dr. Rajinder Singh SJD, view in Our Work" data-rw-book="08"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-08-s.webp" width="360" height="614" alt="Donald J. Trump by Dr. Rajinder Singh SJD, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">Donald J. Trump</span><span class="rw-cap__a">Dr. Rajinder Singh SJD</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
<article class="rw-spread is-rev rw-rv" id="charles-c-solomon-jr" aria-labelledby="au-charles-c-solomon-jr">
  <div class="rw-spread__num" aria-hidden="true"><span>08</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-charles-c-solomon-jr.webp" width="480" height="600" alt="Portrait of Elder Charles C. Solomon Jr." loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-charles-c-solomon-jr">Elder Charles C. Solomon Jr.</h3>
    <p class="rw-spread__genre">Biblical Studies · Bible Prophecy · Christian Theology</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'the-two-beasts-of-revelation-13']); ?>
    <p class="rw-spread__bio">Elder Charles C. Solomon Jr. studies and teaches Scripture, with a focus on biblical prophecy and spiritual preparation. His writing draws on the King James Bible to examine Daniel, Revelation, worship and obedience.</p>
    <div class="rw-spread__about"><p class="rw-label">Prophetic studies by Elder Charles C. Solomon Jr.</p><p>These biblical studies explore prophecy, worship, commandments and spiritual preparation through readings of Daniel, Revelation and other Scripture.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <?php render_component('authors/book-list', ['collection' => 'the-two-beasts-of-revelation-13', 'numbered' => true]); ?>
</article>
<article class="rw-spread rw-rv" id="linda-mazzia" aria-labelledby="au-linda-mazzia">
  <div class="rw-spread__num" aria-hidden="true"><span>09</span>Featured author</div>
  <figure class="rw-spread__photo"><img src="assets/images/authors/author-linda-mazzia.webp" width="480" height="600" alt="Portrait of Linda Mazzia" loading="lazy" decoding="async"></figure>
  <div class="rw-spread__head">
    <p class="rw-label">Author spotlight</p>
    <h3 class="rw-spread__name" id="au-linda-mazzia">Linda Mazzia</h3>
    <p class="rw-spread__genre">Children’s Fiction · Fantasy &amp; Adventure</p>
  </div>
  <div class="rw-spread__body">
    <?php render_component('authors/book-list', ['collection' => 'the-bunny-in-the-superhero-cape']); ?>
    <p class="rw-spread__bio">Linda Mazzia turns everyday moments into children’s adventures. Her stories follow curious characters through unexpected encounters, with friendship and imagination at their centre.</p>
    <div class="rw-spread__about"><p class="rw-label">Children’s stories by Linda Mazzia</p><p>Joshua’s adventures begin with an escaped bunny and a seaside discovery, leading to stories of curiosity, friendship and a dragon called Spike.</p></div>
    <p class="rw-spread__avail">Available on Amazon</p>
  </div>
  <div class="rw-spread__books"><a class="rw-book rw-spread__lead" href="#linda-mazzia" aria-label="The Dragon Who Finds His Roar by Linda Mazzia, view in Our Work" data-rw-book="28"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-28.webp" width="600" height="1024" alt="The Dragon Who Finds His Roar by Linda Mazzia, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Dragon Who Finds His Roar</span><span class="rw-cap__a">Linda Mazzia</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a><a class="rw-book rw-spread__minor" href="#linda-mazzia" aria-label="The Bunny in the Superhero Cape by Linda Mazzia, view in Our Work" data-rw-book="29"><span class="rw-book__obj"><img class="rw-book__img" src="assets/images/books/book-29-s.webp" width="360" height="614" alt="The Bunny in the Superhero Cape by Linda Mazzia, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><span class="rw-cap" aria-hidden="true"><span class="rw-cap__t">The Bunny in the Superhero Cape</span><span class="rw-cap__a">Linda Mazzia</span><span class="rw-cap__go">View book <svg aria-hidden="true"><use href="#i-arrow"/></svg></span></span></a></div>
</article>
    <aside class="ow-also rw-rv" aria-labelledby="also-title">
      <p class="rw-label">Also in the spotlight</p>
      <h3 class="ow-also__t" id="also-title">The Quiet Between Stars</h3>
      <p class="ow-also__by">A novel by Evelyn Hart <i>·</i> Inspirational Fiction</p>
      <p class="ow-also__txt">Following a painful loss, a woman returns home and works through memories that may help her begin again.</p>
    </aside>
  </div>
</section>

<section class="ow-cat" id="catalogue" aria-labelledby="cat-title">
  <div class="container">
    <div class="rw-cat__head">
      <div><p class="rw-eyebrow rw-rv"><span></span>The catalogue</p>
      <h2 class="rw-h2 rw-rv" id="cat-title">Browse the <em>complete selection.</em></h2></div>
      <p class="rw-lead rw-rv">All 29 titles appear below. Featured author names link to their profiles above.</p>
    </div>
    <ol class="ow-shelf" role="list">
<li class="ow-shelf__item rw-rv" id="book-01"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-01-s.webp" width="360" height="614" alt="It Hurts Worse When It Is Family, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 01</span><span class="rw-cap__t">It Hurts Worse When It Is Family</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-02"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-02-s.webp" width="360" height="614" alt="The Adventures of Bryson: Bryson the Alien, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 02</span><span class="rw-cap__t">The Adventures of Bryson</span><span class="rw-cap__s">Bryson the Alien</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-03"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-03-s.webp" width="360" height="614" alt="The Story Book Chronicles: A Dreamy Adventure of Isla and Ava by Corey T. Alston Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 03</span><span class="rw-cap__t">The Story Book Chronicles: A Dreamy Adventure of Isla and Ava</span><span class="rw-cap__a"><a href="#corey-t-alston-sr">Corey T. Alston Sr.</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-04"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-04-s.webp" width="360" height="614" alt="The Cosmic Mind: Consciousness, Creation and the Search for Meaning by Maneseh, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 04</span><span class="rw-cap__t">The Cosmic Mind</span><span class="rw-cap__s">Consciousness, Creation and the Search for Meaning</span><span class="rw-cap__a">Maneseh</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-05"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-05-s.webp" width="360" height="614" alt="The Naked Truth of AI 2.0: Divine Intervention by Douglas Hawes, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 05</span><span class="rw-cap__t">The Naked Truth of AI 2.0</span><span class="rw-cap__s">Divine Intervention</span><span class="rw-cap__a"><a href="#douglas-hawes">Douglas Hawes</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-06"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-06-s.webp" width="360" height="614" alt="The Goodness of God: Reflection at 80 by Dr. Lee Roy Jefferson, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 06</span><span class="rw-cap__t">The Goodness of God</span><span class="rw-cap__s">Reflection at 80</span><span class="rw-cap__a"><a href="#lee-roy-jefferson">Dr. Lee Roy Jefferson</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-07"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-07-s.webp" width="360" height="614" alt="Giorgia Meloni by Dr. Rajinder Singh SJD, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 07</span><span class="rw-cap__t">Giorgia Meloni</span><span class="rw-cap__a"><a href="#rajinder-singh">Dr. Rajinder Singh SJD</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-08"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-08-s.webp" width="360" height="614" alt="Donald J. Trump by Dr. Rajinder Singh SJD, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 08</span><span class="rw-cap__t">Donald J. Trump</span><span class="rw-cap__a"><a href="#rajinder-singh">Dr. Rajinder Singh SJD</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-09"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-09-s.webp" width="360" height="614" alt="Eternal Coherence: Jesus Christ and the Architecture of Reality by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 09</span><span class="rw-cap__t">Eternal Coherence</span><span class="rw-cap__s">Jesus Christ and the Architecture of Reality</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-10"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-10-s.webp" width="360" height="614" alt="The Awakening of Thought by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 10</span><span class="rw-cap__t">The Awakening of Thought</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-11"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-11-s.webp" width="360" height="614" alt="A Life Led from the Heart by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 11</span><span class="rw-cap__t">A Life Led from the Heart</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-12"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-12-s.webp" width="360" height="614" alt="The Path of Truth: Beyond Belief, Beyond Illusion by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 12</span><span class="rw-cap__t">The Path of Truth</span><span class="rw-cap__s">Beyond Belief, Beyond Illusion</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-13"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-13-s.webp" width="360" height="614" alt="The Exodus Code: Truth Beyond Time by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 13</span><span class="rw-cap__t">The Exodus Code</span><span class="rw-cap__s">Truth Beyond Time</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-14"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-14-s.webp" width="360" height="614" alt="The Awakening of Memory by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 14</span><span class="rw-cap__t">The Awakening of Memory</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-15"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-15-s.webp" width="360" height="614" alt="The Sole: On the Soul, the Heavens, and the Silence Between the Creator and the Listener by Emilio Degher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 15</span><span class="rw-cap__t">The Sole</span><span class="rw-cap__s">On the Soul, the Heavens, and the Silence Between the Creator and the Listener</span><span class="rw-cap__a"><a href="#emilio-degher">Emilio Degher</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-16"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-16-s.webp" width="360" height="614" alt="I Am Good in the Bad by Emilio Dagher, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 16</span><span class="rw-cap__t">I Am Good in the Bad</span><span class="rw-cap__a">Emilio Dagher</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-17"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-17-s.webp" width="360" height="614" alt="Business Administration Mastery: The Complete Guide for Aspiring Leaders, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 17</span><span class="rw-cap__t">Business Administration Mastery</span><span class="rw-cap__s">The Complete Guide for Aspiring Leaders</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-18"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-18-s.webp" width="360" height="614" alt="The Legal Tender Question: Volume One by Joseph R. K. Eshun, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 18</span><span class="rw-cap__t">The Legal Tender Question</span><span class="rw-cap__s">Volume One</span><span class="rw-cap__a">Joseph R. K. Eshun</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-19"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-19-s.webp" width="360" height="614" alt="The Legal Tender Question: Volume Two by Joseph R. K. Eshun, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 19</span><span class="rw-cap__t">The Legal Tender Question</span><span class="rw-cap__s">Volume Two</span><span class="rw-cap__a">Joseph R. K. Eshun</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-20"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-20-s.webp" width="360" height="614" alt="Bloom Through the Pain: A 90 Day Affirmation and Reflection Journal by Kadeisha Corbin, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 20</span><span class="rw-cap__t">Bloom Through the Pain</span><span class="rw-cap__s">A 90 Day Affirmation and Reflection Journal</span><span class="rw-cap__a"><a href="#kadeisha-corbin">Kadeisha Corbin</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-21"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-21-s.webp" width="360" height="614" alt="Thank You Trump: The 51st State by Khalid Rauf Qureshi, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 21</span><span class="rw-cap__t">Thank You Trump</span><span class="rw-cap__s">The 51st State</span><span class="rw-cap__a">Khalid Rauf Qureshi</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-22"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-22-s.webp" width="360" height="614" alt="Rise Up Under the Blood, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 22</span><span class="rw-cap__t">Rise Up Under the Blood</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-23"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-23-s.webp" width="360" height="614" alt="Poems of Life: Reflections on Life, Love, and the Human Journey by O’Dell James Ford Sr., shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 23</span><span class="rw-cap__t">Poems of Life</span><span class="rw-cap__s">Reflections on Life, Love, and the Human Journey</span><span class="rw-cap__a">O’Dell James Ford Sr.</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-24"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-24-s.webp" width="360" height="614" alt="Whispers of Time: Poetry · French / Haitian Creole by Aggee Andrew Vetiaque, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 24</span><span class="rw-cap__t">Whispers of Time</span><span class="rw-cap__s">Poetry · French / Haitian Creole</span><span class="rw-cap__a">Aggee Andrew Vetiaque</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-25"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-25-s.webp" width="360" height="614" alt="Bajo la Influencia del Kremlin: La Penetración Rusa en Venezuela by Virginia Perez Perez, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 25</span><span class="rw-cap__t">Bajo la Influencia del Kremlin</span><span class="rw-cap__s">La Penetración Rusa en Venezuela</span><span class="rw-cap__a"><a href="#virginia-perez-perez">Virginia Perez Perez</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-26"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-26-s.webp" width="360" height="614" alt="You vs You: How to Overcome Doubt, Build Discipline, and Create a Life with Purpose by Waheed Shaffiek, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 26</span><span class="rw-cap__t">You vs You</span><span class="rw-cap__s">How to Overcome Doubt, Build Discipline, and Create a Life with Purpose</span><span class="rw-cap__a">Waheed Shaffiek</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-27"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-27-s.webp" width="360" height="614" alt="Change to Stay Unchanged: Authoritarian Reform in Kazakhstan Under the Tokayev Regime by Yerzhan Dosmukhamedov, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 27</span><span class="rw-cap__t">Change to Stay Unchanged</span><span class="rw-cap__s">Authoritarian Reform in Kazakhstan Under the Tokayev Regime</span><span class="rw-cap__a">Yerzhan Dosmukhamedov</span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-28"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-28-s.webp" width="360" height="614" alt="The Dragon Who Finds His Roar by Linda Mazzia, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 28</span><span class="rw-cap__t">The Dragon Who Finds His Roar</span><span class="rw-cap__a"><a href="#linda-mazzia">Linda Mazzia</a></span></figcaption></figure></li>
<li class="ow-shelf__item rw-rv" id="book-29"><figure><span class="rw-book__obj ow-shelf__obj"><img class="rw-book__img" src="assets/images/books/book-29-s.webp" width="360" height="614" alt="The Bunny in the Superhero Cape by Linda Mazzia, shown as a hardcover book" loading="lazy" decoding="async"><span class="rw-book__floor" aria-hidden="true"></span></span><figcaption><span class="ow-shelf__n">No. 29</span><span class="rw-cap__t">The Bunny in the Superhero Cape</span><span class="rw-cap__a"><a href="#linda-mazzia">Linda Mazzia</a></span></figcaption></figure></li>
    </ol>
  </div>
</section>

<section class="cta on-dark ow-cta" id="contact" aria-labelledby="cta-title">
  <div class="cta__media" aria-hidden="true">
    <img src="assets/images/photos/1663735498345-39c452a6d5d8-1600.webp" alt="" loading="lazy" decoding="async" data-parallax="0.08">
  </div>
  <div class="container cta__grid">
    <div class="cta__copy">
      <p class="eyebrow" data-reveal>Your book, next</p>
      <h2 class="display cta__title" id="cta-title" data-reveal style="--d:.08s">Let’s make room <em>for your book.</em></h2>
      <p class="lead" data-reveal style="--d:.16s">Tell us what you want to write and where you would like help getting started.</p>
      <div class="ow-cta__btns" data-reveal style="--d:.2s">
        <button class="btn btn--light" type="button" data-open-lead>Start Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="contact"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg>Speak With Us</a>
      </div>
    </div>
    <?php render_component('forms/lead-form', ['title' => 'Share your book plans', 'rows' => 4, 'messageLabel' => 'What would you like help with?']); ?>
  </div>
</section>

</main>

<?php require __DIR__ . '/components/layout/footer.php'; ?>

<?php render_component('modals/lead-modal'); ?>

<?php require __DIR__ . '/components/layout/scripts.php'; ?>
</body>
</html>
