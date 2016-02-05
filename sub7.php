<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>


<div class="container">

  <section class="sub7-1">

    <div class="page-header">
      <h1>List groups</h1>
    </div>

    <div class="row">

      <div class="col-xs-12 col-sm-4 col-lg-4 text-center">
1
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-4 text-center">
2
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-4 text-center">
3
      </div>
      
    </div>
    
  </section>
  
  
  
  <section class="sub7-2">

    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr class="success">
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>        
        <tr class="danger">
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

  </section>

</div>

<?php
include_once 'layout/_tail.php';
?>