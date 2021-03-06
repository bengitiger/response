<?php
if (! defined ( '_BENGI_RWD_VER_' ))
  exit ();

// 로그인 화면에서는 숨김
if( $GLB['url']['locpage'] !== 'login' ) {  
?>

<hr>
<footer>

  <div class="container">
    <div class="row">

      <div class="footlogo col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <p>
            <a href="#"><img src="/img/logo/logo.jpg" class="img-responsive center-to-left img-logo" /></a>
          </p>
          <div class="small center-to-left ">&copy; 2016 Company, Inc.</div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
          <h1 style="margin-top: 12px;margin-bottom: 20px;font-family: 'Oswald';font-size: 26px;text-transform: uppercase;">
            Bengi PROGRAMMER
          </h1>
          <p>
            <a href="#">Company, Inc.</a>
            <br>
            <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a>
          </p>
      </div>

      <div class="social col-xs-12 col-sm-4 col-md-4 col-lg-4">
        
          <ul>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="구글"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-google fa-stack-1x fa-inverse"></i>
              </span>
            </a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="트위터"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="페이스북"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
            </a></li>
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="GitHub"> <span class="fa-stack fa-lg"> <i class="fa fa-circle fa-stack-2x"></i> <i class="fa fa-github-alt fa-stack-1x fa-inverse"></i>
              </span>
            </a></li>
          </ul>      
          
          <span style="display: block;" class="hidden-xs hidden-sm">
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

<?php
}
?>

<script src="//code.jquery.com/jquery.js" type="text/javascript"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/ie10/ie10-viewport-bug-workaround.js"></script>
<script src="/js/jquery/jquery.easing.1.3.js"></script>
<script src="/js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
<script src="/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5" type="text/javascript"></script>
<script src="/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5" type="text/javascript"></script>
<script src="/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6" type="text/javascript"></script>
<script src="/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7" type="text/javascript"></script>
<script src="/js/scrollup/dist/jquery.scrollUp.js" type="text/javascript"></script>
<script src="/js/scrollpage/scripts/scrollpagination.js" type="text/javascript"></script>
<script src="/js/scrollpage2/smoothscroll.js" type="text/javascript"></script>
<script src="/js/lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="/js/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="/js/backstretch/jquery.backstretch.min.js"></script>

<script src="/js/hoverdir/jquery.hoverdir.js"></script>

<script src="/js/cycle/jquery.cycle.all.js" type="text/javascript"></script>
<script src="/js/maximage/lib/js/jquery.maximage.min.js"></script>

<script src="/js/timer/jquery.timer.js" type="text/javascript"></script>

<script src="/js/action/bengi_rwd_lib.js"></script>
<script src="/js/action/default.js"></script>
<script src="/js/action/bengi_timer.js"></script>
</body>
</html>