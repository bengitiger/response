<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>


<style>

.btn-default,
.btn-default:hover,
.btn-default:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritence from `body` */
  background-color: #fff;
  border: 1px solid #fff;
}


/*
 * Base structure
 */

html.full,
html.full body {
  height: 100%;
}

html.full body {
  color: #fff;
  text-align: center;
  padding: 0;
}

/* Extra markup and styles for table-esque vertical and horizontal centering */

.site-wrapper {
  display: table;
  width: 100%;
  height: 100%; /* For at least Firefox */
  min-height: 100%;
  -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
          box-shadow: inset 0 0 100px rgba(0,0,0,.5);

  color: #fff;          
  background: #333 url(/img/back/sky.jpg);    
  text-shadow: 0 1px 3px rgba(0,0,0,.5);      
}

.site-wrapper-inner {
  display: table-cell;
  vertical-align: top;  
}

.site-wrapper-container {
  margin-right: auto;
  margin-left: auto;
  margin-top: 90px;
}

/* Padding for spacing */
.inner {
  padding: 30px;
}


/*
 * Header
 */
.masthead-brand {
  margin-top: 10px;
  margin-bottom: 10px;
}

.masthead-nav > li {
  display: inline-block;
}
.masthead-nav > li + li {
  margin-left: 20px;
}
.masthead-nav > li > a {
  padding-right: 0;
  padding-left: 0;
  font-size: 16px;
  font-weight: bold;
  color: #fff; /* IE8 proofing */
  color: rgba(255,255,255,.75);
  border-bottom: 2px solid transparent;
}
.masthead-nav > li > a:hover,
.masthead-nav > li > a:focus {
  background-color: transparent;
  border-bottom-color: #a9a9a9;
  border-bottom-color: rgba(255,255,255,.25);
}
.masthead-nav > .active > a,
.masthead-nav > .active > a:hover,
.masthead-nav > .active > a:focus {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 768px) {
  .masthead-brand {
    float: left;
  }
  .masthead-nav {
    float: right;
  }
}


/*
 * Cover
 */

.cover {
  padding: 0 20px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}


/*
 * Footer
 */

.mastfoot {
  color: #999; /* IE8 proofing */
  color: rgba(255,255,255,.5);
}


/*
 * Affix and center
 */

@media (min-width: 768px) {
  /* Pull out the header and footer */
  .masthead {
    position: fixed;
    top: 70px;
  }
  .mastfoot {
    position: absolute;
    bottom: 0;
  }
  /* Start the vertical centering */
  .site-wrapper-inner {
    vertical-align: middle;
  }
  /* Handle the widths */
  .masthead,
  .mastfoot,
  .site-wrapper-container {
    width: 100%; /* Must be percentage or pixels for horizontal alignment */
  }
}

@media (min-width: 992px) {
  .masthead,
  .mastfoot,
  .site-wrapper-container {
    width: 700px;
  }
}


.background {
    background-repeat:no-repeat;
    /* custom background-position */
    background-position: 50% 0;
    /* ie8- graceful degradation */
    background-position: 50%\9 0 !important;
}



.fullscreen,
.site-wrapper-inner {
    width:100%;
    height:100%;
    overflow:hidden;
}
.fullscreen.overflow,
.fullscreen.overflow .site-wrapper-inner {
    height:auto;
    min-height:100%;
}



.not-fullscreen {
    height:50%;
    background:#9ed100;
    display: table;
    width: 100%;    
}

</style>


<div class="site-wrapper fullscreen background" data-img-width="1600" data-img-height="1064">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">

        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand">Cover</h3>
            <nav>
              <ul class="nav masthead-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
  
  
  
        <div class="inner cover">
          <h1 class="cover-heading">Cover your page.</h1>
          <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
          <p class="lead">
            <a href="#" class="btn btn-lg btn-default">Learn more</a>
          </p>
        </div>
        
        
  
        <div class="mastfoot">
          <div class="inner">
            <p>
              Sub02 <a href="#">Response</a>, by <a href="#">Sample</a>.
            </p>
          </div>
        </div>


    </div>
  </div>
</div>


<div class="not-fullscreen background" data-img-width="1600" data-img-height="1064" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_6643.jpg');">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
  
        <div class="inner cover">
          <h1 class="cover-heading">Cover your page.</h1>
          <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
          <p class="lead">
            <a href="#" class="btn btn-lg btn-default">Learn more</a>
          </p>
        </div>
  
        <div class="mastfoot">
          <div class="inner">
            <p>
              Sub02 <a href="#">Response</a>, by <a href="#">Sample</a>.
            </p>
          </div>
        </div>

    </div>
  </div>
</div>


<section class="not-fullscreen">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
            Centered content
    </div>
  </div>
</section>



<div class="site-wrapper fullscreen background" style="background-image:url('http://www.minimit.com/images/picjumbo.com_DSC_3274.jpg');background-position:100% 50%;" data-img-width="1600" data-img-height="1064">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
            Centered content
        </div>
    </div>
</div>



  
<section class="fullscreen">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
            Centered content
        </div>
    </div>
</section>
  
<div class="fullscreen background" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_9857.jpg');" data-img-width="1600" data-img-height="1064">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
            <br>Content overflow<br>Content overflow
            <br>Content overflow<br>Content overflow
            <br>Content overflow<br>Content overflow
            <br>Content overflow<br>Content overflow
            <br><br>
    </div>
  </div>
</div>
  
<div class="not-fullscreen background" style="background-image:url('http://www.minimit.com/images/picjumbo.com_IMG_8697.jpg');" data-img-width="1600" data-img-height="1064">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
            Centered content
        </div>
    </div>
</div>
  
<section class="fullscreen">
  <div class="site-wrapper-inner">
    <div class="site-wrapper-container">
            Centered content
        </div>
    </div>
</section>




<?php
include_once 'layout/_tail.php';
?>



<script>

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

$(window).resize(backgroundResize);
$(window).resize(fullscreenFix);
$(window).focus(backgroundResize);


fullscreenFix();
backgroundResize();

</script>