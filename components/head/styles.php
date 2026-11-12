<?php
// Reused stylesheet URLs are defined here once; pages select an alias or a unique file.
$sharedStyles = [
    'services' => 'assets/css/services-plus2f72.css?v=20261003',
    'article' => 'assets/css/article2f72.css?v=20261003',
    'legal' => 'assets/css/legal2f72.css?v=20261003',
];
// The homepage has its own combined stylesheet.
if ($currentPage !== 'index.php'): ?>
  <link rel="stylesheet" href="assets/css/site2f72.css?v=20261109-eagle-logo">
<?php endif; ?>
<?php foreach ($pageStyles as $stylesheet): ?>
  <link rel="stylesheet" href="<?= component_escape($sharedStyles[$stylesheet] ?? $stylesheet) ?>">
<?php endforeach; ?>

<link rel="stylesheet" href="assets/css/forms.css?v=20261105-production">
<link rel="stylesheet" href="assets/css/widgets.css?v=20261105">
