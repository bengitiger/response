$(function () {
  
  var $devicewidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
  var $deviceheight = (window.innerHeight > 0) ? window.innerHeight : screen.height;
  
  
  /** ----------------------------------------------------
   * 
   *                      Navbar
   * 
   */   
  
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
        $('.navbar').addClass('black');
    }
    else {
        $('.navbar').removeClass('black');
    }
  });  
  
  
  
  /** ----------------------------------------------------
   * 
   *                      ScrollUp
   * 
   */  
  
  $.scrollUp({
    animation: 'fade',
    // activeOverlay: '#00FFFF',    // false / Set CSS color to display scrollUp active point, e.g '#00FFFF'
    scrollText: 'Scroll to top', // Text for element
    scrollName: 'scrollUp',  // Element ID
    topDistance: '300',      // Distance from top before showing element (px)
    topSpeed: 300,           // Speed back to top (ms)
    animationInSpeed: 200,   // Animation in speed (ms)
    animationOutSpeed: 200,  // Animation out speed (ms)
    scrollImg: { active: true, type: 'background', src: '/js/scrollup/demo/img/top.png' }
  });  
    
  
  
  
  
  /** ----------------------------------------------------
   * 
   *                        MAIN 
   * 
   */  
  
  
  //  OWL
  
  $("#owl-example").owlCarousel({
    items : 5,
    itemsCustom : false,
    baseClass : "owl-carousel",
    theme : "owl-theme",
    pagination : true,
    paginationNumbers: false
  });
  
  
  // $(".fancybox").fancybox();
 
  // Ajax Loading

  $.fn.fadeInWithDelay = function(){
    var delay = 0;
    return this.each(function(){
      $(this).delay(delay).animate({opacity:1}, 200);
      delay += 100;
    });
  };
  
  $('#content').scrollPagination({
    'contentPage': '/js/scrollpage/democontent.html', // the url you are fetching the results
    'contentData': {}, // these are the variables you can pass to the request, for example: children().size() to know which page you are
    'scrollTarget': $(window), // who gonna scroll? in this example, the full window
    'heightOffset': 10, // it gonna request when scroll is 10 pixels before the page ends
    'beforeLoad': function(){ // before load function, you can display a preloader div
      $('#loading').fadeIn(); 
    },
    'afterLoad': function(elementsLoaded){ // after loading content, you can use this function to animate your new elements
       $('#loading').fadeOut();
       var i = 0;
       $(elementsLoaded).fadeInWithDelay();
       if ($('#content').children().size() > 100){ // if more than 100 results already loaded, then stop pagination (only for testing)
        $('#nomoreresults').fadeIn();
        $('#content').stopScrollPagination();
       }
    }
  });  
  
  
  // carousel
  
  $('.carousel').carousel({
    interval: 3000   // 2000, false
  });
  
  
  /** ----------------------------------------------------
   * 
   *                  sub2 - full 화면 
   * 
   */

  function fullscreenFix(){
    var h = $('body').height();
    $(".site-wrapper-container").each(function(i){
        if($(this).innerHeight() > h){
            $(this).closest(".fullscreen").addClass("overflow");
        }
    });
  }

  // resize background images
  function backgroundResize(){
      var windowH = $(window).height();
      
      $(".background").each(function(i){
          var path = $(this);
          // variables
          var contW = path.width();
          var contH = path.height();
          var imgW = path.attr("data-img-width");
          var imgH = path.attr("data-img-height");
          var ratio = imgW / imgH;
          // overflowing difference
          var diff = parseFloat(path.attr("data-diff"));
          diff = diff ? diff : 0;
          // remaining height to have fullscreen image only on parallax
          var remainingH = 0;
          if(path.hasClass("parallax")){
              var maxH = contH > windowH ? contH : windowH;
              remainingH = windowH - contH;
          }
          // set img values depending on cont
          imgH = contH + remainingH + diff;
          imgW = imgH * ratio;
          // fix when too large
          if(contW > imgW){
              imgW = contW;
              imgH = imgW / ratio;
          }
          //
          path.data("resized-imgW", imgW);
          path.data("resized-imgH", imgH);
          path.css("background-size", imgW + "px " + imgH + "px");
      });
  }  
  
  if( $("html").hasClass("full") ) {
    
    $(window).resize(backgroundResize);
    $(window).resize(fullscreenFix);
    $(window).focus(backgroundResize);  
    
    fullscreenFix();
    backgroundResize();
    
    
    /**
     *   링크 클릭시 Animation Class 변경
     */    

    $(".masthead-nav a").mouseenter(function() {
      $(this).addClass('animated swing');
    })
    .mouseleave(function() {
      $(this).removeClass('animated swing');
    });
  }
  
  
  /** ----------------------------------------------------
   * 
   *                         sub3  
   * 
   */  
  
  $('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })
  
  
  /**
   *   Image Popup
   */
  
  $('.img-popup-link').magnificPopup({
    preloader: true,
    type: 'image',
    tClose: 'Close (Esc)',
    tLoading: 'Loading...',
    removalDelay: 0,
    mainClass: 'mfp-fade',
    disableOn: 400,
    gallery: {
      enabled: true
    },
    image: {
      titleSrc: 'title'
    }
  });
  
  
  /**
   *   Image - Gallery
   */  
  $('.parent-container').magnificPopup({
    delegate: 'a', 
    type: 'image',
    gallery:{
      enabled:true,
      preload: [0,2],      
      navigateByImgClick: true,
      arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',       
      
      tPrev: 'Previous (Left arrow key)',
      tNext: 'Next (Right arrow key)',
      tCounter: '<span class="mfp-counter">%curr% of %total%</span>'
    },
    image: {
      markup: '<div class="mfp-figure">'+
                '<div class="mfp-close"></div>'+
                '<div class="mfp-img"></div>'+
                '<div class="mfp-bottom-bar">'+
                  '<div class="mfp-title"></div>'+
                  '<div class="mfp-counter"></div>'+
                '</div>'+
              '</div>',
      cursor: 'mfp-zoom-out-cur',
      titleSrc: function(item) {
         return item.el.attr('title');
      },
      verticalFit: true,
      tError: '<a href="%url%">The image</a> could not be loaded.'
    }  
  });  
  
  
  /** ----------------------------------------------------
   * 
   *                         sub5  
   * 
   */  
  
  $('html.sub5 #maximage').maximage({
    cycleOptions: {
        fx:'scrollHorz',
        speed: 800,
        timeout: 5000,
        prev: '#arrow_left',
        next: '#arrow_right',
        pause: 1
    },
    onFirstImageLoaded: function(){
        jQuery('#cycle-loader').hide();
        jQuery('#maximage').fadeIn('fast');
    },
    fillElement: '#sub5maximg',
    backgroundSize: 'contain'
  });

  
  
  
  /** ----------------------------------------------------
   * 
   *                     실행 시간
   * 
   */
  
  var ggr_stime = new Date(); 
  function ggr_showtime(){ $('#ggrshowtime').html( (((new Date())-ggr_stime)/1000)+' sec' ); } 
  window.onstop = ggr_showtime; 
  window.onload = ggr_showtime; 
  
  
});