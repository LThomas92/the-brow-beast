$ = jQuery.noConflict(); 
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * 0.33;

$( document ).ready(function() {
  $('.c-page-services__service').each(function() {
    $(this).find('.c-page-services__more-info').click(function() {
    $(this).siblings('.c-page-services__more-info-text').removeClass('hide-popup');
    $(this).siblings('.c-page-services__more-info-text').addClass('show-more-info-popup');
    $('.dark-bg').addClass('show-dark-bg');
    });
});

$('.c-page-services__more-info-close').click(function() {
  $('.c-page-services__more-info-text').removeClass('show-more-info-popup');
  $('.dark-bg').removeClass('show-dark-bg');
});

$('.hamburger-menu').click(function() {
  $('.mobile-menu-overlay').addClass('mobile-overlay-show');
});

$('.mobile-menu-overlay__close').click(function() {
  $('.mobile-menu-overlay').removeClass('mobile-overlay-show');
});

$('.search-icon').click(function() {
  $('.header-search-form').toggleClass('show-search-form');
});

$('.c-terms-and-conditions__list-title').click(function() {
  $('.c-terms-and-conditions__list-title').removeClass('c-terms-and-conditions__active-title');
  var termTitle = $(this).attr('key');
  $(this).toggleClass('c-terms-and-conditions__active-title').siblings().removeClass('c-terms-and-conditions__active-title');

  $('.c-terms-and-conditions__list-item-content').each(function() {
    if(termTitle !== $(this).attr('key')) {
      $(this).hide(300);
    } else {
      $(this).show(300);
    }
  });
});

  //slick js
  $('.c-homepage-slider__slides').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    fadeSpeed: 1000
  });


  if ( jQuery(".gutenberg-styles > *").length &&
  !(window.location.hash != "" && jQuery(window.location.hash).length)
) {
  gutenbergScrollAnims = true;
  jQuery(".gutenberg-styles > *").each(function () {
    let offset = jQuery(this).get(0).getBoundingClientRect().top;
    jQuery(this).data("offset", offset);
    jQuery(this).addClass("to-reveal");
  });

  let numRevealed = 0;
  jQuery(".gutenberg-styles .to-reveal").each(function () {
    if (
      jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >=
      jQuery(this).data("offset")
    ) {
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
    if (
      scrolled + windowHeight - blockTriggerHeight >=
      $(this).data("offset")
    ) {
      $(this).removeClass("to-reveal");
      $(this).addClass("revealed");
    }
  });
}
});

$(window).resize(() => {
if (
  jQuery(".gutenberg-styles > *").length &&
  !(window.location.hash != "" && jQuery(window.location.hash).length)
) {
  gutenbergScrollAnims = true;
  jQuery(".gutenberg-styles > *").each(function () {
    let offset = jQuery(this).get(0).getBoundingClientRect().top;
    jQuery(this).data("offset", offset);
    jQuery(this).addClass("to-reveal");
  });

  let numRevealed = 0;
  jQuery(".gutenberg-styles .to-reveal").each(function () {
    if (
      jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >=
      jQuery(this).data("offset")
    ) {
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