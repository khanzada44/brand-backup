/* Book Promotion: campaign stages open on hover / focus, and follow the scroll on desktop.
   Without this script the first stage is open and every stage stays readable. */
(function () {
  var list = document.querySelector('[data-pm-stages]');
  if (!list) return;
  var stages = [].slice.call(list.querySelectorAll('[data-pm-stage]'));
  var wide = window.matchMedia('(min-width: 1025px)');
  var hovering = false, current = 0;
  function set(i) {
    if (i === current) return;
    current = i;
    stages.forEach(function (s, k) { s.classList.toggle('is-active', k === i); });
  }
  stages.forEach(function (s, k) {
    s.addEventListener('mouseenter', function () { hovering = true; set(k); });
    s.addEventListener('focus', function () { set(k); });
    s.addEventListener('click', function () { set(k); });
  });
  list.addEventListener('mouseleave', function () { hovering = false; });
  var ticking = false;
  function onScroll() {
    ticking = false;
    if (!wide.matches || hovering) return;
    var r = list.getBoundingClientRect(), vh = window.innerHeight;
    if (r.bottom < 0 || r.top > vh) return;
    // progress: 0 when the list top reaches 85% of the viewport, 1 when it reaches 5%
    var p = (vh * 0.85 - r.top) / (vh * 0.8);
    p = Math.max(0, Math.min(0.999, p));
    set(Math.floor(p * stages.length));
  }
  window.addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(onScroll); } }, { passive: true });
})();
/* Gentle reveals: elements are offset (never hidden) until they enter the viewport. */
(function () {
  if (!('IntersectionObserver' in window)) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var els = document.querySelectorAll('.pm-rv, .pm-w, .pm-mo__list li, .pm-zoom, .pm-mo__wrap, .pm-reveal');
  if (!els.length) return;
  document.documentElement.classList.add('pm-motion');
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
  }, { rootMargin: '0px 0px -6% 0px' });
  [].forEach.call(els, function (el) { io.observe(el); });
})();
