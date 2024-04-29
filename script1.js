/* gsap.from('.navbar-brand', {opacity:0, duration:2, y:-50,ease:"bounce.out"});
gsap.from('.tag', {opacity:0, duration:2, x:50, ease:'bounce.out', stagger:0.6}); */
gsap.registerPlugin(ScrollTrigger);

gsap.timeline().from('.navbar', {scale:0, duration:2})
.from('.navbar-brand', {opacity:0, scale: 0, ease:"back"})
.from('.tag', {opacity:0, y: 10, ease:"back"});


gsap.from(".about-text", {
    duration:7,
    y:250,
    opacity:0,
    scrollTrigger:{
        trigger:".aboutbg",
        markers:true,
        start:"bottom 90%", ///start at the top of our trigger and a percentage down the viewpost
        end:"top 30%",
          scrub:3, //4 seconds of smooting
}
});

tl.from('.about-text',{
    duration:1,
         y:250,
    opacity:0,
}).from('.blocker',{
    duration:1,
    x:250,
opacity:0,
});
