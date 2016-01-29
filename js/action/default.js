$(function () {
  
  $.scrollUp({
    animation: 'fade',
    activeOverlay: '#00FFFF',    // false / Set CSS color to display scrollUp active point, e.g '#00FFFF'
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
 
});