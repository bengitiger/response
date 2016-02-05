<?php
if (!defined('_BENGI_RWD_VER_')) exit;
?>
<!DOCTYPE html>
<html lang="ko" class="<?php echo $vAgent ?> <?php echo $GLB['url']['body']['class'] ?>">
  <head>
    <title>Bengi Response Layout</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name="author" content="">
    <link rel="icon" href="/img/favicon.ico">    
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    
    <link href="/css/ie10-viewport.css" rel="stylesheet">        
    <link href="/css/animate/animate.css" rel="stylesheet">
    <link href="/css/ihover/src/ihover.min.css" rel="stylesheet">    
    <link href="/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="/js/fancybox/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet" type="text/css" media="screen">
    <link href="/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" rel="stylesheet" type="text/css" media="screen">
    <link href="/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" rel="stylesheet" type="text/css" media="screen">    
    <link href="/js/magnific-popup/dist/magnific-popup.css" rel="stylesheet">    
    <link href="/js/maximage/lib/css/jquery.maximage.css?v=1.2" type="text/css" media="screen" rel="stylesheet">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css'>
    
    <link href="/css/bengi-lib.css" rel="stylesheet" media="screen">
    <link href="/css/default.css" rel="stylesheet" media="screen">
    <link href="/css/html-full.css" rel="stylesheet" media="screen">
    <link href="/css/response.css" rel="stylesheet" media="screen">
    
    <?php 
    if($GLB['chkMobile']) echo '<link href="/css/mobile.css" rel="stylesheet" media="screen">';
    else echo '<link href="/css/pc.css" rel="stylesheet" media="screen">'; 
    ?>
     
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->    
    
    <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="/css/ie8.css" />
    <![endif]-->    
  </head>
  <body>
  
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
  
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Bengi</a>
      </div>
  
  
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php 
        include_once $GLB['path']['root'].'/layout/_menu.php';
        ?>
      </div>
    </div>
  </nav>  
  
  