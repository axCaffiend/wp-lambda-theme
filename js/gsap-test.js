gsap.registerPlugin(DrawSVGPlugin,GSDevTools,MotionPathHelper,MotionPathPlugin,ScrollTrigger, MorphSVGPlugin);
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event){

    console.log("DOM loaded - running GSAP animations");

    //wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e){
      //custom GSAP code goes here

      // --- HOME HERO ---
      // Waves
      const homeHeroSVG = document.querySelector("#home-hero-paths");
      const homeHeroBg = document.querySelector("#home-hero-paths #bg-rect");
      const waves = document.querySelectorAll("#home-hero-paths > path");
      // Arrow
      const heroArrow = document.querySelector("#home-hero-arrow");
      const heroArrowLine = document.querySelector("#home-hero-arrow #arrow-line");
      const heroArrowHead = document.querySelector("#home-hero-arrow #arrow-head");
      // Text
      const heroTextSelector = ".home-hero .text-content"
      const heroText = document.querySelector(heroTextSelector);
      const heroTitle = document.querySelector(`.home-hero .flux-name`);
      const heroStrapline = document.querySelector(`${heroTextSelector} .strapline`);
      const heroDescription = document.querySelector(`${heroTextSelector} .description`);

      let homeHeroMainTl = gsap.timeline();

      // Waves animations
      
      const blueWave = gsap.to("#wave-blue", {
        duration: 18,
        morphSVG: "#wave-yellow",
        yoyo: true,
        repeat: -1,
        ease: "power1.inOut"
      })

      const yellowWave = gsap.to("#wave-yellow", {
        duration: 14,
        morphSVG: "#wave-pink",
        yoyo: true,
        repeat: -1,
        ease: "power1.inOut"
      })

      const pinkWave = gsap.to("#wave-pink", {
        duration: 9,
        morphSVG: "#wave-blue",
        yoyo: true,
        repeat: -1,
        ease: "power1.inOut"
      })

      const wavesEnter = gsap.fromTo(waves, {
        drawSVG: "0%",
      }, 
      {
        duration: 2,
        stagger: 1,
        drawSVG: "100%"
      })

      // Arrow
      const arrowLine = gsap.fromTo(heroArrowLine, 
        {
          drawSVG: "0%"
        },
        {
          drawSVG: "100%",
          duration: 1.5
        })
      
      const arrowHead = gsap.fromTo(heroArrowHead,
        {
          x: -329
        },
        {
          x: 0,
          duration: 1.5
        }
      ) 

      // Text
      let heroTextTl = gsap.timeline().fromTo(heroTitle, 
        {
          opacity: 0
        },
        {
          opacity: 1,
          duration: 1
        }
      )
      .fromTo(heroStrapline, 
        {
          opacity: 0
        },
        {
          opacity: 1,
          duration: 1
        }
      )
      .fromTo(heroDescription, 
        {
          opacity: 0
        },
        {
          opacity: 1,
          duration: 1
        }
      )

      // Add all home hero animations to main timeline
      homeHeroMainTl
        .add([arrowLine, arrowHead])
        .add([wavesEnter,yellowWave, blueWave, pinkWave], "<+1")
        .add(heroTextTl, "<+2.5")
      




     //  TEST GSAP CODE
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
   