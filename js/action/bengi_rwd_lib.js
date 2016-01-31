/** ----------------------------------------------------
* 
*                   Font Awesome IE 8
* 
*/

if ( window.attachEvent && !window.addEventListener ) { // <-- Poor man's IE8 detection
    window.attachEvent( "onload", function() {
      var
        html = document.documentElement,
        clss = html.className;

      html.className = clss + " ie-force-pseudo-refresh";
      setTimeout( function(){ html.className = clss; }, 10 );
    });
}


$(function () {
  
  /** ----------------------------------------------------
   * 
   *                   Tool Tip 
   * 
   */
  $('[data-toggle="tooltip"]').tooltip();     // Tool Tip
  
  

  /** ----------------------------------------------------
   * 
   *                   부드럽게 이동 
   * 
   *  <div name="top"> </div>
      <p>somethings</p>
      <a href="#top"> Go to top </a>
   * 
   */
  
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 700);
        return false;
      }
    }
  });    
  
  
  
  
  
  
});