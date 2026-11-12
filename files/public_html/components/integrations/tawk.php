<?php
// No third-party chat request is emitted unless explicitly enabled with valid IDs.
$propertyId = (string) site_setting('tawk.property_id');
$widgetId = (string) site_setting('tawk.widget_id');
if (site_setting('tawk.enabled') !== true
    || !preg_match('/\A[a-f0-9]{24}\z/i', $propertyId)
    || !preg_match('/\A[a-z0-9]{1,64}\z/i', $widgetId)) {
    return;
}
$embedUrl = 'https://embed.tawk.to/' . $propertyId . '/' . $widgetId;
?>
<script>
  window.Tawk_API = window.Tawk_API || {};
  window.Tawk_LoadStart = new Date();
  (function () {
    var script = document.createElement('script');
    script.async = true;
    script.src = <?= json_encode($embedUrl, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_SLASHES) ?>;
    script.charset = 'UTF-8';
    script.setAttribute('crossorigin', '*');
    document.head.appendChild(script);
  })();
</script>
