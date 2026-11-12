<?php if (site_setting('whatsapp_enabled', false) === true && site_whatsapp_url() !== ''): ?>
<a class="whatsapp-float" href="<?= component_escape(site_whatsapp_url()) ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat with American Authors on WhatsApp">
  <svg viewBox="0 0 32 32" width="27" height="27" aria-hidden="true" focusable="false">
    <path fill="currentColor" d="M16 .8A15.1 15.1 0 0 0 3 23.5L.8 31.2l7.9-2.1A15.2 15.2 0 1 0 16 .8Zm0 27.6c-2.2 0-4.4-.6-6.3-1.7l-.5-.3-4.7 1.2 1.3-4.6-.3-.5A12.4 12.4 0 1 1 16 28.4Zm6.8-9.3c-.4-.2-2.2-1.1-2.6-1.2-.3-.1-.6-.2-.8.2-.3.4-1 1.2-1.2 1.4-.2.3-.4.3-.8.1-.4-.2-1.6-.6-3-1.9-1.1-1-1.9-2.2-2.1-2.6-.2-.4 0-.6.2-.8l.6-.7.4-.6c.1-.2 0-.5 0-.7l-1.2-2.8c-.3-.7-.6-.6-.8-.6h-.7c-.3 0-.7.1-1 .5s-1.3 1.2-1.3 3 1.3 3.4 1.5 3.7c.2.2 2.6 4 6.3 5.5.9.4 1.6.6 2.1.7.9.3 1.7.2 2.3.1.7-.1 2.2-.9 2.5-1.7.3-.9.3-1.6.2-1.7-.1-.2-.3-.3-.7-.5Z"/>
  </svg>
  <span>Chat on WhatsApp</span>
</a>
<?php endif; ?>
