<?php /* Template Name: Profile */ ?>

<?php get_header(); ?>


<section class="transition-section">
  
 <div class="images">
  <div class="image1 image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/Great_Wave_off_Kanagawa2_cr.jpg">
  </div>

  <div class="image2 image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg"></div>
   
     <div class="image3 image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg"></div>
  </div>
  <div class="content">
  <div class="text1 text">
     <p>This is First Image</p>
  </div>
   <div class="text2 text">
     <p>This is Second Image</p>
  </div>
     <div class="text3 text">
     <p>This is three Image</p>
  </div>
  </div>

  
</section>


<style>

   body {
  color: white;
  text-align: center;
  font-weight: 300;
  
}
   .transition-section {
  background-color: #222;
  width: 100%;
 height: 100vh;
  padding: 0;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.content {
  width:50%;
  position:absolute;
}

.content p {
  position:absolute;
  width:100%;
}

.images{
  display:flex;
  width:50%;
}
.image {
  width: 200px;
  height: 100px;
  position:absolute;
 /* position: absolute;
  z-index: 0;
  left: 30%;
  top: 50%;
  transform: translate3d(-50%, -50%, 0); */
}
img{
  width:100%;
}
.image1 {
   left: 10%;
}

.image2 {
  left:20%;
}


</style>


<?php get_footer(); ?>