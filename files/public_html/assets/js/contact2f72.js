/* Contact page reveals and selection summary. Shared forms.js owns validation,
   manuscript preview and submission; service/stage fields are posted directly. */
(function () {
  var form = document.querySelector('[data-ct-form]');
  if (form) {
    var summary = form.querySelector('[data-ct-summary]');
    var compose = function () {
      var svc = [].map.call(form.querySelectorAll('[data-ct-service]:checked'), function (i) { return i.value; });
      var st = form.querySelector('[data-ct-stage]:checked');
      var head = [];
      if (svc.length) head.push('Help with: ' + svc.join(', '));
      if (st) head.push('Book journey stage: ' + st.value);
      summary.textContent = head.length ? (svc.length ? svc.join(', ') : '') + (svc.length && st ? ' · ' : '') + (st ? st.value : '') : 'We will receive these selections along with your message.';
      summary.classList.toggle('is-set', !!head.length);
    };
    form.addEventListener('change', compose);
    form.addEventListener('input', compose);
    form.addEventListener('reset', function () { setTimeout(compose, 0); });
    compose();
  }
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var els = document.querySelectorAll('.ct-rv');
    document.documentElement.classList.add('ct-motion');
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
    }, { rootMargin: '0px 0px -6% 0px' });
    [].forEach.call(els, function (el) { io.observe(el); });
  }
})();
