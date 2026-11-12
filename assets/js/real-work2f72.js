/* Real work: gentle reveals, and the "in focus" line that names the book under the pointer. */
(function () {
  [].forEach.call(document.querySelectorAll('[data-rw-table]'), function (t) {
    var sec = t.parentElement, now = sec.querySelector('[data-rw-now] .rw-now__main');
    if (!now) return;
    var lead = t.querySelector('.is-lead'), cur = null;
    var show = function (b) {
      if (!b || b === cur) return; cur = b;
      var cap = b.querySelector('.rw-cap').cloneNode(true), go = cap.querySelector('.rw-cap__go');
      if (go) go.remove();
      now.innerHTML = cap.innerHTML;
    };
    [].forEach.call(t.querySelectorAll('.rw-book'), function (b) {
      b.addEventListener('pointerenter', function () { show(b); });
      b.addEventListener('focus', function () { show(b); });
    });
    t.addEventListener('pointerleave', function () { show(lead); });
  });
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    var els = document.querySelectorAll('.rw-rv');
    document.documentElement.classList.add('rw-motion');
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
    }, { rootMargin: '0px 0px -6% 0px' });
    [].forEach.call(els, function (el) { io.observe(el); });
  }
})();
