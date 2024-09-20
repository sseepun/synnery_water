$(function(){ 'use strict';

  // Topnav
  var topnav = $('nav.topnav'),
      topnavMenu = topnav.find('.menu-container > .menu');
  var sidenav = $('nav.sidenav'),
      sidenavMenus = sidenav.find('.menu-container'),
      sidenavToggle = $('nav .sidenav-toggle');
  if(topnav.length){
    topnavMenu.mouseenter(function(e){
      let self = $(this);
      if(!self.hasClass('menu-active')){
          let lastIndex = topnavMenu.filter('.menu-active').index();
          let nowIndex = self.index();
          if(nowIndex > lastIndex){
              self.parent().removeClass('from-left');
              self.parent().addClass('from-right');
          }else{
              self.parent().removeClass('from-right');
              self.parent().addClass('from-left');
          }
      }
      topnavMenu.removeClass('menu-active');
      !self.addClass('menu-active');
    });

    sidenavMenus.html( topnav.find('#topnav-menu').html() );
    sidenavMenus.find('em').remove();
    sidenavMenus.find('.num, .title, .submenu-title').remove();
    sidenavMenus.find('.has-children').each(function(){
        $(this).append('<div class="dropdown-toggle"><em class="fas fa-chevron-right"></em></div>');
    });
    sidenavMenus.find('.dropdown-toggle').click(function(e){
      e.preventDefault();
      var self = $(this);
      self.toggleClass('active');
      self.parent().toggleClass('active');
      self.prev().slideToggle();
    });
  }

  // Sidenav Toggle
  sidenavToggle.click(function(e){
    e.preventDefault();
    if($('body').hasClass('sidenav-opened')){
      $('html, body').removeClass('sidenav-opened');
      sidenavToggle.find('> *').removeClass('active');
      sidenav.removeClass('active');
    }else{
      $('html, body').addClass('sidenav-opened');
      sidenavToggle.find('> *').addClass('active');
      sidenav.addClass('active');
    }
  });
  $('.sidenav-filter').click(function(e){
    e.preventDefault();
    $('html, body').removeClass('sidenav-opened');
    sidenavToggle.find('> *').removeClass('active');
    sidenav.removeClass('active');
  });

  
  // Check on Scroll
  function checkOnScroll(st){
    if(st > 100){
      topnav.addClass('sticky');
    }else{
      topnav.removeClass('sticky');
    }
  }
  checkOnScroll( $(window).scrollTop() );
  $(window).scroll(function(){
    checkOnScroll( $(this).scrollTop() );
  });


  // Banner 01
  if($('.banner-01 .swiper').length){
    new Swiper('.banner-01 .swiper', {
      spaceBetween: 0, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      observer: true, observeParents: true,
      pagination:{ 
        el: '.swiper-pagination', clickable: true,
      },
      navigation:{
        prevEl: '.arrow.arrow-prev',
        nextEl: '.arrow.arrow-next',
      }
    });
  }


  // Section 01
  if($('.section-01 .swiper').length){
    new Swiper('.section-01 .swiper', {
      spaceBetween: 10, slidesPerView: 5, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      navigation:{
        prevEl: '.arrow.arrow-prev',
        nextEl: '.arrow.arrow-next',
      }
    });
  }


  // Section 03
  if($('.section-03 .swiper').length){
    new Swiper('.section-03 .swiper', {
      spaceBetween: 16, slidesPerView: 3, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
    });
  }


  // Section 05
  if($('.section-05 .swiper-01').length){
    new Swiper('.section-05 .swiper-01', {
      spaceBetween: 15, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
    });
  }

  if($('.section-05 .swiper-02').length){
    new Swiper('.section-05 .swiper-02', {
      spaceBetween: 0, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
    });
  }


  // Section 06
  if($('.section-06 .swiper').length){
    new Swiper('.section-06 .swiper', {
      spaceBetween: 0, slidesPerView: 5, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      breakpoints: {
        1300: { slidesPerView: 6 },
      },
    });
  }


  // Tab Container
  var tabContainers = $('.tab-container');
  if(tabContainers.length){
    tabContainers.each(function(){
      var self = $(this),
          tabs = self.find('.tabs .tab'),
          tabContents = self.find('.tab-contents .tab-content');
      tabs.click(function(e){
        var target = tabContents.filter('[data-tab="'+$(this).data('tab')+'"]'),
            oldTargets = tabContents.filter('.active');
        if($(this).hasClass('active')) e.preventDefault();
        if(target.length && !$(this).hasClass('active')){
          e.preventDefault();
          tabs.removeClass('active');
          $(this).addClass('active');

          tabContents.removeClass('fade-in');
          oldTargets.addClass('fade-out');
          target.addClass('fade-in');
          setTimeout(function(){
              tabContents.removeClass('fade-in fade-out active');
              target.addClass('active');
          }, 600);
          //  AOS.refresh();
        }
      });
    });
  }


  // Page Loader
  const pageLoader = $('.page-loader');
  if(pageLoader.length){
    
  }else{
    $('body').removeClass('loading');
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 5 });
  }

});