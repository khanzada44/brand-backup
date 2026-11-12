/* About page: gentle reveals (offset + softened, never hidden). */
(function () {
  if (!('IntersectionObserver' in window)) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var els = document.querySelectorAll('.ab-rv');
  if (!els.length) return;
  document.documentElement.classList.add('ab-motion');
  var io = new IntersectionObserver(function (es) {
    es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
  }, { rootMargin: '0px 0px -6% 0px' });
  [].forEach.call(els, function (el) { io.observe(el); });
})();
