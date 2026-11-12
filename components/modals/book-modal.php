<dialog class="modal modal--book" id="book-modal" data-book-modal aria-labelledby="bm-title">
  <div class="modal__panel modal__panel--book glass on-dark">
    <button class="modal__close icon-btn" type="button" aria-label="Close" data-close-modal><svg aria-hidden="true"><use href="#i-close"/></svg></button>
    <div class="bm__stage">
      <div class="book3d is-mockup bm__book" data-tilt>
        <div class="book3d__body">
          <div class="book3d__back"></div>
          <img class="book3d__cover" data-bm-cover src="#" width="699" height="1024" alt="">
        </div>
        <div class="book3d__shadow"></div>
      </div>
    </div>
    <div class="bm__info">
      <span class="chip chip--gold">Published with <?= site_text('project_name') ?></span>
      <h2 class="bm__title" id="bm-title" data-bm-title></h2>
      <p class="bm__sub" data-bm-sub></p>
      <p class="bm__author">by <span data-bm-author></span></p>
      <p class="bm__note">Working on a book of your own? Ask us about writing, editing, cover design and the steps towards publication.</p>
      <div class="bm__ctas">
        <button class="btn btn--primary" type="button" data-open-lead>Discuss Your Book <svg class="btn__icon btn__icon--arrow" aria-hidden="true"><use href="#i-arrow"/></svg></button>
        <a class="btn btn--glass" href="book-publishing">Book Publishing</a>
      </div>
    </div>
  </div>
</dialog>
