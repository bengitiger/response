<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>


<style>
#myTabs a {
  font-size: 12px;
}

#myTabContent {
    padding: 20px 15px 10px;
    font-size: 12px;
    border: 1px solid #ddd;
    border-top: 0px;
    border-radius: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>

<div class="container">



  <section class="sub3tab">

    <div class="page-header">
      <h1>List groups</h1>
    </div>

    <div class="row">

      <div class="col-xs-12 col-lg-4">
      
          <a class="img-popup-link" href="img/back/1.jpg">
            <img data-original="img/back/1.jpg" class="lazy img-responsive img-thumbnail">      
          </a> 
          
          
          <div class="row parent-container">
          
            <div class="col-xs-4 col-lg-4">
              <a href="img/back/2.jpg" title="<b style='color: yellow;'>TEST</b> - image 1">
                <img data-original="img/back/2.jpg" class="lazy img-responsive img-thumbnail">  
              </a>            
            </div>
            <div class="col-xs-4 col-lg-4">
              <a href="img/back/3.jpg" title="image 2">
                <img data-original="img/back/3.jpg" class="lazy img-responsive img-thumbnail">  
              </a>            
            </div>
            <div class="col-xs-4 col-lg-4">
              <a href="img/back/1.jpg" title="image 3">
                <img data-original="img/back/1.jpg" class="lazy img-responsive img-thumbnail">  
              </a>            
            </div>   
            

            <div class="col-xs-4 col-lg-4">
              <a href="img/back/5.jpg" title="image 4">
                <img data-original="img/back/5.jpg" class="lazy img-responsive img-thumbnail">  
              </a>            
            </div>   

                   
          </div>      
          
      </div>
      <div class="col-xs-12 col-lg-8">
      

          <ul id="myTabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
            <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
            <li role="presentation" class="dropdown"><a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
                <li><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
              </ul></li>
          </ul>
  
          <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry
                richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk
                aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY
                ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth
                chambray yr.</p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR,
                banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
            </div>
          </div>


          <?php 
          //-------------------------------------------------------------
          ?>

          


          <?php 
          //-------------------------------------------------------------
          ?>





          <?php 
          //-------------------------------------------------------------
          ?>





          <?php 
          //-------------------------------------------------------------
          ?>



          <?php 
          //-------------------------------------------------------------
          ?>





      </div>


    </div>

  </section>
  
  
  
  
  
  
  
  

</div>

<?php
include_once 'layout/_tail.php';
?>