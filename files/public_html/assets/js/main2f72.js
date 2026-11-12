/* ==========================================================================
   Homepage interactions
   Vanilla JS, no dependencies. Every feature is progressive: the page is fully
   readable and navigable without this file.
   ========================================================================== */
(function () {
  'use strict';

  var $ = function (s, c) { return (c || document).querySelector(s); };
  var $$ = function (s, c) { return Array.prototype.slice.call((c || document).querySelectorAll(s)); };
  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  /* ---------- Header: glass intensifies on scroll, hides on fast scroll down ---------- */
  var header = $('[data-header]');
  var rail = $('[data-rail]');
  var lastY = window.scrollY;
  var ticking = false;
  function onScroll() {
    var y = window.scrollY;
    if (header) {
      header.classList.toggle('is-scrolled', y > 24);
      var menuOpen = document.body.classList.contains('menu-open');
      header.classList.toggle('is-hidden', !menuOpen && y > 600 && y > lastY + 4);
      if (y < lastY - 4) header.classList.remove('is-hidden');
    }
    if (rail) rail.classList.toggle('is-visible', y > window.innerHeight * 0.6);
    lastY = y;
    ticking = false;
  }
  window.addEventListener('scroll', function () {
    if (!ticking) { ticking = true; requestAnimationFrame(onScroll); }
  }, { passive: true });
  onScroll();

  /* ---------- Desktop dropdown ---------- */
  $$('[data-dropdown]').forEach(function (item) {
    var btn = $('button', item);
    var closeT;
    function open() { clearTimeout(closeT); item.classList.add('is-open'); btn.setAttribute('aria-expanded', 'true'); }
    function close() { item.classList.remove('is-open'); btn.setAttribute('aria-expanded', 'false'); }
    btn.addEventListener('click', function () { item.classList.contains('is-open') ? close() : open(); });
    if (finePointer) {
      item.addEventListener('mouseenter', open);
      item.addEventListener('mouseleave', function () { closeT = setTimeout(close, 160); });
    }
    item.addEventListener('focusout', function (e) { if (!item.contains(e.relatedTarget)) close(); });
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape' && item.classList.contains('is-open')) { close(); btn.focus(); } });
    document.addEventListener('click', function (e) { if (!item.contains(e.target)) close(); });
  });

  /* ---------- Mobile menu ---------- */
  var burger = $('[data-burger]');
  var mMenu = $('[data-mobile-menu]');
  var menuBackground = [];
  function setMenu(open) {
    if (!mMenu) return;
    burger.setAttribute('aria-expanded', String(open));
    burger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    document.body.classList.toggle('menu-open', open);
    document.body.classList.toggle('is-locked', open);
    if (open) {
      menuBackground = $$('main, .footer, [data-rail], .nav__logo, .nav__menu, .nav__phone, .nav__cta').map(function (element) {
        var previous = element.inert;
        element.inert = true;
        return { element: element, previous: previous };
      });
      mMenu.hidden = false;
      requestAnimationFrame(function () { mMenu.classList.add('is-open'); });
    } else {
      menuBackground.forEach(function (item) { item.element.inert = item.previous; });
      menuBackground = [];
      if (mMenu.contains(document.activeElement) && burger.getClientRects().length) burger.focus();
      mMenu.classList.remove('is-open');
      mMenu.inert = true;
      setTimeout(function () { if (!mMenu.classList.contains('is-open')) mMenu.hidden = true; }, 400);
    }
    if (open) mMenu.inert = false;
  }
  if (burger) burger.addEventListener('click', function () { setMenu(burger.getAttribute('aria-expanded') !== 'true'); });
  $$('[data-m-close]').forEach(function (a) { a.addEventListener('click', function () { setMenu(false); }); });
  $$('[data-m-toggle]').forEach(function (t) {
    t.addEventListener('click', function () {
      var sub = document.getElementById(t.getAttribute('aria-controls'));
      var open = t.getAttribute('aria-expanded') !== 'true';
      t.setAttribute('aria-expanded', String(open));
      sub.hidden = !open;
    });
  });
  document.addEventListener('keydown', function (e) {
    if (!document.body.classList.contains('menu-open')) return;
    if (e.key === 'Escape') { setMenu(false); burger.focus(); }
    if (e.key === 'Tab') {
      var controls = [burger].concat($$('a[href], button, input, select, textarea, [tabindex]', mMenu)).filter(function (element) {
        return !element.disabled && element.tabIndex >= 0 && element.getClientRects().length;
      });
      var first = controls[0], last = controls[controls.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });
  window.addEventListener('resize', function () { if (window.innerWidth > 1180 && document.body.classList.contains('menu-open')) setMenu(false); });

  /* ---------- Reveal on scroll ---------- */
  var revealEls = $$('[data-reveal]');
  if ('IntersectionObserver' in window && !reduceMotion) {
    var ro = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('is-in'); ro.unobserve(en.target); } });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
    revealEls.forEach(function (el) { ro.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
  }

  /* ---------- Editorial section photographs: load only when near the viewport ---------- */
  var edBgs = $$('.ed-bg');
  if ('IntersectionObserver' in window) {
    var bo = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) { if (en.isIntersecting) { en.target.classList.add('is-loaded'); bo.unobserve(en.target); } });
    }, { rootMargin: '900px 0px 900px 0px' });
    edBgs.forEach(function (el) { bo.observe(el); });
  } else {
    edBgs.forEach(function (el) { el.classList.add('is-loaded'); });
  }

  /* ---------- Subtle parallax (transform only, rAF, visible elements only) ---------- */
  var para = $$('[data-parallax]');
  if (para.length && !reduceMotion) {
    var paraTick = false;
    var updatePara = function () {
      var vh = window.innerHeight;
      para.forEach(function (el) {
        var host = el.parentElement.getBoundingClientRect();
        if (host.bottom < 0 || host.top > vh) return;
        var speed = parseFloat(el.getAttribute('data-parallax')) || 0.15;
        var offset = (host.top + host.height / 2 - vh / 2) * -speed;
        el.style.translate = '0 ' + offset.toFixed(1) + 'px';
      });
      paraTick = false;
    };
    window.addEventListener('scroll', function () { if (!paraTick) { paraTick = true; requestAnimationFrame(updatePara); } }, { passive: true });
    updatePara();
  }

  /* ---------- 3D book pointer tilt ---------- */
  function attachTilt(el) {
    if (!finePointer || reduceMotion) return;
    var base = getComputedStyle(el);
    var ry0 = parseFloat(base.getPropertyValue('--ry')) || -26;
    var rx0 = parseFloat(base.getPropertyValue('--rx')) || 0;
    var zone = el.closest('.stage, .modal__panel') || el;
    zone.addEventListener('pointermove', function (e) {
      var r = el.getBoundingClientRect();
      var dx = (e.clientX - (r.left + r.width / 2)) / r.width;
      var dy = (e.clientY - (r.top + r.height / 2)) / r.height;
      el.style.setProperty('--ry', (ry0 + dx * 16).toFixed(2) + 'deg');
      el.style.setProperty('--rx', (rx0 - dy * 8).toFixed(2) + 'deg');
    });
    zone.addEventListener('pointerleave', function () { el.style.removeProperty('--ry'); el.style.removeProperty('--rx'); });
  }
  $$('[data-tilt]').forEach(attachTilt);

  /* ---------- Book data (read from the publications markup — single source of truth) ---------- */
  var books = $$('[data-book]').map(function (li) {
    return {
      el: li,
      title: li.getAttribute('data-title'),
      sub: li.getAttribute('data-sub') || '',
      author: li.getAttribute('data-author'),
      genre: li.getAttribute('data-genre') || '',
      cover: li.getAttribute('data-cover'),
      featured: li.hasAttribute('data-featured')
    };
  });

  /* ---------- Featured book carousel (hero) ---------- */
  var feature = $('[data-feature]');
  var featured = books.filter(function (b) { return b.featured; });
  var fIndex = 0, fTimer = null;
  var F_DUR = 7000;
  if (feature && featured.length) {
    var fCover = $('[data-feature-cover]', feature);
    var fTitle = $('[data-feature-title]', feature);
    var fSub = $('[data-feature-sub]', feature);
    var fAuthor = $('[data-feature-author]', feature);
    var fGenre = $('[data-feature-genre]', feature);
    var fIdx = $('[data-feature-index]', feature);
    var fTot = $('[data-feature-total]', feature);
    var fProg = $('[data-feature-progress]', feature);
    var pad = function (n) { return (n < 10 ? '0' : '') + n; };
    fTot.textContent = pad(featured.length);

    // Preload the featured covers so switching is instant
    featured.forEach(function (b) { var i = new Image(); i.decoding = 'async'; i.src = b.cover; });

    var restartProgress = function () {
      if (reduceMotion) return;
      fProg.classList.remove('is-running');
      void fProg.offsetWidth;
      fProg.style.setProperty('--dur', F_DUR + 'ms');
      fProg.classList.add('is-running');
    };
    var render = function (b) {
      fCover.src = b.cover;
      fCover.alt = 'Cover of ' + b.title + (b.author ? ' by ' + b.author : '');
      fTitle.textContent = b.title;
      fSub.textContent = b.sub;
      fAuthor.textContent = b.author;
      fGenre.textContent = b.genre;
      fIdx.textContent = pad(fIndex + 1);
    };
    var go = function (i) {
      fIndex = (i + featured.length) % featured.length;
      if (reduceMotion) { render(featured[fIndex]); return; }
      feature.classList.add('is-switching');
      setTimeout(function () {
        render(featured[fIndex]);
        var done = function () { feature.classList.remove('is-switching'); };
        if (fCover.complete) requestAnimationFrame(done); else { fCover.onload = done; setTimeout(done, 900); }
      }, 380);
      restartProgress();
    };
    var schedule = function () {
      clearInterval(fTimer);
      if (reduceMotion) return;
      fTimer = setInterval(function () { if (!feature.matches(':hover') && !document.hidden) go(fIndex + 1); }, F_DUR);
    };
    $('[data-feature-next]', feature).addEventListener('click', function () { go(fIndex + 1); schedule(); });
    $('[data-feature-prev]', feature).addEventListener('click', function () { go(fIndex - 1); schedule(); });
    $('[data-feature-view]', feature).addEventListener('click', function () { openBook(featured[fIndex]); });
    render(featured[0]);
    restartProgress();
    schedule();
  }

  /* ---------- Publications shelf: arrows, drag, progress ---------- */
  var shelf = $('[data-shelf]');
  if (shelf) {
    var prog = $('[data-shelf-progress]');
    var step = function () { var c = $('.bcard:not(.is-hidden)', shelf); return c ? c.getBoundingClientRect().width + 14 : 220; };
    var updateShelf = function () {
      if (shelf._loopW) {   // continuous shelf: progress runs through one set of books, arrows always available
        var lw = shelf._loopW, lv = Math.min(1, shelf.clientWidth / (lw + shelf.clientWidth)), lp = (shelf.scrollLeft % lw) / lw;
        if (prog) { prog.style.width = (lv * 100).toFixed(2) + '%'; prog.style.transform = 'translateX(' + (lp * (1 / lv - 1) * 100).toFixed(2) + '%)'; }
        var pv = $('[data-rail-prev]'), nx = $('[data-rail-next]'); if (pv) pv.disabled = false; if (nx) nx.disabled = false;
        return;
      }
      var max = shelf.scrollWidth - shelf.clientWidth;
      var vis = shelf.clientWidth / shelf.scrollWidth;
      var p = max > 0 ? shelf.scrollLeft / max : 0;
      if (prog) { prog.style.width = (vis * 100).toFixed(2) + '%'; prog.style.transform = 'translateX(' + (p * (1 / vis - 1) * 100).toFixed(2) + '%)'; }
      var prev = $('[data-rail-prev]'), next = $('[data-rail-next]');
      if (prev) prev.disabled = shelf.scrollLeft < 4;
      if (next) next.disabled = shelf.scrollLeft > max - 4;
    };
    shelf.addEventListener('scroll', function () { requestAnimationFrame(updateShelf); }, { passive: true });
    window.addEventListener('resize', updateShelf);
    updateShelf();
    var prevBtn = $('[data-rail-prev]'), nextBtn = $('[data-rail-next]');
    if (prevBtn) prevBtn.addEventListener('click', function () { shelf.scrollBy({ left: -step() * 2, behavior: reduceMotion ? 'auto' : 'smooth' }); });
    if (nextBtn) nextBtn.addEventListener('click', function () { shelf.scrollBy({ left: step() * 2, behavior: reduceMotion ? 'auto' : 'smooth' }); });

    // Mouse drag-to-scroll (touch uses native scrolling)
    var down = false, moved = false, sx = 0, sl = 0;
    shelf.addEventListener('pointerdown', function (e) {
      if (e.pointerType !== 'mouse' || e.button !== 0) return;
      down = true; moved = false; sx = e.clientX; sl = shelf.scrollLeft;
    });
    window.addEventListener('pointermove', function (e) {
      if (!down) return;
      var dx = e.clientX - sx;
      if (!moved && Math.abs(dx) > 6) { moved = true; shelf.classList.add('is-dragging'); }
      if (moved) shelf.scrollLeft = sl - dx;
    });
    window.addEventListener('pointerup', function () {
      if (!down) return;
      down = false;
      if (moved) {
        shelf.classList.remove('is-dragging');
        // let snap settle to the nearest card
        var s = step(); shelf.scrollTo({ left: Math.round(shelf.scrollLeft / s) * s, behavior: 'smooth' });
      }
    });
    shelf.addEventListener('click', function (e) { if (moved) { e.preventDefault(); e.stopPropagation(); moved = false; } }, true);
  }

  /* ---------- Dialogs (lead form + book quick view) ---------- */
  var leadModal = $('[data-lead-modal]');
  var bookModal = $('[data-book-modal]');
  var lastFocus = null;
  function openDialog(d) {
    if (!d) return;
    lastFocus = document.activeElement;
    $$('dialog[open]').forEach(function (o) { if (o !== d) o.close(); });
    if (typeof d.showModal === 'function') d.showModal(); else d.setAttribute('open', '');
    document.body.classList.add('is-locked');
  }
  function closeDialog(d) {
    if (typeof d.close === 'function') d.close(); else d.removeAttribute('open');
  }
  $$('dialog').forEach(function (d) {
    d.addEventListener('close', function () {
      if (!$('dialog[open]') && !document.body.classList.contains('menu-open')) document.body.classList.remove('is-locked');
      if (lastFocus && lastFocus.focus) lastFocus.focus();
    });
    d.addEventListener('click', function (e) { if (e.target === d) closeDialog(d); }); // backdrop click
    $$('[data-close-modal]', d).forEach(function (b) { b.addEventListener('click', function () { closeDialog(d); }); });
  });
  $$('[data-open-lead]').forEach(function (b) {
    b.addEventListener('click', function () {
      if (document.body.classList.contains('menu-open')) setMenu(false);
      openDialog(leadModal);
      var first = leadModal && $('input', leadModal);
      if (first) setTimeout(function () { first.focus(); }, 60);
    });
  });

  function openBook(b) {
    if (!bookModal || !b) return;
    $('[data-bm-cover]', bookModal).src = b.cover;
    $('[data-bm-cover]', bookModal).alt = 'Cover of ' + b.title + (b.author ? ' by ' + b.author : '');
    $('[data-bm-title]', bookModal).textContent = b.title;
    $('[data-bm-sub]', bookModal).textContent = b.sub;
    $('[data-bm-author]', bookModal).textContent = b.author;
    $('[data-bm-author]', bookModal).parentNode.hidden = !b.author;
    openDialog(bookModal);
  }
  books.forEach(function (b) {
    var btn = $('.bcard__btn', b.el);
    if (btn) btn.addEventListener('click', function () { openBook(b); });
  });

  // Sidebar catalogue rows open the same quick view
  $$('[data-open-book]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var t = btn.getAttribute('data-open-book');
      openBook(books.filter(function (b) { return b.title === t; })[0]);
    });
  });

  /* ---------- Publication filters (genre pills) ---------- */
  var filterBar = $('[data-filters]');
  if (filterBar && shelf) {
    var fBtns = $$('[data-filter]', filterBar);
    fBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var g = btn.getAttribute('data-filter');
        fBtns.forEach(function (b) { var on = b === btn; b.classList.toggle('is-active', on); b.setAttribute('aria-pressed', String(on)); });
        books.forEach(function (b, i) {
          var show = g === 'all' || b.genre === g;
          b.el.classList.toggle('is-hidden', !show);
          if (show && !reduceMotion) {
            b.el.classList.add('is-entering');
            setTimeout(function () { b.el.classList.remove('is-entering'); }, 30 + i * 35);
          }
        });
        shelf.scrollTo({ left: 0, behavior: 'auto' });
        shelf.dispatchEvent(new Event('scroll'));
      });
    });
  }

  /* ---------- Services: active row drives the sticky visual ---------- */
  var svcs = $$('[data-svc]');
  var svcVisual = $('.svc-visual');
  if (svcs.length) {
    var vCover = $('[data-svc-cover]');
    var vCap = $('[data-svc-caption]');
    var vNum = $('[data-svc-num]');
    var current = null;
    var activate = function (li) {
      if (li === current) return;
      svcs.forEach(function (s) { s.classList.toggle('is-active', s === li); });
      current = li;
      if (!svcVisual || getComputedStyle(svcVisual).display === 'none') return;
      var n = String(svcs.indexOf(li) + 1).padStart(2, '0');
      svcVisual.classList.add('is-switching');
      setTimeout(function () {
        vCover.src = li.getAttribute('data-cover');
        vCap.textContent = li.getAttribute('data-caption');
        vNum.textContent = li.classList.contains('svc--compact') ? '07' : n;
        var done = function () { svcVisual.classList.remove('is-switching'); };
        if (vCover.complete) requestAnimationFrame(done); else { vCover.onload = done; setTimeout(done, 800); }
      }, 260);
    };
    svcs.forEach(function (li) {
      // Activate on real pointer movement only: the active row expands, and the
      // browser's synthetic hover events during that reflow would otherwise
      // cascade the highlight down the list under a stationary cursor.
      li.addEventListener('mousemove', function (e) { if (e.movementX || e.movementY) activate(li); });
      li.addEventListener('focusin', function () { activate(li); });
    });
    activate(svcs[0]);
    // Preload service visuals after load (lazy, non-blocking)
    window.addEventListener('load', function () {
      setTimeout(function () { svcs.forEach(function (li) { var i = new Image(); i.src = li.getAttribute('data-cover'); }); }, 1500);
    });
  }

  /* ---------- Process: active step + progress line + ring ---------- */
  var process = $('[data-process]');
  if (process) {
    var steps = $$('[data-step]', process);
    var list = $('.steps', process);
    var ring = $('[data-process-ring]', process);
    var stageNum = $('[data-process-stage]', process);
    var stageName = $('[data-process-name]', process);
    var C = 2 * Math.PI * 94;
    var setActive = function (i) {
      steps.forEach(function (s, k) { s.classList.toggle('is-active', k === i); });
      if (ring) ring.style.strokeDashoffset = (C - C * ((i + 1) / steps.length)).toFixed(1);
      if (stageNum) stageNum.textContent = String(i + 1).padStart(2, '0');
      if (stageName) stageName.textContent = steps[i].getAttribute('data-name');
    };
    var procTick = false;
    var updateProcess = function () {
      var mid = window.innerHeight * 0.55;
      var active = 0;
      steps.forEach(function (s, k) { if (s.getBoundingClientRect().top < mid) active = k; });
      setActive(active);
      var r = list.getBoundingClientRect();
      var p = Math.min(1, Math.max(0, (mid - r.top) / r.height));
      list.style.setProperty('--p', p.toFixed(3));
      procTick = false;
    };
    window.addEventListener('scroll', function () { if (!procTick) { procTick = true; requestAnimationFrame(updateProcess); } }, { passive: true });
    updateProcess();
  }

  /* ---------- Testimonials ---------- */
  var reviews = $('[data-reviews]');
  if (reviews) {
    var items = $$('[data-review]', reviews);
    var dots = $$('[data-review-dot]', reviews);
    var rIdx = 0, rTimer;
    var showReview = function (i) {
      rIdx = (i + items.length) % items.length;
      items.forEach(function (q, k) { q.classList.toggle('is-active', k === rIdx); q.setAttribute('aria-hidden', String(k !== rIdx)); });
      dots.forEach(function (d, k) { d.setAttribute('aria-selected', String(k === rIdx)); });
    };
    var autoplay = function () { clearInterval(rTimer); if (!reduceMotion) rTimer = setInterval(function () { if (!reviews.matches(':hover')) showReview(rIdx + 1); }, 9000); };
    $('[data-review-next]', reviews).addEventListener('click', function () { showReview(rIdx + 1); autoplay(); });
    $('[data-review-prev]', reviews).addEventListener('click', function () { showReview(rIdx - 1); autoplay(); });
    dots.forEach(function (d, k) { d.addEventListener('click', function () { showReview(k); autoplay(); }); });
    showReview(0); autoplay();
  }

  /* ---------- FAQ: one open at a time, animated height ---------- */
  $$('[data-faq] details').forEach(function (d, _, all) {
    var sum = $('summary', d);
    var body = $('.qa__a', d);
    sum.addEventListener('click', function (e) {
      if (reduceMotion) return;
      e.preventDefault();
      if (d.open) {
        var h = body.scrollHeight;
        body.animate([{ height: h + 'px', opacity: 1 }, { height: '0px', opacity: 0 }], { duration: 380, easing: 'cubic-bezier(.22,1,.36,1)' }).onfinish = function () { d.open = false; };
      } else {
        all.forEach(function (o) { if (o !== d && o.open) o.open = false; });
        d.open = true;
        var h2 = body.scrollHeight;
        body.animate([{ height: '0px', opacity: 0 }, { height: h2 + 'px', opacity: 1 }], { duration: 480, easing: 'cubic-bezier(.22,1,.36,1)' });
      }
    });
  });

  /* ---------- Trust marquee: duplicate the row for a seamless loop ---------- */
  var marquee = $('[data-marquee]');
  if (marquee && !reduceMotion) {
    var row = marquee.firstElementChild;
    var clone = row.cloneNode(true);
    clone.setAttribute('aria-hidden', 'true');
    $$('img', clone).forEach(function (i) { i.alt = ''; });
    marquee.appendChild(clone);
  } else if (marquee) {
    marquee.style.animation = 'none';
    marquee.style.flexWrap = 'wrap';
    marquee.style.justifyContent = 'center';
    marquee.style.width = 'auto';
  }

  /* ---------- Section rail: highlight current section ---------- */
  var railLinks = $$('[data-rail-link]');
  if (railLinks.length && 'IntersectionObserver' in window) {
    var map = {};
    railLinks.forEach(function (a) { map[a.getAttribute('data-rail-link')] = a; });
    var so = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (en.isIntersecting && map[en.target.id]) {
          railLinks.forEach(function (a) { a.classList.remove('is-active'); });
          map[en.target.id].classList.add('is-active');
        }
      });
    }, { rootMargin: '-45% 0px -50% 0px' });
    Object.keys(map).forEach(function (id) { var s = document.getElementById(id); if (s) so.observe(s); });
  }

  /* ---------- Misc ---------- */
  $$('[data-year]').forEach(function (el) { el.textContent = new Date().getFullYear(); });
})();
