<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>

<div class="container">

  <div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">

      <p class="pull-right visible-xs">
        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
      </p>

      <div class="jumbotron">
        <h1>Bengi Response Web Layout</h1>
        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
      </div>
      
      <div class="row">

        <?php 
        for($i=1;$i<=5;$i++) {
        ?>

            <div class="col-xs-6 col-lg-4">
              <h2><i class="fa fa-user-md  fa-lg"></i> Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p>
                <a class="btn btn-default" href="#" role="button">View details 
                    <span class="badge">5</span> 
                    <span class="label label-danger">Label</span> 
                    &raquo; 
                </a>
              </p>
            </div>
    
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p>
                <a class="btn btn-default" href="#" role="button">View details 
                    <span class="badge">5</span> 
                    <span class="label label-warning">Label</span> 
                    &raquo; 
                </a>
              </p>
            </div>
    
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p>
                <a class="btn btn-default" href="#" role="button">View details 
                    <span class="badge">5</span> 
                    <span class="label label-info">Label</span> 
                    &raquo; 
                </a>
              </p>
            </div>
    
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p>
                <a class="btn btn-default" href="#" role="button">View details 
                    <span class="badge">5</span> 
                    <span class="label label-success">Label</span> 
                    &raquo; 
                </a>
              </p>
            </div>
    
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p>
                <a class="btn btn-default" href="#" role="button">View details 
                    <span class="badge">5</span> 
                    <span class="label label-primary">Label</span> 
                    &raquo; 
                </a>
              </p>
            </div>
    
            <div class="col-xs-6 col-lg-4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
              <p>
                <a class="btn btn-default" href="#" role="button">View details 
                    <span class="badge">5</span> 
                    <span class="label label-default">Label</span> 
                    &raquo; 
                </a>
              </p>
            </div>

        <?php 
        }
        ?>

      </div>
      
    </div>
    
    
    
    
    
    

    <style>
    .affix {
      // top: 70px;   
    }
    </style>
    
    <script>
    /*
    $(document).ready(function(){
       $('#sidebar .nav').affix({offset: {top: 205} }); 
    });
    */
    </script>

    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      <div class="list-group" data-spy="affix" data-offset-top="205">
        <a href="#" class="list-group-item active">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a> 
        <a href="#" class="list-group-item">Link</a>
      </div>
    </div>
    
  </div>
  

</div>



<?php
include_once 'layout/_tail.php';
?>