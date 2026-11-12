<header class="site-header" data-header>
  <nav class="nav" aria-label="Primary">
    <a class="nav__logo" href="./"<?php if ($currentPage === 'index.php') echo ' aria-current="page"'; ?> aria-label="<?= site_text('project_name') ?> home">
      <img class="nav__logo-color" src="<?= site_text('logos.header') ?>" width="800" height="320" alt="<?= site_text('project_name') ?>">
    </a>

    <ul class="nav__menu" role="list">
      <li class="nav__item nav__item--has-sub" data-dropdown>
        <button class="nav__link" type="button" aria-expanded="false" aria-controls="sub-services">
          Services <svg class="nav__caret" aria-hidden="true"><use href="#i-down"/></svg>
        </button>
        <div class="nav__sub nav__sub--mega" id="sub-services">
          <div class="nav__mega"><div class="nav__mega-col"><p class="nav__mega-h"><span>01</span>Writing &amp; Editorial</p><ul role="list"><li><a href="ghostwriting"<?php if ($currentPage === 'ghostwriting.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-quill"/></svg></i><span>Ghostwriting</span></a></li><li><a href="book-editing"<?php if ($currentPage === 'book-editing.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-pen"/></svg></i><span>Book Editing &amp; Formatting</span></a></li><li><a href="articles-magazines"<?php if ($currentPage === 'articles-magazines.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-doc"/></svg></i><span>Articles &amp; Magazines</span><em aria-hidden="true"></em></a></li></ul></div><div class="nav__mega-col"><p class="nav__mega-h"><span>02</span>Publishing &amp; Production</p><ul role="list"><li><a href="book-publishing"<?php if ($currentPage === 'book-publishing.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-book"/></svg></i><span>Book Publishing</span></a></li><li><a href="book-cover-design"<?php if ($currentPage === 'book-cover-design.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-book"/></svg></i><span>Book Cover Design</span></a></li><li><a href="illustration"<?php if ($currentPage === 'illustration.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-brush"/></svg></i><span>Illustration</span></a></li><li><a href="audio-book"<?php if ($currentPage === 'audio-book.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-audio"/></svg></i><span>Audiobook Production</span></a></li><li><a href="book-video"<?php if ($currentPage === 'book-video.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-play"/></svg></i><span>Book Video &amp; Trailers</span></a></li></ul></div><div class="nav__mega-col"><p class="nav__mega-h"><span>03</span>Rights &amp; Distribution</p><ul role="list"><li><a href="copyrights-isbn"<?php if ($currentPage === 'copyrights-isbn.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-seal"/></svg></i><span>Copyrights &amp; ISBN</span><em aria-hidden="true"></em></a></li><li><a href="global-distribution"<?php if ($currentPage === 'global-distribution.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-globe"/></svg></i><span>Global Distribution</span><em aria-hidden="true"></em></a></li></ul></div><div class="nav__mega-col"><p class="nav__mega-h"><span>04</span>Marketing &amp; Visibility</p><ul role="list"><li><a href="book-promotion"<?php if ($currentPage === 'book-promotion.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-star"/></svg></i><span>Book Promotion &amp; Marketing</span></a></li><li><a href="author-website"<?php if ($currentPage === 'author-website.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-globe"/></svg></i><span>Author Website</span></a></li><li><a href="web-social-media"<?php if ($currentPage === 'web-social-media.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-chat"/></svg></i><span>Web &amp; Social Media</span><em aria-hidden="true"></em></a></li><li><a href="billboard-campaigns"<?php if ($currentPage === 'billboard-campaigns.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-frame"/></svg></i><span>Billboard Campaigns</span><em aria-hidden="true"></em></a></li><li><a href="podcasts"<?php if ($currentPage === 'podcasts.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-mic"/></svg></i><span>Podcasts</span><em aria-hidden="true"></em></a></li><li><a href="tv-interviews"<?php if ($currentPage === 'tv-interviews.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-play"/></svg></i><span>TV Interviews</span><em aria-hidden="true"></em></a></li><li><a href="book-fairs"<?php if ($currentPage === 'book-fairs.php') echo ' aria-current="page"'; ?>><i aria-hidden="true"><svg><use href="#i-book"/></svg></i><span>Book Fairs</span><em aria-hidden="true"></em></a></li></ul></div></div>
          <div class="nav__mega-foot"><span>17 services, one publishing house, from the first draft to the reader.</span><div><a href="./#services">All services</a><a href="our-work"<?php if ($currentPage === 'our-work.php') echo ' aria-current="page"'; ?>>Our work</a></div></div>
        </div>
      </li>
      <li class="nav__item"><a class="nav__link" href="book-publishing"<?php if ($currentPage === 'book-publishing.php') echo ' aria-current="page"'; ?>>Book Publishing</a></li>
      <li class="nav__item"><a class="nav__link" href="book-promotion"<?php if ($currentPage === 'book-promotion.php') echo ' aria-current="page"'; ?>>Book Promotion</a></li>
      <li class="nav__item"><a class="nav__link" href="publications"<?php if ($currentPage === 'publications.php') echo ' aria-current="page"'; ?>>Publications</a></li>
      <li class="nav__item"><a class="nav__link" href="featured-authors"<?php if ($currentPage === 'featured-authors.php') echo ' aria-current="page"'; ?>>Featured Authors</a></li>
      <li class="nav__item"><a class="nav__link" href="faq"<?php if ($currentPage === 'faq.php') echo ' aria-current="page"'; ?>>FAQ</a></li>
      <li class="nav__item"><a class="nav__link" href="about"<?php if ($currentPage === 'about.php') echo ' aria-current="page"'; ?>>About</a></li>
      <li class="nav__item"><a class="nav__link" href="blogs"<?php if ($currentPage === 'blogs.php') echo ' aria-current="page"'; ?>>Blogs</a></li>
      <li class="nav__item"><a class="nav__link" href="contact"<?php if ($currentPage === 'contact.php') echo ' aria-current="page"'; ?>>Contact</a></li>
    </ul>

    <div class="nav__actions">
      <a class="nav__phone" href="tel:<?= site_phone_number() ?>" aria-label="Call <?= site_text('phone') ?>">
        <svg aria-hidden="true"><use href="#i-phone"/></svg><span><?= site_text('phone') ?></span>
      </a>
      <button class="btn btn--primary btn--sm nav__cta" type="button" data-open-lead>Plan Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
      <button class="nav__burger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu" data-burger>
        <span></span><span></span>
      </button>
    </div>
  </nav>
</header>

<div class="mobile-menu" id="mobile-menu" role="navigation" aria-label="Mobile" data-mobile-menu hidden>
  <div class="mobile-menu__inner">
    <p class="label mobile-menu__label">Menu</p>
    <ul class="mobile-menu__list" role="list">
      <li>
        <button class="mobile-menu__link mobile-menu__toggle" type="button" aria-expanded="false" aria-controls="m-services" data-m-toggle>
          Services <svg aria-hidden="true"><use href="#i-plus"/></svg>
        </button>
        <ul class="mobile-menu__sub" id="m-services" role="list" hidden>
          <li class="mobile-menu__grp" aria-hidden="true">Writing &amp; Editorial</li>
          <li><a href="ghostwriting"<?php if ($currentPage === 'ghostwriting.php') echo ' aria-current="page"'; ?>>Ghostwriting</a></li>
          <li><a href="book-editing"<?php if ($currentPage === 'book-editing.php') echo ' aria-current="page"'; ?>>Book Editing &amp; Formatting</a></li>
          <li><a href="articles-magazines"<?php if ($currentPage === 'articles-magazines.php') echo ' aria-current="page"'; ?>>Articles &amp; Magazines</a></li>
          <li class="mobile-menu__grp" aria-hidden="true">Publishing &amp; Production</li>
          <li><a href="book-publishing"<?php if ($currentPage === 'book-publishing.php') echo ' aria-current="page"'; ?>>Book Publishing</a></li>
          <li><a href="book-cover-design"<?php if ($currentPage === 'book-cover-design.php') echo ' aria-current="page"'; ?>>Book Cover Design</a></li>
          <li><a href="illustration"<?php if ($currentPage === 'illustration.php') echo ' aria-current="page"'; ?>>Illustration</a></li>
          <li><a href="audio-book"<?php if ($currentPage === 'audio-book.php') echo ' aria-current="page"'; ?>>Audiobook Production</a></li>
          <li><a href="book-video"<?php if ($currentPage === 'book-video.php') echo ' aria-current="page"'; ?>>Book Video &amp; Trailers</a></li>
          <li class="mobile-menu__grp" aria-hidden="true">Rights &amp; Distribution</li>
          <li><a href="copyrights-isbn"<?php if ($currentPage === 'copyrights-isbn.php') echo ' aria-current="page"'; ?>>Copyrights &amp; ISBN</a></li>
          <li><a href="global-distribution"<?php if ($currentPage === 'global-distribution.php') echo ' aria-current="page"'; ?>>Global Distribution</a></li>
          <li class="mobile-menu__grp" aria-hidden="true">Marketing &amp; Visibility</li>
          <li><a href="book-promotion"<?php if ($currentPage === 'book-promotion.php') echo ' aria-current="page"'; ?>>Book Promotion &amp; Marketing</a></li>
          <li><a href="author-website"<?php if ($currentPage === 'author-website.php') echo ' aria-current="page"'; ?>>Author Website</a></li>
          <li><a href="web-social-media"<?php if ($currentPage === 'web-social-media.php') echo ' aria-current="page"'; ?>>Web &amp; Social Media</a></li>
          <li><a href="billboard-campaigns"<?php if ($currentPage === 'billboard-campaigns.php') echo ' aria-current="page"'; ?>>Billboard Campaigns</a></li>
          <li><a href="podcasts"<?php if ($currentPage === 'podcasts.php') echo ' aria-current="page"'; ?>>Podcasts</a></li>
          <li><a href="tv-interviews"<?php if ($currentPage === 'tv-interviews.php') echo ' aria-current="page"'; ?>>TV Interviews</a></li>
          <li><a href="book-fairs"<?php if ($currentPage === 'book-fairs.php') echo ' aria-current="page"'; ?>>Book Fairs</a></li>
        </ul>
      </li>
      <li><a class="mobile-menu__link" href="book-publishing"<?php if ($currentPage === 'book-publishing.php') echo ' aria-current="page"'; ?>>Book Publishing</a></li>
      <li><a class="mobile-menu__link" href="book-promotion"<?php if ($currentPage === 'book-promotion.php') echo ' aria-current="page"'; ?>>Book Promotion</a></li>
      <li><a class="mobile-menu__link" href="publications"<?php if ($currentPage === 'publications.php') echo ' aria-current="page"'; ?> data-m-close>Publications</a></li>
      <li><a class="mobile-menu__link" href="featured-authors"<?php if ($currentPage === 'featured-authors.php') echo ' aria-current="page"'; ?>>Featured Authors</a></li>
      <li><a class="mobile-menu__link" href="faq"<?php if ($currentPage === 'faq.php') echo ' aria-current="page"'; ?>>FAQ</a></li>
      <li><a class="mobile-menu__link" href="about"<?php if ($currentPage === 'about.php') echo ' aria-current="page"'; ?> data-m-close>About</a></li>
      <li><a class="mobile-menu__link" href="blogs"<?php if ($currentPage === 'blogs.php') echo ' aria-current="page"'; ?>>Blogs</a></li>
      <li><a class="mobile-menu__link" href="contact"<?php if ($currentPage === 'contact.php') echo ' aria-current="page"'; ?> data-m-close>Contact</a></li>
    </ul>
    <div class="mobile-menu__books" aria-hidden="true">
      <img src="assets/images/books/cover-06.webp" alt="" loading="lazy">
      <img src="assets/images/books/cover-25.webp" alt="" loading="lazy">
      <img src="assets/images/books/cover-05.webp" alt="" loading="lazy">
    </div>
    <div class="mobile-menu__foot">
      <button class="btn btn--primary" type="button" data-open-lead>Discuss Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
      <a class="btn btn--outline-dark" href="tel:<?= site_phone_number() ?>"><svg class="btn__icon" aria-hidden="true"><use href="#i-phone"/></svg><?= site_text('phone') ?></a>
      <a class="mobile-menu__mail" href="mailto:<?= site_text('email') ?>"><?= site_text('email') ?></a>
    </div>
  </div>
</div>
