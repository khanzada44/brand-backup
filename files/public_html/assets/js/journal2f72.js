/* Journal reveal effects. Form validation/submission is handled by forms.js. */
(function () {
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var els = document.querySelectorAll('.jn-rv');
    document.documentElement.classList.add('jn-motion');
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
    }, { rootMargin: '0px 0px -6% 0px' });
    [].forEach.call(els, function (el) { io.observe(el); });
  }
})();
