/* global jQuery */

const $     = jQuery;
const $win  = $(window);
const $doc  = $(document);

const conf = {
  mobileWidth: 480,
};

/**
 * toggle global menu
 * @usage
 * $(`menu`).toggleMenu(`trigger`, `touchblocker/closer`);
 */
$.extend({
  toggleMenu(trg, blocker) {
    const $menu = $(this);
    const $blocker = $(blocker);
    const $trg = $(trg);

    $blocker.css({ height: $doc.height() });

    function _toggleMenu() {
      $blocker.toggle();
      $menu.toggleClass('active');
    }

    $trg.on('click', _toggleMenu);
    $blocker.on('click', _toggleMenu);
  },

  cover() {
    const $cov  = $('#cover');
    const $covi = $('#cover img');

    if ($win.width() <= conf.mobileWidth) {
      $cov.height($covi.height());
      $covi.css({ position: 'fixed', zIndex: '-1' });
    } else {
      $cov.height($covi.height());
      $covi.css({ position: 'static' });
    }
  },
});


$.fn.toggleMenu = function tm(trg, blocker) {
  return this.each(() => {
    $.toggleMenu.call(this, trg, blocker);
  });
};


/* initialize */
$(() => {
  $('#menu-global').toggleMenu('.nav-trigger', '#touch-blocker');
  let initialDelay;
  $win.on('resize load', () => {
    clearTimeout(initialDelay);
    initialDelay = setTimeout(() => {
      $.cover();
    }, 100);
  });
});
