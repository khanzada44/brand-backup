<nav class="rail" aria-label="Page sections" data-rail>
<?php foreach ($props['links'] as $link): ?>
  <a href="<?= component_escape($link['href']) ?>"<?php if (isset($link['section'])): ?> data-rail-link="<?= component_escape($link['section']) ?>"<?php endif; ?> aria-label="<?= component_escape($link['label']) ?>"><svg aria-hidden="true"><use href="<?= component_escape($link['icon']) ?>"/></svg><span><?= component_escape($link['text']) ?></span></a>
<?php endforeach; ?>
</nav>
