$(function () {

    /**
     *   Timer
     */
    
    var vchklogo = true;
    var bengi_timer = $.timer(function() {
       if(vchklogo) vchklogo = false;         
       else vchklogo = true;         
       
       
       if( $("html").hasClass("full") ) func_bengi_time_full(vchklogo);  // Sub 2
    });
    
    
    
    /**
     * 
     *  Full - SUB2
     * 
     */
    
    func_bengi_time_full = function(chk) {
      
      if (vchklogo) {
        $(".masthead-brand").addClass('animated tada');      
      }
      else {
        $(".masthead-brand").removeClass('animated tada');
      }
      
    } 
    
    
    
    
    
    
    bengi_timer.set({ time : 2000, autostart : true });
    
});