gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

    console.log("DOM loaded");
   
    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e){
   
     //custom GSAP code goes here
     // This tween will rotate an element with a class of .my-element
      gsap.to('.my-element', {
       rotation: 360,
       duration: 5,
       ease: 'bounce.out'
      })

      gsap.to('.my-element-2', {
        scrollTrigger: {
            trigger: '.my-element-2',
            toggleActions: "restart none none none"
        },
        rotation: 360,
        xPercent: 150,
        duration: 2,
        repeat: 2,
        yoyo: true,
        ease: 'power1.inOut'
      })
   
      console.log("window loaded");
     }, false);
   
   });
   