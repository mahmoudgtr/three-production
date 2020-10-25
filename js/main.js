$(function() {
    'use strict';
    //Adjust Slider Height
    var winH   = $(window).height(),
        navH   = $('.navbar').innerHeight();
        $('.main__page').height(winH - navH);

});
