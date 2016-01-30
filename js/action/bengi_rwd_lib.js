
/**
 * 
 *  Font Awesome IE 8
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

