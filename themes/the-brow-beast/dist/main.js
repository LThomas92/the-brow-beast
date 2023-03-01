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

  $('.search-categories__remove').click(function () {
    $('.search-results__single').fadeIn(300);
  });

  $('.search-categories__cat').click(function () {
    var searchFilterCat = $(this).attr('key');
    $(this).toggleClass('search-categories__cat--active').siblings().removeClass('search-categories__cat--active');
    $('.search-results__single').each(function () {
      if (searchFilterCat !== $(this).attr('key')) {
        $(this).fadeOut(300);
      } else {
        $(this).fadeIn(300);
      }
    });
  });

  $('.hamburger-menu-icon').click(function () {
    $('.mobile-navigation').addClass('mobile-navigation__active');
  });

  $('.mobile-navigation__close').click(function () {
    $('.mobile-navigation').removeClass('mobile-navigation__active');
  });

  $('.search-icon').click(function () {
    $('.search-overlay').addClass('search-overlay__active');
  });

  $('.search-overlay__close-btn').click(function () {
    $('.search-overlay').removeClass('search-overlay__active');
  });

  //slick js
  $('.homepage-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000
  });

  //Annocument Banner
  $('.c-annocument-banner__close').click(function () {
    $('.c-annocument-banner').hide(500);
  });

  //Product Page Navigation
  $('.single-product__meta-navigation li').each(function () {
    $(this).click(function () {
      $('.single-product__meta-navigation li').each(function () {
        $(this).removeClass('active-single-product-line');
      });
      if ($(this).hasClass('single-product__customer-reviews')) {
        $('.commentlist').show(500);
        $('#review_form_wrapper').hide();
        $('.single-product__related-products-section').hide();
        $(this).addClass('active-single-product-line');
      } else if ($(this).hasClass('single-product__add-review')) {
        $('.commentlist').hide();
        $('#review_form_wrapper').show(500);
        $('.single-product__related-products-section').hide();
        $(this).addClass('active-single-product-line');
      } else {
        $('.commentlist').hide();
        $('#review_form_wrapper').hide();
        $('.single-product__related-products-section').show(500);
      }
    });
  });

  $('.site-header__icon').click(function () {
    $('.search-overlay-container').addClass('search-overlay-container__active');
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

  if ($('#pa_size').val() == 'small') {
    $('.single-product__servings-sm').show();
    $('.single-product__servings-full').hide();
  } else if ($('#pa_size').val() == 'full') {
    $('.single-product__servings-sm').hide();
    $('.single-product__servings-full').show();
  } else {
    $('.single-product__servings-sm').hide();
    $('.single-product__servings-full').hide();
  }
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map