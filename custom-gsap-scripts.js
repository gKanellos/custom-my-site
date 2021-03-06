gsap.registerPlugin(ScrollTrigger);


document.addEventListener("DOMContentLoaded", function(event) {
  
    window.onload = function() {
      
       window.requestAnimationFrame(function() {
      
        gsap.from(".split-text-group .split-text__word1", { opacity: 0, y:20, delay:3, stagger:0.15});
        gsap.from(".scroll-down", { opacity: 0, delay:4.5, duration:2});
        gsap.to([material, material2, material3, material4, material5], { opacity: 1, delay:4.5, duration:2});

       });
      
    };
  
});

  gsap.from(".orange p", {
    scrollTrigger: ".orange", opacity: 0, y:30, repeat:-1
   
  });
  


let tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".transition-section",
    scrub: 1,
    end: "100%",
    pin: true,
	pinType: "transform"
  }
});

let images = gsap.utils.toArray(".image-about img");
let texts = gsap.utils.toArray(".text-about h4");
let transitionDuration = 0.5;
let stayDuration = 1;

images.forEach((image, i) => {
  let text = texts[i],
      time = (transitionDuration + stayDuration) * i;
  if (i) {
    tl.to(texts[i-1], {autoAlpha: 0, y: -50, ease: "power1.in", duration: transitionDuration}, time);
  }
  tl.fromTo([text, image], {autoAlpha: 0, y: 100}, {autoAlpha: 1, y: 0, stagger: 0.2}, time);
});
tl.to({}, {duration: stayDuration}); 
