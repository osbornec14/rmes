"use strict";
$(document).ready( () => {
  $('.banner-header').fadeIn(1000);
var stickyOffset = $('.sticky').offset().top;
var stickyOffsetMobile = $('.sticky-mobile').offset().top;


$(window).scroll(function(){
  var navBar = $('.navbar')
  var sticky = $('.sticky');
  var logoSmall = $('.logo-small');
  var stickyButton = $('.sticky-button');
  var anchor = $('#qq');
  var stickyMobile = $('.sticky-mobile')
  var logoMobile = $('.logo-mobile')
  var containerOne= $('.container1')

      scroll = $(window).scrollTop();

  if (scroll >= stickyOffset) sticky.addClass('fixed'); 
  else sticky.removeClass('fixed');

  if (scroll >= stickyOffset) logoSmall.addClass('logo-fixed'); 
  else logoSmall.removeClass('logo-fixed');

  if (scroll >= stickyOffset) navBar.addClass('fixed-navbar'); 
  else navBar.removeClass('fixed-navbar');

  if (scroll >= stickyOffset) stickyButton.addClass('fixed-button'); 
  else stickyButton.removeClass('fixed-button');

  if (scroll >= stickyOffset) anchor.addClass('qq-scrolled'); 
  else anchor.removeClass('qq-scrolled');

  if (scroll >= stickyOffsetMobile) anchor.addClass('qq-scrolled'); 
  else anchor.removeClass('qq-scrolled');

  if (scroll >= stickyOffsetMobile) stickyMobile.addClass('fixed-mobile'); 
  else stickyMobile.removeClass('fixed-mobile');

  if (scroll >= stickyOffsetMobile) logoMobile.addClass('logo-mobile-fixed'); 
  else logoMobile.removeClass('logo-mobile-fixed');

  if (scroll >= stickyOffsetMobile) containerOne.addClass('container1-fixed'); 
  else containerOne.removeClass('container1-fixed');

});

});