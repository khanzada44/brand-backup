<?php render_component('forms/client-config'); ?>
<script src="assets/js/forms.js?v=20261104" defer></script>
<?php foreach ($pageScripts as $script): ?>
<script src="<?= htmlspecialchars($script, ENT_QUOTES, 'UTF-8') ?>" defer></script>
<?php endforeach; ?>
<?php render_component('integrations/tawk'); ?>
