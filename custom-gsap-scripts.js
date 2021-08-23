gsap.registerPlugin(ScrollTrigger);

gsap.from(".orange p", {
  scrollTrigger: ".orange", 
  duration: 3, x: 600, opacity: 0, scale: 0, repeat:-1
 
});


let tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".transition-section",
    scrub: 1,
    end: "300%",
    pin: true
  }
});

let images = gsap.utils.toArray(".image img");
let texts = gsap.utils.toArray(".text p");
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