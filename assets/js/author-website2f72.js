(function () {
  var els = document.querySelectorAll('[data-aw-bg]');
  if (!('IntersectionObserver' in window)) { els.forEach(function (e) { e.classList.add('is-loaded'); }); return; }
  var io = new IntersectionObserver(function (en) { en.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-loaded'); io.unobserve(e.target); } }); }, { rootMargin: '600px 0px' });
  els.forEach(function (e) { io.observe(e); });
})();
