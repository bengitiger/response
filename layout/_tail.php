<?php
if (! defined ( '_BENGI_RWD_VER_' ))
  exit ();
?>

<hr>
<footer>

  <div class="container">
    <div class="row">
    
      <div class="col-sm-4">
        <p>
          <a href="#"><img src="/img/logo/logo.jpg" class="img-responsive center-to-left img-logo" /></a> 
        </p>        
        <div class="small center-to-left ">&copy; 2016 Company, Inc.</div>
      </div>

      <div class="col-sm-4">
        <div class="text-center">
          <p>
            <a href="#">Host Company, Inc.</a><br> <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
          </p>
          <p>social media icons</p>
        </div>
      </div>

      <div class="col-sm-4 ">
        <span class="center-to-right">
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-bullhorn"></span><br> Feedback
          </button>
        </span>        
      </div>
      
    </div>
  </div>

</footer>

<section id="pagecreateinfo">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
          RUN TIME : <?php echo get_microtime()-$begin_time; ?> / 
          SHOW TIME : <label id="ggrshowtime"></label> / 
          메모리 : <?=round((memory_get_usage() / 1048576),3).' MB'?>
      </div>
    </div>
 </div>
</section>

<script src="//code.jquery.com/jquery.js" type="text/javascript"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/ie10-viewport-bug-workaround.js"></script>
<script src="/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
<script src="/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript"></script>
<script src="/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5" type="text/javascript"></script>
<script src="/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6" type="text/javascript"></script>
<script src="/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7" type="text/javascript"></script>
<script src="/js/scrollup/dist/jquery.scrollUp.min.js" type="text/javascript"></script>
<script src="/js/scrollpage/scripts/scrollpagination.js" type="text/javascript"></script>

<script src="/js/action/default.js"></script>
</body>
</html>