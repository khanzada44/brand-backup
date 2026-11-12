<footer class="footer on-dark">
  <div class="container">
    <div class="footer__top">
      <div class="footer__brand">
        <img src="<?= site_text('logos.footer') ?>" width="800" height="320" alt="<?= site_text('project_name') ?>" loading="lazy">
        <p><?= site_text('project_name') ?> helps authors develop manuscripts and prepare books for readers. Ask us about writing, editing, design, publishing and promotion, whether you need one service or support across the project.</p>
        <div class="footer__social">
          <?php render_component('shared/social-links'); ?>
        </div>
      </div>
      <nav class="footer__col" aria-label="Our services">
        <p class="label">Book Services</p>
        <ul role="list">
          <li><a href="ghostwriting">Ghostwriting</a></li>
          <li><a href="book-editing">Book Editing &amp; Formatting</a></li>
          <li><a href="book-publishing">Book Publishing</a></li>
          <li><a href="book-promotion">Book Promotion &amp; Marketing</a></li>
          <li><a href="audio-book">Audiobook Production</a></li>
          <li><a href="author-website">Author Website</a></li>
          <li><a href="copyrights-isbn">Copyrights &amp; ISBN</a></li>
          <li><a href="global-distribution">Global Distribution</a></li>
          <li><a href="podcasts">Podcasts</a></li>
          <li><a href="book-fairs">Book Fairs</a></li>
          <li><a href="./#services">All services</a></li>
        </ul>
      </nav>
      <nav class="footer__col" aria-label="Quick links">
        <p class="label">Explore More</p>
        <ul role="list">
          <li><a href="book-video">Book Video</a></li>
          <li><a href="book-cover-design">Book Cover Design</a></li>
          <li><a href="illustration">Illustration</a></li>
          <li><a href="blogs">Blogs</a></li>
          <li><a href="terms-and-conditions">Terms &amp; Conditions</a></li>
          <li><a href="privacy-policy">Privacy Policy</a></li>
        </ul>
      </nav>
      <div class="footer__col">
        <p class="label">Contact Our Team</p>
        <ul role="list" class="footer__contact">
          <li><a href="mailto:<?= site_text('email') ?>"><?= site_text('email') ?></a></li>
          <li><a href="tel:<?= site_phone_number() ?>"><?= site_text('phone') ?></a></li>
          <li><?= component_escape(site_address()) ?></li>
        </ul>
        <button class="btn btn--primary btn--sm" type="button" data-open-lead>Plan Your Book</button>
      </div>
    </div>
    <div class="footer__bottom">
      <p>© <span data-year>2026</span> <?= site_text('project_name') ?>. All rights reserved.</p>
      <div class="footer__badges">
        <img src="assets/images/site/payment-methods.webp" width="200" height="39" alt="Accepted payment methods" loading="lazy">
        <?php if (site_social_url('trustpilot') !== ''): ?>
        <a href="<?= component_escape(site_social_url('trustpilot')) ?>" target="_blank" rel="noopener"><img src="assets/images/site/trustpilot.webp" width="145" height="70" alt="Review us on Trustpilot" loading="lazy"></a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</footer>
<?php render_component('shared/whatsapp'); ?>
