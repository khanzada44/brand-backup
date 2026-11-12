<?php
$collections = require __DIR__ . '/../data/author-titles.php';
$titles = $collections[$props['collection']];
$numbered = $props['numbered'] ?? false;
?>
<div class="<?= $numbered ? 'rw-spread__books rw-spread__books--type' : 'rw-spread__of' ?>"><p class="rw-label"><?= $numbered ? 'Titles' : 'Author of' ?></p><?php if ($numbered): ?><ol role="list"><?php else: ?><ul role="list"><?php endif; ?><?php foreach ($titles as $index => $title): ?><li><?php if ($numbered): ?><span><?= sprintf('%02d', $index + 1) ?></span><?php endif; ?><?= component_escape(html_entity_decode($title, ENT_QUOTES, 'UTF-8')) ?></li><?php endforeach; ?><?php if ($numbered): ?></ol><?php else: ?></ul><?php endif; ?></div>
