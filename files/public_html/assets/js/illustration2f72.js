(function () {
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var hasIO = 'IntersectionObserver' in window;
  function watch(els, fn, opts) {
    if (!hasIO) { els.forEach(fn); return; }
    var io = new IntersectionObserver(function (en) { en.forEach(function (e) { if (e.isIntersecting) { fn(e.target); io.unobserve(e.target); } }); }, opts);
    els.forEach(function (e) { io.observe(e); });
  }
  /* Section photographs load only when near the viewport */
  watch(document.querySelectorAll('[data-il-bg]'), function (e) { e.classList.add('is-loaded'); }, { rootMargin: '700px 0px' });
  /* Process: the pencil line draws itself once */
  watch(document.querySelectorAll('[data-draw]'), function (e) { e.classList.add('is-drawn'); }, { threshold: 0.3 });

  /* Sketch to finish: four stages of one artwork */
  var box = document.querySelector('[data-stages]');
  if (box) {
    var sec = box.closest('section');
    var tabs = sec.querySelectorAll('[data-stage]'), views = sec.querySelectorAll('[data-view]'), notes = sec.querySelectorAll('[data-note]');
    var cur = 0, timer = null, touched = false;
    function go(i) {
      cur = i;
      tabs.forEach(function (t, k) { t.classList.toggle('is-on', k === i); t.setAttribute('aria-pressed', k === i ? 'true' : 'false'); });
      views.forEach(function (v, k) { v.classList.toggle('is-on', k === i); });
      notes.forEach(function (n, k) { n.classList.toggle('is-on', k === i); });
    }
    tabs.forEach(function (t) { t.addEventListener('click', function () { touched = true; clearInterval(timer); go(+t.getAttribute('data-stage')); }); });
    if (!reduce) watch([box], function () {
      timer = setInterval(function () { if (touched || cur >= tabs.length - 1) { clearInterval(timer); return; } go(cur + 1); }, 2800);
    }, { threshold: 0.45 });
  }
  /* Children's book project: a plate opens larger in a quiet viewer (Esc, arrow keys, or a click outside the artwork closes/steps) */
  var zoom = [].slice.call(document.querySelectorAll('[data-il-zoom]')), lb = document.querySelector('[data-il-lb]');
  if (zoom.length && lb && lb.showModal) {
    var big = lb.querySelector('[data-il-lb-img]'), count = lb.querySelector('[data-il-lb-count]'), at = 0, opener = null;
    var two = function (n) { return (n < 10 ? '0' : '') + n; };
    var show = function (i) {
      at = (i + zoom.length) % zoom.length;
      var im = zoom[at].querySelector('img');
      big.src = im.getAttribute('data-full') || im.currentSrc || im.src; big.alt = im.alt;   // the full plate, when a smaller file is on the page
      count.textContent = two(at + 1) + ' / ' + two(zoom.length);
    };
    zoom.forEach(function (b, i) { b.addEventListener('click', function () { opener = b; show(i); lb.showModal(); document.documentElement.classList.add('il-lb-open'); }); });
    lb.querySelector('[data-il-lb-prev]').addEventListener('click', function () { show(at - 1); });
    lb.querySelector('[data-il-lb-next]').addEventListener('click', function () { show(at + 1); });
    lb.querySelector('[data-il-lb-close]').addEventListener('click', function () { lb.close(); });
    lb.addEventListener('click', function (e) { if (e.target === lb || e.target.hasAttribute('data-il-lb-stage')) lb.close(); });
    lb.addEventListener('keydown', function (e) { if (e.key === 'ArrowRight') show(at + 1); else if (e.key === 'ArrowLeft') show(at - 1); });
    lb.addEventListener('close', function () { document.documentElement.classList.remove('il-lb-open'); if (opener) opener.focus(); });
  }
})();
