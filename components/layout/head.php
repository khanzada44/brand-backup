  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="robots" content="<?= $siteConfig['allow_indexing'] ? 'index, follow, max-image-preview:large' : 'noindex, nofollow' ?>">
  <meta name="theme-color" content="<?= component_escape($pageThemeColor ?? '#F6F2EA') ?>">
  <meta property="og:type" content="<?= component_escape($pageOgType ?? 'website') ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:site_name" content="<?= site_text('project_name') ?>">
  <meta property="og:image" content="<?= component_escape(site_url($pageOgImage ?? (string) site_setting('logos.social'))) ?>">
  <link rel="icon" href="favicon/eagle-logo-32.png" sizes="32x32">
  <link rel="icon" href="favicon/eagle-logo-192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="favicon/eagle-logo-180.png">
  <meta name="msapplication-TileImage" content="favicon/eagle-logo-192.png">
  <link rel="preload" href="assets/fonts/manrope-latin.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/fonts/fraunces-latin.woff2" as="font" type="font/woff2" crossorigin>

<?php require __DIR__ . '/../head/styles.php'; ?>
<?php render_component('head/no-js'); ?>
