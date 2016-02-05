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
  
  
  
  <hr>
  
  <section class="sub7-2">

    <div class="page-header">
      <h1>Table List</h1>
    </div>


    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Username</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Username</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-center">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr class="success">
            <th scope="row" class="text-center">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row" class="text-center">3</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>        
          <tr class="danger">
            <th scope="row" class="text-center">4</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>      
      

  </section>

</div>

<?php
include_once 'layout/_tail.php';
?>