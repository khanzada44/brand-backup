/* New ABS service pages: gentle reveals (elements are softened and offset, never hidden). */
(function () {
  if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var els = document.querySelectorAll('.ns-rv');
  document.documentElement.classList.add('ns-motion');
  var io = new IntersectionObserver(function (es) {
    es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
  }, { rootMargin: '0px 0px -6% 0px' });
  [].forEach.call(els, function (el) { io.observe(el); });
})();
