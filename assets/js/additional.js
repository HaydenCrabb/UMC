// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#site-header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#site-header').removeClass('pinned').addClass('unpinned');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#site-header').removeClass('unpinned').addClass('pinned');
        }
    }
    lastScrollTop = st;
}



gsap.registerPlugin(ScrollTrigger);

//gsap.from('.custom-logo', { duration: 1, x: '-60', opacity: 0})

// const rightfaders = gsap.utils.toArray('.fade-in-right');
// rightfaders.forEach(fader => {
//  gsap.from(fader, {
//      scrollTrigger: {
//          trigger: fader,
//          start: "top 85%",
//          end: "top 50%",
//          scrub: true,
//          markers: true,
//          toggleActions: "play none none none",
//      },
//      duration: 0.5,
//      x: -60,
//      opacity: 0,

//  });
// });

let mm = gsap.matchMedia();

mm.add("(min-width: 782px)", () => {

    const rightfaders = gsap.utils.toArray('.fade-in-right');

    const fromTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.fade-in-right',
          start: "top 85%",
          end: "top 50%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

    const toTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.fade-in-right',
          start: "bottom 40%",
          end: "bottom 5%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

    rightfaders.forEach(fader => {
      // Animation for gsap.from
      fromTimeline.from(fader, {
        duration: 0.5,
        x: -60,
        opacity: 0,
      });

     // Animation for gsap.to

      toTimeline.to(fader, {
        duration: 0.5,
        x: 60,
        opacity: 0,
        delay: 0.5,
      });
    });

    //left faders

    const leftfaders = gsap.utils.toArray('.fade-in-left');

    const left_fromTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.fade-in-left',
          start: "top 85%",
          end: "top 50%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

    const left_toTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.fade-in-left',
          start: "bottom 40%",
          end: "bottom 5%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

    leftfaders.forEach(fader => {
      // Animation for gsap.from
      left_fromTimeline.from(fader, {
        duration: 0.5,
        x: 60,
        opacity: 0,
      });

     // Animation for gsap.to

      left_toTimeline.to(fader, {
        duration: 0.5,
        x: -60,
        opacity: 0,
      });
    });


    //second right faders
    //left faders

    const second_rightfaders = gsap.utils.toArray('.second-fade-in-to-right');

    const second_fromTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.second-fade-in-to-right',
          start: "top 90%",
          end: "top 70%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

    const second_toTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.second-fade-in-to-right',
          start: "bottom 40%",
          end: "bottom 5%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

    second_rightfaders.forEach(fader => {
      // Animation for gsap.from
      second_fromTimeline.from(fader, {
        duration: 0.5,
        x: -60,
        opacity: 0,
      });

     // Animation for gsap.to

      second_toTimeline.to(fader, {
        duration: 0.5,
        x: 60,
        opacity: 0,
      });
    });

});



const rightfaders_0 = gsap.utils.toArray('.fader-in');
rightfaders_0.forEach(fader => {
  // Animation for gsap.from
  const fader_fromTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: fader,
        start: "top: 95%",
        end: "top: 100%",
        scrub: true,
        toggleActions: "play none none none",
    }
  });
    fader_fromTimeline.from(fader, {
        duration: 0.5,
        x: -60,
        opacity: 0,
    });

 // Animation for gsap.to
  const fade_inTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: fader,
      start: "bottom 30%",
      end: "bottom 5%",
      scrub: true,
      toggleActions: "play none none none",
    }
  });

  fade_inTimeline.to(fader, {
    duration: 0.5,
    x: 60,
    opacity: 0,
  });
});

const standard_left_fade = gsap.utils.toArray('.standard-left-fade');
standard_left_fade.forEach(fader => {
    gsap.from(fader, {
        scrollTrigger: {
            trigger: fader,
            start: "top 85%",
            end: "top 50%",
            scrub: false,
            toggleActions: "play none none none",
        },
        duration: 0.5,
        x: 60,
        opacity: 0,
    });
});

const upfaders = gsap.utils.toArray('.fade-inout-up');
upfaders.forEach(fader => {

    const inout_fromTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: fader,
            start: "top: 90%",
            end: "top: 100%",
            scrub: true,
            toggleActions: "play none none none",
        }
    });
    inout_fromTimeline.from(fader, {
        duration: 0.5,
        y: 60,
        opacity: 0,
    });
    // Animation for gsap.to
      const inout_toTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: fader,
          start: "bottom 30%",
          end: "bottom 5%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

      inout_toTimeline.to(fader, {
        duration: 0.5,
        y: -60,
        opacity: 0,
      });
});

const upOutfaders = gsap.utils.toArray('.up-out');
upOutfaders.forEach(fader => {
    gsap.to(fader, {
        scrollTrigger: {
            trigger: fader,
            //markers: {startColor: "green", endColor: "red", fontSize: "12px"},
            start: "top 0%",
            scrub: true,
            toggleActions: "play none none none",
        },
        duration: 3,
        y: -60,
        opacity: 1,
    });
});


const dia_fade = gsap.utils.toArray('.dia_fade');
dia_fade.forEach(fader => {

    const dia_from_timeline = gsap.timeline({
        scrollTrigger: {
            trigger: fader,
            start: "top: 90%",
            end: "top: 70%",
            scrub: true,
            toggleActions: "play none none none",
        }
    });
    dia_from_timeline.from(fader, {
        duration: 0.5,
        y: 40,
        x: -40,
        opacity: 0,
    });
/*    // Animation for gsap.to
      const dia_to_timeline = gsap.timeline({
        scrollTrigger: {
          trigger: fader,
          start: "bottom 20%",
          end: "bottom 5%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

      dia_to_timeline.to(fader, {
        duration: 0.5,
        y: -40,
        x: 40,
        opacity: 0,
      }); */
});

const dia_fade_2 = gsap.utils.toArray('.dia_fade_2');
dia_fade_2.forEach(fader => {

    const dia_from_timeline = gsap.timeline({
        scrollTrigger: {
            trigger: fader,
            start: "top: 90%",
            end: "top: 60%",
            scrub: true,
            toggleActions: "play none none none",
        }
    });
    dia_from_timeline.from(fader, {
        duration: 0.75,
        y: 60,
        x: -60,
        opacity: 0,
    });
    /* // Animation for gsap.to
      const dia_to_timeline = gsap.timeline({
        scrollTrigger: {
          trigger: fader,
          start: "bottom 20%",
          end: "bottom 5%",
          scrub: true,
          toggleActions: "play none none none",
        }
      });

      dia_to_timeline.to(fader, {
        duration: 0.5,
        y: -60,
        x: 60,
        opacity: 0, 
      }); */
});