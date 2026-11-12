/* Publications catalogue: featured publication controls, reveals and shelf emphasis.
   Enhancement only — every title, cover and link is in the markup and visible without it. */
(function () {
  var items = [].slice.call(document.querySelectorAll('.pub-book[data-featured]'));
  var box = document.querySelector('[data-pub-feature]');
  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (box && items.length) {
    var q = function (s) { return box.querySelector(s); };
    var cover = q('[data-pf-cover]'), title = q('[data-pf-title]'), sub = q('[data-pf-sub]'),
        author = q('[data-pf-author]'), desc = q('[data-pf-desc]'), genre = q('[data-pf-genre]'), idx = q('[data-pf-index]'), prog = q('[data-pf-progress]');
    var thumbs = [].slice.call(box.querySelectorAll('[data-pf-go]'));
    var cur = 0, busy = false;
    var data = items.map(function (li) {
      return { el: li, title: li.getAttribute('data-title'), sub: li.getAttribute('data-sub') || '',
               author: li.getAttribute('data-author'), genre: li.getAttribute('data-genre') || '', cover: li.getAttribute('data-cover'), desc: li.getAttribute('data-desc') || '' };
    });
    var render = function (d) {
      cover.src = d.cover; cover.alt = 'Cover of ' + d.title + ' by ' + d.author;
      title.textContent = d.title; sub.textContent = d.sub; author.textContent = d.author;
      genre.textContent = d.genre; genre.hidden = !d.genre; sub.hidden = !d.sub;
      if (desc) { desc.textContent = d.desc; desc.hidden = !d.desc; }
      idx.textContent = (cur < 9 ? '0' : '') + (cur + 1);
      if (prog) prog.style.width = ((cur + 1) / data.length * 100).toFixed(2) + '%';
      thumbs.forEach(function (t, k) { t.classList.toggle('is-active', k === cur); t.setAttribute('aria-current', k === cur ? 'true' : 'false'); });
    };
    var go = function (i) {
      if (busy) return;
      cur = (i + data.length) % data.length;
      if (reduce) { render(data[cur]); return; }
      busy = true; box.classList.add('is-switching');
      setTimeout(function () {
        render(data[cur]);
        var done = function () { box.classList.remove('is-switching'); busy = false; };
        if (cover.complete) requestAnimationFrame(done); else { cover.onload = done; setTimeout(done, 900); }
      }, 420);
    };
    q('[data-pf-next]').addEventListener('click', function () { go(cur + 1); });
    q('[data-pf-prev]').addEventListener('click', function () { go(cur - 1); });
    thumbs.forEach(function (t) { t.addEventListener('click', function () { go(+t.getAttribute('data-pf-go')); }); });
    // "View publication" opens the same quick view as the shelf
    q('[data-pf-view]').addEventListener('click', function () { var b = data[cur].el.querySelector('.bcard__btn'); if (b) b.click(); });
    box.addEventListener('keydown', function (e) {
      if (e.target.closest('input, textarea')) return;
      if (e.key === 'ArrowRight') { go(cur + 1); } else if (e.key === 'ArrowLeft') { go(cur - 1); }
    });
    render(data[0]);
  }

  // Gentle reveals: elements are offset and softened (never hidden) until they enter view
  if (!reduce && 'IntersectionObserver' in window) {
    var els = document.querySelectorAll('.pub [data-pub-rv], [data-pub-shelf]');
    document.documentElement.classList.add('pub-motion');
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
    }, { rootMargin: '0px 0px -6% 0px' });
    [].forEach.call(els, function (el) { io.observe(el); });
  }
})();
/* Publications shelf: a continuous, seamless shelf that glides slowly past the viewer.
   The visible books are followed by aria-hidden copies (as many as needed to cover the
   viewport); when the shelf has moved by exactly one set it steps back by that set — the
   content at both positions is identical, so the loop never shows a jump. Arrows, drag
   and touch take over briefly and the motion eases back in. The shelf only travels while
   "All" is selected: choosing a category removes the copies and shows that category's
   books once each, standing still.
   Reduced motion: no copies, no motion — the shelf stays a normal manual shelf. */
(function () {
  var shelf = document.querySelector('[data-shelf]');
  if (!shelf) return;
  var track = shelf.querySelector('[data-shelf-track]');
  if (!track || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var SPEED = 32;                 // px per second
  var pos = 0, speed = 0, target = SPEED, last = 0, loopW = 0, wrote = -1, userUntil = 0, hoverBook = false;

  var originals = function () { return [].slice.call(track.querySelectorAll('.pub-book:not([data-clone])')); };
  var clear = function () { [].forEach.call(track.querySelectorAll('[data-clone]'), function (c) { c.remove(); }); };
  var isAll = function () {
    var on = document.querySelector('[data-filters] [data-filter].is-active');
    return !on || on.getAttribute('data-filter') === 'all';
  };
  var build = function () {
    clear();
    var vis = originals().filter(function (li) { return !li.classList.contains('is-hidden'); });
    // A category: only its own books, each once, standing still (arrows and drag still work).
    if (!isAll() || !vis.length) {
      loopW = 0; shelf._loopW = 0; pos = 0; speed = 0; wrote = 0;
      track.style.transform = '';
      shelf.classList.remove('is-loop');
      shelf.scrollLeft = 0;
      shelf.dispatchEvent(new Event('scroll'));
      return;
    }
    shelf.classList.add('is-loop');
    var first = vis[0];
    var mk = function () {
      vis.forEach(function (li) {
        var c = li.cloneNode(true);
        c.setAttribute('data-clone', '');
        c.setAttribute('aria-hidden', 'true');
        ['data-book', 'data-featured'].forEach(function (a) { c.removeAttribute(a); });
        c.classList.remove('is-entering');
        var b = c.querySelector('button'); if (b) b.tabIndex = -1;
        track.appendChild(c);
      });
    };
    mk();
    var firstClone = track.querySelector('[data-clone]');
    loopW = firstClone.offsetLeft - first.offsetLeft;
    // one copy is enough whenever a set is wider than the shelf (so no book is ever on screen twice);
    // more are added only if the set is narrower than the shelf
    var copies = 1;
    while (loopW * copies < shelf.clientWidth + 240 && copies < 6) { mk(); copies++; }
    shelf._loopW = loopW;
    pos = 0; shelf.scrollLeft = 0; wrote = 0;
  };

  // a click on a copy opens the same book as the original
  track.addEventListener('click', function (e) {
    var li = e.target.closest('[data-clone]');
    if (!li) return;
    e.preventDefault(); e.stopPropagation();
    var orig = track.querySelector('.pub-book:not([data-clone])[data-id="' + li.getAttribute('data-id') + '"] button');
    if (orig) orig.click();
  }, true);

  // anything the visitor does takes over for a moment, then the glide eases back in
  var takeOver = function (ms) { userUntil = performance.now() + (ms || 1800); speed = 0; };
  shelf.addEventListener('pointerdown', function () { takeOver(2200); });
  shelf.addEventListener('wheel', function () { takeOver(1800); }, { passive: true });
  shelf.addEventListener('touchstart', function () { takeOver(2600); }, { passive: true });
  [].forEach.call(document.querySelectorAll('[data-rail-prev], [data-rail-next]'), function (b) { b.addEventListener('click', function () { takeOver(1600); }); });
  shelf.addEventListener('scroll', function () {
    if (Math.abs(shelf.scrollLeft - wrote) > 2) userUntil = Math.max(userUntil, performance.now() + 1400);   // moved by the visitor
  }, { passive: true });
  // pause gently over a single book so it can be read
  track.addEventListener('pointerover', function (e) { hoverBook = !!e.target.closest('.pub-book__btn'); });
  track.addEventListener('pointerleave', function () { hoverBook = false; });

  // filters: rebuild the loop from the books that remain
  var bar = document.querySelector('[data-filters]');
  if (bar) bar.addEventListener('click', function (e) { if (e.target.closest('[data-filter]')) setTimeout(build, 60); });

  var tick = function (now) {
    var dt = last ? Math.min(0.05, (now - last) / 1000) : 0; last = now;
    var user = now < userUntil;
    target = (user || hoverBook || document.hidden) ? 0 : SPEED;
    speed += (target - speed) * Math.min(1, dt * (target ? 1.2 : 6));   // ease in slowly, ease out quickly
    if (user || !loopW) {
      if (track.style.transform) track.style.transform = '';
      if (loopW && shelf.scrollLeft >= loopW) { shelf.scrollLeft -= loopW; }
      pos = shelf.scrollLeft; wrote = pos;
    } else {
      pos += speed * dt;
      if (pos >= loopW) pos -= loopW;
      // whole pixels by scrolling, the remaining fraction by transform: smooth at any speed
      var whole = Math.floor(pos);
      if (whole !== shelf.scrollLeft) { shelf.scrollLeft = whole; wrote = shelf.scrollLeft; }
      track.style.transform = 'translate3d(' + (-(pos - whole)).toFixed(2) + 'px,0,0)';
    }
    requestAnimationFrame(tick);
  };
  shelf.classList.add('is-loop');
  var start = function () { build(); requestAnimationFrame(tick); };
  if (document.readyState === 'complete') start(); else window.addEventListener('load', start);
  window.addEventListener('resize', function () { clearTimeout(shelf._rz); shelf._rz = setTimeout(build, 200); });
})();
/* Publications catalogue: every mockup, cover and index row opens the same quick view as the shelf;
   category links filter the shelf; the index shows the book beside the list. Enhancement only. */
(function () {
  var $$ = function (s, r) { return [].slice.call((r || document).querySelectorAll(s)); };
  var shelfBtn = function (id) { var li = document.querySelector('.pub-book[data-id="' + id + '"]'); return li && li.querySelector('.bcard__btn'); };
  $$('[data-pc-open]').forEach(function (b) {
    b.addEventListener('click', function () { var t = shelfBtn(b.getAttribute('data-pc-open')); if (t) t.click(); });
  });
  $$('[data-pc-filter]').forEach(function (b) {
    b.addEventListener('click', function () {
      var g = b.getAttribute('data-pc-filter'), shelf = document.getElementById('pub-shelf');
      $$('[data-filter]').forEach(function (f) { if (f.getAttribute('data-filter') === g) f.click(); });
      if (shelf) shelf.scrollIntoView({ behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth', block: 'start' });
    });
  });
  // index: the hovered or focused title's book appears in the plate beside the list
  var box = document.querySelector('[data-pc-peek-box]');
  if (box) {
    var img = box.querySelector('[data-pc-peek-img]'), no = box.querySelector('[data-pc-peek-no]'), cur = null, timer;
    var show = function (row) {
      if (row === cur) return;
      if (cur) cur.classList.remove('is-active');
      cur = row; row.classList.add('is-active');
      var src = row.getAttribute('data-pc-peek');
      clearTimeout(timer); box.classList.add('is-switching');
      timer = setTimeout(function () {
        var done = function () { box.classList.remove('is-switching'); };
        img.onload = done; img.src = src; no.textContent = row.getAttribute('data-pc-no');
        if (img.complete) done(); else setTimeout(done, 900);
      }, 180);
    };
    $$('.pc-row').forEach(function (row) {
      row.addEventListener('pointerenter', function () { show(row); });
      row.addEventListener('focus', function () { show(row); });
    });
  }
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    document.documentElement.classList.add('pc-motion');
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
    }, { rootMargin: '0px 0px -6% 0px' });
    $$('.pc-rv').forEach(function (el) { io.observe(el); });
  }
})();
