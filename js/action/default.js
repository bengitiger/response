$(function () {
  
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
    
  
  $("#owl-example").owlCarousel({
    items : 5,
    itemsCustom : false,
    baseClass : "owl-carousel",
    theme : "owl-theme",
    pagination : true,
    paginationNumbers: false
  });
  
  
  // $(".fancybox").fancybox();
 
  
  // code for fade in element by element
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
  }  
  
  /** ----------------------------------------------------
   * 
   *                        실행 시간
   * 
   */
  
  var ggr_stime = new Date(); 
  function ggr_showtime(){ $('#ggrshowtime').html( (((new Date())-ggr_stime)/1000)+' sec' ); } 
  window.onstop = ggr_showtime; 
  window.onload = ggr_showtime; 
  
  
});