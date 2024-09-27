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
      },
      breakpoints: {
        1200: { slidesPerView: 5 },
        992: { slidesPerView: 5 },
        768: { slidesPerView: 5 },
        576: { slidesPerView: 4 },
        0: { slidesPerView: 2 }
      },
    });
  }


  // Section 03
  if($('.section-03 .swiper').length){
    new Swiper('.section-03 .swiper', {
      spaceBetween: 16, slidesPerView: 3, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      pagination:{ 
        el: '.swiper-pagination', clickable: true,
      },
      navigation:{
        prevEl: '.arrow.arrow-prev',
        nextEl: '.arrow.arrow-next',
      }, 
      breakpoints: {
        1200: { slidesPerView: 3 },
        992: { slidesPerView: 3 },
        768: { slidesPerView: 2 },
        576: { slidesPerView: 1.5 },
        0: { slidesPerView: 1 }
      },
    });
  }


  // Section 05
  if($('.section-05 .swiper-01').length){
    new Swiper('.section-05 .swiper-01', {
      spaceBetween: 15, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      pagination:{ 
        el: '.swiper-pagination', clickable: true,
      },
    });
  }

  if($('.section-05 .swiper-02').length){
    new Swiper('.section-05 .swiper-02', {
      spaceBetween: 0, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      navigation:{
        prevEl: '.arrow.arrow-prev',
        nextEl: '.arrow.arrow-next',
      }
    });
  }


  // Section 06
  if($('.section-06 .swiper').length){
    new Swiper('.section-06 .swiper', {
      spaceBetween: 0, slidesPerView: 2, speed: 800,
      autoplay: { delay: 5000 },
      breakpoints: {
        1300: { slidesPerView: 6 },
        992: { slidesPerView: 5.5 },
        768: { slidesPerView: 4.5 },
        576: { slidesPerView: 3.5 },
        480: { slidesPerView: 2 },
        0:{ slidesPerView: 2 }
      },
      pagination:{ 
        el: '.swiper-pagination', clickable: true,
      },
    });
  }


  $('.ss-card-04').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
  


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

  // Swiper Tab 01
  if($('.swiper-tabs-01').length){
    new Swiper('.swiper-tabs-01', {
      spaceBetween: 0, slidesPerView: 5, speed: 800,
      loop: true,
      breakpoints: {
        1300: { slidesPerView: 3 },
        992: { slidesPerView: 3 },
        768: { slidesPerView: 3 },
        576: { slidesPerView: 3 },
        480: { slidesPerView: 2.5 },
        320: { slidesPerView: 2 },
        0:{ slidesPerView: 1 }
      }, navigation:{
        prevEl: '.arrow.arrow-prev',
        nextEl: '.arrow.arrow-next',
      }, 
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