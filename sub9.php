<?php
include_once './common/_common.php';
include_once 'layout/_head.php';
?>

<section class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-lg-12">



<style>
.da-thumbs {
    list-style: none;
    width: 984px;
    height: 600px;
    position: relative;
    margin: 20px auto;
    padding: 0;
}

.da-thumbs li {
    float: left;
    margin: 5px;
    background: #fff;
    padding: 8px;
    position: relative;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.da-thumbs li a {
    overflow: hidden;
}

.da-thumbs li a, .da-thumbs li a img {
    display: block;
    position: relative;
}

.da-thumbs li a div {
    position: absolute;
    background: #333;
    background: rgba(75,75,75,0.7);
    width: 100%;
    height: 100%;
}

.da-thumbs li a div span {
    display: block;
    padding: 10px 0;
    margin: 40px 20px 20px 20px;
    text-transform: uppercase;
    font-weight: normal;
    color: rgba(255,255,255,0.9);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.5);
    box-shadow: 0 1px 0 rgba(0,0,0,0.1), 0 -10px 0 rgba(255,255,255,0.3);
}
</style>

        
        <ul id="da-thumbs" class="da-thumbs">
          <li>
            <a href="http://dribbble.com/shots/505046-Menu">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/1.jpg" />
              <div><span>Menu by Simon Jensen</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/504336-TN-Aquarium">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/2.jpg" />
              <div><span>TN Aquarium by Charlie Gann</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/504197-Mr-Crabs">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/3.jpg" />
              <div><span>Mr. Crabs by John Generalov</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/503731-Gallery-of-Mo-2-Mo-logo">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/4.jpg" />
              <div><span>Gallery of Mo 2.Mo logo by Adam Campion</span></div>
            </a>
          </li>
          <li>  
            <a href="http://dribbble.com/shots/503058-Ice-Cream-nom-nom">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/5.jpg" />
              <div><span>Ice Cream - nom nom by Eight Hour Day</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/502927-My-Muse">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/6.jpg" />
              <div><span>My Muse by Zachary Horst</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/502538-Natalie-Justin-Cleaning">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/7.jpg" />
              <div><span>Natalie & Justin Cleaning by Justin Younger</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/502523-App-Preview">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/8.jpg" />
              <div><span>App Preview by Ryan Deshler</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/501695-Cornwall-Map">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/9.jpg" />
              <div><span>Cornwall Map by Katharina Maria Zimmermann</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/500861-final-AD-logo">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/10.jpg" />
              <div><span>final AD logo by Annette Diana</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/500369-Land-Those-Planes">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/11.jpg" />
              <div><span>Land Those Planes by Lee Ann Marcel</span></div>
            </a>
          </li>
          <li>
            <a href="http://dribbble.com/shots/497795-Seahorse">
              <img src="http://tympanus.net/TipsTricks/DirectionAwareHoverEffect/images/12.jpg" />
              <div><span>Seahorse by Trevor Basset</span></div>
            </a>
          </li>
        </ul>      
        
        
         
          
      </div>
   </div>  
</section>  


<?php
include_once 'layout/_tail.php';
?>


<script>
$(function () {
  

  if ( jQuery().hoverdir ) {  
    jQuery('#da-thumbs > li').each( function() {
        $(this).hoverdir();
    });
  }

});  
</script>