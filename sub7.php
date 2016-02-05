<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>


<section class="container sub-loc">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-12">

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
          </ol>
          
      </div>
   </div>  
</section>  






<section class="container sub7-1">

    <div class="page-header">
      <h1>List groups</h1>
    </div>

    <div class="row">

      <div class="col-xs-12 col-sm-4 col-lg-4 text-center">
        
        <img src="/img/prd/3.jpg" alt="" class="img-circle img-responsive">
        
      </div>
      <div class="col-xs-12 col-sm-4 col-lg-4 text-center">
      

        <div class="row">
          <div class="col-xs-12 col-sm-4 col-lg-4 text-center">
          
              <div class="btn-group">
                <button type="button" class="btn btn-danger">선택</button>
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>          
          
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-4 text-center">          
          
              <div class="btn-group">
                <button type="button" class="btn btn-primary">선택</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>       
          
          </div>
          <div class="col-xs-12 col-sm-4 col-lg-4 text-center">          
          
              <div class="btn-group">
                <button type="button" class="btn btn-success">선택</button>
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>           
          
          </div>
          
        </div>          

      </div>
      <div class="col-xs-12 col-sm-4 col-lg-4 text-center">

          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              60%
            </div>
          </div>
          
          <div class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
              40%
            </div>
          </div>        

      </div>
      
    </div>
    
</section>
  
  


  
<section class="container sub7-2">

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
    
        
    <nav class="text-center">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>    
     

</section>





<?php
include_once 'layout/_tail.php';
?>