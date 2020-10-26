$(function() {
    'use strict';
    //Adjust Slider Height
    var winH   = $(window).height(),
        navH   = $('.navbar').innerHeight();
        $('.main__page').height(winH - navH);

});


/*Change border Width When hover*/

$(".services-text-p").hover(function(){
$(this).toggleClass("changed");
})

  /* Initialize Swiper */

var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });