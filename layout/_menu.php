<?php
if (!defined('_BENGI_RWD_VER_')) exit;
?>
<ul class="nav navbar-nav">
  <li class="active"><a href="/">MAIN <span class="sr-only">(current)</span></a></li>
  <li><a href="/sub.php">SUB</a></li>
  <li><a href="/sub2.php">SUB2</a></li>
  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="/sub3.php">SUB3</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">One more separated link</a></li>
    </ul>
  </li>
</ul>

<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">검색</button>
</form>

<ul class="nav navbar-nav navbar-right">
  <li><a href="#">Link</a></li>
  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Separated link</a></li>
    </ul></li>
</ul>