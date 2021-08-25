<?php /* Template Name: Profile */ ?>

<?php get_header(); ?>


<section class="transition-section row">
  
 <div class="images col-md-6">
  <div class="image1 image-about"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/Great_Wave_off_Kanagawa2_cr.jpg">
  </div>

  <div class="image2 image-about"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg"></div>
   
   <div class="image3 image-about"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg"></div>

   <div class="image4 image-about"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg"></div>

   <div class="image5 image-about"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/495197/0st9yhngses-benjamin-child.jpg"></div>

  </div>
  <div class="content col-md-6">
  <div class="text1 text-about">
     <h4>I’m a designer and front-end developer that loves building enjoyable digital experiences with multidisciplinary teams.</h4>
  </div>
   <div class="text2 text-about">
     <h4>As someone at the crossroads between UX/UI and front-end development, I aim to create adaptable and responsive digital products from initial conceptualization to final deliverables that showcase simplicity and originality.
</h4>
  </div>
     <div class="text3 text-about">
     <h4>Since graduating in 2017 from the University of Southern California with a Bachelor’s in Media Arts and Practice from the School of Cinematic Arts, I’ve been working with several companies from technology startups to corporations with over 21,000 employees.</h4>
  </div>
  <div class="text4 text-about">
     <h4>In my spare time, I love to read and am currently reading Three-Body Problem by Liu Cixin.
</h4>
  </div>

  <div class="text5 text-about">
     <h4>I also love podcasts and started my own history podcast in 2020.
</h4>
  </div>

  </div>

  
</section>


<style>

   body {
  background-color: #0f1c28;
  
}

h4 {
  color:white !important;
}

   .transition-section {
    width: 100%;
  height: 100vh;
  padding: 0;
  margin: 0;
  /*display: flex;*/
  align-items: center;
  justify-content: center;
   
}
.content {
  
  text-align:left;  
}

.content h4 {
  position:absolute;
  width:100%;
}

.images{
  display:flex;
  
}
.image-about {
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
