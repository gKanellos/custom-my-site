<?php /* Template Name: Profile */ ?>

<?php get_header(); ?>

<section id="about-intro">
<div class="elementor-section elementor-top-section elementor-element elementor-section-height-full elementor-section-boxed elementor-section-height-default elementor-section-items-middle">
    <div class="container">
        <div class="section section-content clearfix" data-arts-os-animation="animated">
            <div class="section-content__inner">
                <div class="section-content__wrapper-heading">
                    <div>
                       
                        <h2 class="split-text-group">
                                <span style="color: #e5e8ea;">
                                    <div style="position: relative; display: inline-block;"
                                        class="split-text__word1">Nice</div>
                                        <div style="position: relative; display: inline-block;"
                                            class="split-text__word1">to</div>
                                        <div style="position: relative; display: inline-block;"
                                            class="split-text__word1">meet</div>
                                    <div style="position: relative; display: inline-block;"
                                        class="split-text__word1">you</div>
                                    <div style="position: relative; display: inline-block;"
                                        class="split-text__word1">,</div>
                                     <span style="color: #FF2633;">
                                    <div style="position: relative; display: inline-block;"
                                        class="split-text__word1">I'm</div>
                                    <div style="position: relative; display: inline-block;"
                                        class="split-text__word1">Gabrielle</div>
                                      </span>
                                    <div style="position: relative; display: inline-block;"
                                        class="split-text__word1">!</div>
                                   
                                </span>
                    
                           
                            </h2>
                    </div>
                </div>
            </div>
        </div> <!-- to here-->
    </div>
</div>
</section>

<section class="transition-section row container">
  
 <div class="images col-md-6">
  <div class="image1 image-about"><img src="">
  </div>

  <div class="image2 image-about"><img src="https://gabriellekanellos.com/wp-content/uploads/2021/08/about-desk-1.png"></div>
   
   <div class="image3 image-about"><img src="https://gabriellekanellos.com/wp-content/uploads/2021/08/Diploma.png"></div>

   <div class="image4 image-about"><img src="https://gabriellekanellos.com/wp-content/uploads/2021/08/about-books.png"></div>

   <div class="image5 image-about"><img src="https://gabriellekanellos.com/wp-content/uploads/2021/08/about-microphone-1.png"></div>

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

<section class="pb-medium">
    <div class="container social-container">
          
            <a class="contact-item">
              <div class="contact-item-title">
              <h4>Github</h4>
              <p class="animated animatedFadeInUp fadeInUp">See some of my projects</p>
              </div>
            </a>
            <a class="contact-item">
             <div class="contact-item-title">
              <h4>CodePen</h4>
              <p class="animated animatedFadeInUp fadeInUp">Explore my code pens</p>
              </div>
            </a>
          
         
            <a class="contact-item">
              <div class="contact-item-title">
              <h4>LinkedIn</h4>
              <p class="animated animatedFadeInUp fadeInUp">Connect with me</p>
              </div>
            </a>
            <a class="contact-item">
              <div class="contact-item-title">
              <h4>Email</h4>
              <p class="animated animatedFadeInUp fadeInUp">Reach out</p>
              </div>
            </a>
        
    </div>
</section>


<style>

   body {
  background-color: #0f1c28;
  
}

h4 {
  color:white !important;
}

.container-about {
  /*height: 100vh;*/
  margin-top:50vh;
  display: grid;
  place-items: center;
     }

.transition-section {
   width: 100%;
  height: 100vh;
  padding: 0px 60px !important;
  
  /*display: flex;*/
  align-items: center;
  justify-content: center;
   
}
.content {
  margin-top:-20vh;
  text-align:left;  
}

.content h4 {
  position:absolute;
  width:100%;
}

.images{
  display:flex;
  margin-top:-20vh;
}
.image-about {
  
  /*width: 200px;*/
  /*height: 100px;*/
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
.image3 {
  top: -100px;
    left: -50px;
}

.image4{
  top:50px;
  left:240px;
}

.image5 {
  top:55px;
  left:40px;
}

#about-intro .elementor-section.elementor-section-height-full {
    height: auto !important;
    margin-top: 50vh;
  }

/*  Social */


@media only screen and (min-width: 769px) {
  .social-container {
    display: flex;
  }
  .contact-item {
  flex-grow: 1;
    flex-basis: 0;
    display:flex;
    transition: 0.4s all;
     border: 1px solid #f31c29;
  height: 250px;
  }
  .contact-item:hover {
  flex-grow: 1.3;
  background:#f31c29;
}

.contact-item:nth-child(2) {
    margin:0px 25px;
}
.contact-item:nth-child(3) {
    margin:0px 25px 0px 0px;
}
  .contact-item-title p{
  display:none;
}
  
.contact-item:hover .contact-item-title{
  color:#0f1b28;
 
}

.contact-item:hover .contact-item-title p {
  display:block;
  
}


@keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

@-webkit-keyframes fadeInUp {
    from {
        transform: translate3d(0,40px,0)
    }

    to {
        transform: translate3d(0,0,0);
        opacity: 1
    }
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -webkit-animation-fill-mode: both
}

.animatedFadeInUp {
    opacity: 0
}

.fadeInUp {
    opacity: 0;
    animation-name: fadeInUp;
    -webkit-animation-name: fadeInUp;
}
.contact-item-title p{
  font-size:20px !important;
}

}

@media only screen and (max-width: 768px) {
  .contact-item-title {
     border: 1px solid #f31c29;
    padding:1em;
  }
  .contact-item-title p{
  color:white !important; 
}
}

/* end media query */

.social-container {
  justify-content: center;
  align-items: center;
  /*
  height: 100vh;
  padding-right: 25px;
  padding-left: 25px;
  margin-right: auto;
  margin-left: auto;
  */
}

.contact-item {
 
  padding: 2em;
  box-sizing: border-box;
  text-align: center;
}

.contact-item-title h4 {
  text-align:left;
  font-weight:500;
}
.contact-item-title{
  text-transform: uppercase;
  letter-spacing: 0.075em;
  color:white;
}
.contact-item-title p{
  text-transform: uppercase;
  letter-spacing: 0.075em;
  text-align:left;
  font-size:1em;
}

.pin-spacer {
  margin-right: auto !important;
  margin-left: auto !important;
}

</style>


<?php get_footer(); ?>
