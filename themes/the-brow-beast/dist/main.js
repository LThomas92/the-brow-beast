/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {

$ = jQuery.noConflict();
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$(document).ready(function () {
  $('.site-footer__signup-cta').click(function () {
    $('.dark-bg').addClass('show-dark-bg');
    $('.c-newsletter-popup').addClass('c-newsletter-popup__active');
  });

  $('.c-newsletter-popup__close').click(function () {
    $('.dark-bg').removeClass('show-dark-bg');
    $('.c-newsletter-popup').removeClass('c-newsletter-popup__active');
  });

  $('.c-page-services__service').each(function () {
    $(this).find('.c-page-services__more-info').click(function () {
      $(this).siblings('.c-page-services__more-info-text').removeClass('hide-popup');
      $(this).siblings('.c-page-services__more-info-text').addClass('show-more-info-popup');
      $('.dark-bg').addClass('show-dark-bg');
    });
  });

  $('.c-page-services__more-info-close').click(function () {
    $('.c-page-services__more-info-text').removeClass('show-more-info-popup');
    $('.dark-bg').removeClass('show-dark-bg');
  });

  $('.hamburger-menu').click(function () {
    $('.mobile-menu-overlay').addClass('mobile-overlay-show');
  });

  $('.mobile-menu-overlay__close').click(function () {
    $('.mobile-menu-overlay').removeClass('mobile-overlay-show');
  });

  $('.search-icon').click(function () {
    $('.header-search-form').toggleClass('show-search-form');
  });

  $('.c-terms-and-conditions__list-title').click(function () {
    $('.c-terms-and-conditions__list-title').removeClass('c-terms-and-conditions__active-title');
    $('.c-terms-and-conditions__list-item-content').removeClass('active-content');
    var termTitle = $(this).attr('key');
    $(this).toggleClass('c-terms-and-conditions__active-title').siblings().removeClass('c-terms-and-conditions__active-title');

    $('.c-terms-and-conditions__list-item-content').each(function () {
      if (termTitle !== $(this).attr('key')) {
        $(this).removeClass('active-content');
      } else {
        $(this).addClass('active-content');
      }
    });
  });

  var $grid = jQuery('.grid');

  $grid.imagesLoaded().progress(function () {
    $grid.packery({
      // options
      itemSelector: '.grid-item',
      gutter: '.gutter',
      percentPosition: true
    });
  });

  //slick js
  $('.c-testimonials').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    slidesPerRow: 1,
    dots: true,
    arrows: false,
    autoplay: false,
    autoplaySpeed: 5000,
    fade: true,
    fadeSpeed: 3000
  });

  $('.c-homepage-slider__slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000
  });

  if (jQuery(".gutenberg-styles > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data("offset")) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
});

$(window).scroll(() => {
  let scrolled = $(window).scrollTop();
  // gutenberg scroll anims
  if (gutenbergScrollAnims) {
    $(".gutenberg-styles .to-reveal").each(function () {
      if (scrolled + windowHeight - blockTriggerHeight >= $(this).data("offset")) {
        $(this).removeClass("to-reveal");
        $(this).addClass("revealed");
      }
    });
  }
});

$(window).resize(() => {
  if (jQuery(".gutenberg-styles > *").length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery(".gutenberg-styles > *").each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;
      jQuery(this).data("offset", offset);
      jQuery(this).addClass("to-reveal");
    });

    let numRevealed = 0;
    jQuery(".gutenberg-styles .to-reveal").each(function () {
      if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data("offset")) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass("to-reveal");
          thisRef.addClass("revealed");
        }, 700 + numRevealed * 600);
      }
    });
  }
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map