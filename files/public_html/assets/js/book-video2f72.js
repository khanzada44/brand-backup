(function () {
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* Section photographs load only when near the viewport */
  var bgs = document.querySelectorAll('[data-bv-bg]');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (en) { en.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-loaded'); io.unobserve(e.target); } }); }, { rootMargin: '700px 0px' });
    bgs.forEach(function (e) { io.observe(e); });
  } else { bgs.forEach(function (e) { e.classList.add('is-loaded'); }); }

  /* Process timeline: start the playhead when the timeline is in view */
  var tl = document.querySelector('.bv-tl');
  if (tl && 'IntersectionObserver' in window) {
    var to = new IntersectionObserver(function (en) { if (en[0].isIntersecting) { tl.classList.add('is-in'); to.disconnect(); } }, { threshold: 0.3 });
    to.observe(tl);
  } else if (tl) { tl.classList.add('is-in'); }

  /* Illustrative trailer: five graded scenes with a line of text each */
  var player = document.querySelector('[data-player]');
  if (player) {
    var slides = player.querySelectorAll('[data-slide]:not([data-slide="poster"])');
    var poster = player.querySelector('[data-slide="poster"]');
    var caps = player.querySelectorAll('[data-cap]');
    var fill = player.querySelector('[data-fill]');
    var tcEl = player.querySelector('[data-tc]');
    var frames = document.querySelectorAll('.bv-frame');
    var SCENE = 4200, N = slides.length, TOTAL = SCENE * N;
    var t = 0, last = 0, raf = 0, playing = false, cur = -1;

    function show(i) {
      if (i === cur) return; cur = i;
      poster.classList.toggle('is-on', i < 0);
      slides.forEach(function (s, k) {
        if (k === i) { s.classList.remove('is-on'); void s.offsetWidth; s.classList.add('is-on'); } else s.classList.remove('is-on');
        var img = s.querySelector('img'); if (k === i && img.loading === 'lazy') img.loading = 'eager';
      });
      caps.forEach(function (c, k) { c.classList.toggle('is-on', k === i); });
      frames.forEach(function (f, k) { f.classList.toggle('is-current', k === i); });
    }
    function paint() {
      var p = t / TOTAL; fill.style.width = (p * 100).toFixed(2) + '%';
      var secs = Math.floor(p * 102); tcEl.textContent = '0' + Math.floor(secs / 60) + ':' + ('0' + (secs % 60)).slice(-2);
    }
    function tick(now) {
      if (!playing) return;
      t += Math.min(now - last, 100); last = now;
      if (t >= TOTAL) { stop(true); return; }
      show(Math.floor(t / SCENE)); paint();
      raf = requestAnimationFrame(tick);
    }
    function play(from) {
      if (typeof from === 'number') t = from * SCENE + 1;
      if (t >= TOTAL) t = 0;
      slides.forEach(function (s) { var img = s.querySelector('img'); if (img.loading === 'lazy') img.loading = 'eager'; });
      playing = true; player.classList.add('is-playing');
      player.querySelector('[data-toggle]').setAttribute('aria-label', 'Pause');
      last = performance.now(); cancelAnimationFrame(raf); raf = requestAnimationFrame(tick);
      show(Math.floor(t / SCENE));
    }
    function stop(reset) {
      playing = false; cancelAnimationFrame(raf); player.classList.remove('is-playing');
      player.querySelector('[data-toggle]').setAttribute('aria-label', 'Play');
      if (reset) { t = 0; show(-1); paint(); }
    }
    player.querySelector('[data-play]').addEventListener('click', function () { play(); });
    player.querySelector('[data-toggle]').addEventListener('click', function () { playing ? stop(false) : play(); });
    document.querySelectorAll('[data-goto]').forEach(function (b) {
      b.addEventListener('click', function () {
        var i = +b.getAttribute('data-goto');
        player.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'center' });
        play(i);
      });
    });
    var hp = document.querySelector('[data-play-from-hero]');
    if (hp) hp.addEventListener('click', function (e) {
      e.preventDefault();
      player.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'center' });
      setTimeout(function () { play(0); }, reduce ? 0 : 700);
    });
    if ('IntersectionObserver' in window) {
      new IntersectionObserver(function (en) { if (!en[0].isIntersecting && playing) stop(false); }, { threshold: 0.15 }).observe(player);
    }
  }

  /* Genre panels: one lit at a time (hover on desktop, tap everywhere) */
  var gbtns = document.querySelectorAll('[data-genre]');
  function lightGenre(b) { gbtns.forEach(function (x) { x.setAttribute('aria-pressed', x === b ? 'true' : 'false'); }); }
  gbtns.forEach(function (b) {
    b.addEventListener('click', function () { lightGenre(b); });
    b.addEventListener('mouseenter', function () { if (window.matchMedia('(hover: hover) and (min-width: 861px)').matches) lightGenre(b); });
    b.addEventListener('focus', function () { lightGenre(b); });
  });
})();
