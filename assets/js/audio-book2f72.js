/* Hero waveform: static bars, a slow gentle sway only while the hero is on screen. */
(function () {
  var w = document.querySelector('[data-wave]'); if (!w) return;
  var n = window.matchMedia('(max-width: 760px)').matches ? 34 : 64, s = '';
  for (var i = 0; i < n; i++) {
    var h = 0.22 + 0.78 * Math.abs(Math.sin(i * 0.61) * Math.cos(i * 0.23 + 1.3));
    s += '<i style="--h:' + h.toFixed(2) + ';--i:' + i + '"></i>';
  }
  w.innerHTML = s;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) return;
  new IntersectionObserver(function (e) { w.classList.toggle('is-live', e[0].isIntersecting); }).observe(w);
})();
