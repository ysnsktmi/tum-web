			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
<script>
(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

/* global jQuery */

var $ = jQuery;
var $win = $(window);
var $doc = $(document);

var conf = {
  mobileWidth: 480
};

/**
 * toggle global menu
 * @usage
 * $(`menu`).toggleMenu(`trigger`, `touchblocker/closer`);
 */
$.extend({
  toggleMenu: function toggleMenu(trg, blocker) {
    var $menu = $(this);
    var $blocker = $(blocker);
    var $trg = $(trg);

    $blocker.css({ height: $doc.height() });

    function _toggleMenu() {
      $blocker.toggle();
      $menu.toggleClass('active');
    }

    $trg.on('click', _toggleMenu);
    $blocker.on('click', _toggleMenu);
  },
  cover: function cover() {
    var $cov = $('#cover');
    var $covi = $('#cover img');

    if ($win.width() <= conf.mobileWidth) {
      $cov.height($covi.height());
      $covi.css({ position: 'fixed', zIndex: '-1' });
    } else {
      $cov.height($covi.height());
      $covi.css({ position: 'static' });
    }
  }
});

$.fn.toggleMenu = function tm(trg, blocker) {
  var _this = this;

  return this.each(function () {
    $.toggleMenu.call(_this, trg, blocker);
  });
};

/* initialize */
$(function () {
  $('#menu-global').toggleMenu('.nav-trigger', '#touch-blocker');
  var initialDelay = void 0;
  $win.on('resize load', function () {
    clearTimeout(initialDelay);
    initialDelay = setTimeout(function () {
      $.cover();
    }, 100);
  });
});

},{}]},{},[1]);
</script>
	</body>

</html> <!-- end of site. what a ride! -->