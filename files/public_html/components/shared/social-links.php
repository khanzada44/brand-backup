<?php
$networks = [
    'facebook' => ['Facebook', '#i-fb', 'f'],
    'instagram' => ['Instagram', '#i-ig', 'IG'],
    'linkedin' => ['LinkedIn', '', 'in'],
    'x' => ['X', '', 'X'],
    'youtube' => ['YouTube', '', 'YT'],
];
foreach ($networks as $network => [$label, $icon, $initials]):
    $url = site_social_url($network);
    if ($url === '') continue;
    if (($props['variant'] ?? 'icons') === 'text'): ?>
<a href="<?= component_escape($url) ?>" target="_blank" rel="noopener"><?= component_escape($label) ?> <svg aria-hidden="true"><use href="#i-arrow-ne"/></svg></a>
<?php else: ?>
<a class="icon-btn" href="<?= component_escape($url) ?>" target="_blank" rel="noopener" aria-label="<?= component_escape($label) ?>"><?php if ($icon !== ''): ?><svg aria-hidden="true"><use href="<?= component_escape($icon) ?>"/></svg><?php else: ?><span aria-hidden="true"><?= component_escape($initials) ?></span><?php endif; ?></a>
<?php endif; endforeach; ?>
