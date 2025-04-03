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
  let section05Swiper;
  if($('.section-05 .swiper').length){
    section05Swiper = new Swiper('.section-05 .swiper', {
      direction: 'vertical', loop: false,
      spaceBetween: 0, speed: 800,
      pagination: {
        el: '.section-05 .swiper .swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return `
            <span class="${className}">
              <svg viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.75558 0.883549C5.48663 0.563379 5.2305 0.268821 4.99997 -0.00012207C4.76945 0.281628 4.51332 0.576185 4.24437 0.883549C2.6179 2.75335 0.376709 5.35313 0.376709 7.37661C0.376709 8.6573 0.888982 9.80991 1.73423 10.6424C2.56668 11.4748 3.71929 11.9999 4.99997 11.9999C6.28066 11.9999 7.43327 11.4876 8.26572 10.6424C9.09816 9.80991 9.62324 8.64449 9.62324 7.37661C9.62324 5.35313 7.38205 2.76615 5.75558 0.883549Z" fill="white"/>
              </svg>
            </span>`;
        }
      },
      breakpoints: {
        1299:{ direction: 'vertical', slidesPerView: 'auto' },
        992:{ direction: 'vertical', slidesPerView: 'auto' },
        576:{ direction: 'vertical', slidesPerView: 1},
        0:{ direction: 'vertical', slidesPerView: 'auto'},
      },
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


  // Swiper Tab 02
  if($('.swiper-tabs-02').length){
    new Swiper('.swiper-tabs-02', {
      direction: 'vertical',
      spaceBetween: 0, slidesPerView: 5, speed: 800,
      breakpoints: {
        992:{ direction: 'vertical', slidesPerView: 'auto' },
        767:{ direction: 'vertical', slidesPerView: 'auto' },
        576:{ direction: 'horizontal', slidesPerView:'auto', spaceBetween:'10'},
        0:{ direction: 'horizontal', slidesPerView:'auto'},
      },
    });

    $('.swiper-tabs-02 .swiper-slide').on('click', function () {
      const index = $(this).index();

      $('.swiper-tabs-02 .swiper-slide').removeClass('active');
      $(this).addClass('active');

      if (section05Swiper) {
        section05Swiper.slideTo(index);
      }
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
       breakpoints: {
        992:{ direction: 'vertical', slidesPerView: 'auto' },
        576:{ direction: 'horizontal', slidesPerView: 'auto'},
        0:{ direction: 'horizontal', slidesPerView: 'auto'},
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


  // Section 07
  if($('.section-07 .swiper').length){
    new Swiper('.section-07 .swiper', {
      direction: 'vertical', loop: true,
      spaceBetween: 0, speed: 800,
      pagination: { 
        el: '.swiper-pagination', clickable: true,
      },
        breakpoints: {
          1299:{ direction: 'vertical', slidesPerView: 4 },
          992:{ direction: 'vertical', slidesPerView: 4 },
          576:{ direction: 'vertical', slidesPerView: 4},
          0:{ direction: 'vertical', slidesPerView: 4},
        },
    });
  }

  
  // Section 08
  if($('.section-08 .swiper').length){
    new Swiper('.section-08 .swiper', {
      spaceBetween: 0, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      navigation:{
        prevEl: '.section-08 .arrow.arrow-prev',
        nextEl: '.section-08 .arrow.arrow-next',
      },
      pagination: {
        el: '.section-08 .swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return `
            <span class="${className}">
              <svg viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.75558 0.883549C5.48663 0.563379 5.2305 0.268821 4.99997 -0.00012207C4.76945 0.281628 4.51332 0.576185 4.24437 0.883549C2.6179 2.75335 0.376709 5.35313 0.376709 7.37661C0.376709 8.6573 0.888982 9.80991 1.73423 10.6424C2.56668 11.4748 3.71929 11.9999 4.99997 11.9999C6.28066 11.9999 7.43327 11.4876 8.26572 10.6424C9.09816 9.80991 9.62324 8.64449 9.62324 7.37661C9.62324 5.35313 7.38205 2.76615 5.75558 0.883549Z" fill="white"/>
              </svg>
            </span>`;
        }
      }
    });
  }


  // Section 09
  if($('.section-09.section-gallery .swiper').length){
    new Swiper('.section-09.section-gallery .swiper', {
      spaceBetween: 0, slidesPerView: 1, speed: 800,
      autoplay: { delay: 5000 }, loop: true,
      navigation:{
        prevEl: '.section-09.section-gallery .arrow.arrow-prev',
        nextEl: '.section-09.section-gallery .arrow.arrow-next',
      },
      pagination: {
        el: '.section-09.section-gallery .swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return `
            <span class="${className}">
              <svg viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.75558 0.883549C5.48663 0.563379 5.2305 0.268821 4.99997 -0.00012207C4.76945 0.281628 4.51332 0.576185 4.24437 0.883549C2.6179 2.75335 0.376709 5.35313 0.376709 7.37661C0.376709 8.6573 0.888982 9.80991 1.73423 10.6424C2.56668 11.4748 3.71929 11.9999 4.99997 11.9999C6.28066 11.9999 7.43327 11.4876 8.26572 10.6424C9.09816 9.80991 9.62324 8.64449 9.62324 7.37661C9.62324 5.35313 7.38205 2.76615 5.75558 0.883549Z" fill="white"/>
              </svg>
            </span>`;
        }
      }
    });
  }


  /* Card Hover */
  $('.ss-card-04').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });


  /* Change color according to water level value */
  function getColor(type, value) {
    if (type === 'big') {
      if (value <= 25) return '#FFFF66';       
      else if (value <= 50) return '#00FA9A';  
      else if (value <= 75) return '#4169E1'; 
      else return '#FF66CC';                   
    } else if (type === 'medium') {
      if (value <= 25) return '#FFFF66';       
      else if (value <= 50) return '#00FA9A';  
      else if (value <= 75) return '#4169E1'; 
      else return '#FF66CC';                   
    }
    return '#CCCCCC'; 
  }
  
  $('.water-wave').each(function () {
    const $wave = $(this);
    const type = $wave.data('type');            
    const value = parseFloat($wave.data('value')); 

    const color = getColor(type, value);

    $wave.find('.wave-1, .wave-2, .wave-3').css('background-color', color);
  });
  /* End - Change color according to water level value */


  /* E-book Reader */
  var source_pdf = "./public/assets/app/document/01.pdf";
  var option_pdf = {
    webgl:true,
  };
  let flipBookContainer =  $("#flipbookPDFContainer");

  if(flipBookContainer.length){
      flipBookContainer.flipBook(source_pdf,option_pdf);
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
           AOS.refresh();
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