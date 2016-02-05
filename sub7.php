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
  
  
  
  



<section class="container sub7-1">

    <div class="page-header">
      <h1>Dialog</h1>
    </div>

    <div class="row">

      <div class="col-xs-12 col-sm-3 col-lg-3 text-center">
      
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Launch demo modal
            </button>
            
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>      
        
      </div>
      <div class="col-xs-12 col-sm-3 col-lg-3 text-center">

          
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                
                  <p> 내용 </p>

              </div>
            </div>
          </div>
          

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                  <p> 내용 </p>                
                
              </div>
            </div>
          </div>

      
      </div>
      <div class="col-xs-12 col-sm-3 col-lg-3 text-center">
      
      
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example2-modal-sm">Small modal</button>
                
          <div class="modal fade bs-example2-modal-sm" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                    <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                  </div>
                  <div class="row">
                    <div class="col-sm-9">
                      Level 1: .col-sm-9
                      <div class="row">
                        <div class="col-xs-8 col-sm-6">
                          Level 2: .col-xs-8 .col-sm-6
                        </div>
                        <div class="col-xs-4 col-sm-6">
                          Level 2: .col-xs-4 .col-sm-6
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>      
      
      
      </div>
      <div class="col-xs-12 col-sm-3 col-lg-3 text-center">      



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