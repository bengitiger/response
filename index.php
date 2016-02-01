<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>



<style type="text/css">
.main-carousel {   
  overflow: hidden;
}

.carousel {
  background: #2f4357;
  max-height: 400px;   
}

.carousel .item img{
  margin: 0 auto;
}

.carousel img {
  width: 100%;
}

</style>

<div class="main-carousel">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/img/back/1.jpg" alt="">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="/img/back/2.jpg" alt="">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="/img/back/3.jpg" alt="">
      <div class="carousel-caption">
        ...
      </div>
    </div>    
  </div>

  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
</div>






<div class="jumbotron">
  <div class="container">
    <h1>Hello, world!</h1>
    <p>This is a template for a simple marketing or informational we unique.</p>
    <p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a>
    </p>
  </div>
</div>







<section id="t2">
  <div class="container">

    <h1 class="text-center">Hello World 테스트</h1>

  </div>
</section>





<section id="t3">
  <div class="container">

    <div class="row ed">
      <div class="col-md-12">
        <div id="owl-example" class="owl-carousel">
          <div>Your Content 1</div>
          <div>Your Content 2</div>
          <div>Your Content 3</div>
          <div>Your Content 4</div>
          <div>Your Content</div>
          <div>Your Content</div>
          <div>Your Content</div>
        </div>
      </div>
    </div>

  </div>
</section>





<section id="t5">

  <div class="container">

    <div class="row ed">
      <div class="col-md-4 text-center">.col-md-1</div>
      <div class="col-md-4">.col-md-1</div>
      <div class="col-md-4">

        <!-- 
      <a class="fancybox" rel="group" href="/js/fancyBox/demo/1_b.jpg"><img src="/js/fancyBox/demo/1_s.jpg" alt="" /></a>
      <a class="fancybox" rel="group" href="/js/fancyBox/demo/2_b.jpg"><img src="/js/fancyBox/demo/2_s.jpg" alt="" /></a>
      -->

      </div>
    </div>

  </div>
</section>





<section id="scrollpaginationdemo">

  <div class="container">

    <div class="row ed">
      <div class="col-md-12 ed">


        <ul id="content">
          <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum elementum felis. Quisque porta turpis nec eros consectetur lacinia. Pellentesque sagittis adipiscing egestas.</p></li>
          <li><p>Aliquam dapibus tincidunt odio. Phasellus volutpat dui nec ante volutpat euismod.</p></li>
          <li><p>Phasellus vehicula turpis nec dui facilisis eget condimentum risus ullamcorper. Nunc imperdiet, tortor ultrices aliquam eleifend, nisl turpis venenatis dui, at vestibulum magna tellus in tortor.</p></li>
          <li><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris tincidunt nisi in tortor tincidunt ut ullamcorper lectus dapibus.</p></li>
          <li><p>Aenean interdum dui vitae purus molestie nec placerat nibh semper. Maecenas ultrices elementum dapibus. Aenean feugiat, metus in mattis mattis, justo nisi dignissim libero, ac volutpat dui nibh quis metus.</p></li>
          <li><p>Morbi eget tristique dui. Vivamus nec turpis eu nisi euismod accumsan sed in tortor. Maecenas laoreet leo ut tortor viverra facilisis.</p></li>
        </ul>
        <div class="loading" id="loading">Wait a moment... it's loading!</div>
        <div class="loading" id="nomoreresults">Sorry, no more results for your pagination demo.</div>




      </div>
    </div>
  </div>

</section>






<?php
include_once 'layout/_tail.php';
?>