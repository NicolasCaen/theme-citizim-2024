document.addEventListener('DOMContentLoaded', function() {
    // Initialisation de GSAP et ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Timeline 1
    const timeline1 = gsap.timeline({"defaults":{"ease":"power2.out","duration":1},"scrollTrigger":{"trigger":"#timeline1","start":"top center","end":"","markers":true,"pin":false,"scrub":true,"scrubType":"smooth","smoothness":5.9000000000000004}});

    timeline1
        .fromTo("#elem1",
            {"opacity":0,"y":-100},
            {"opacity":1,"y":0,"duration":3.6000000000000001,"ease":"power2.out"},
            "+=0"
        )
    timeline1
        .fromTo("#elem2",
            {"opacity":0,"x":100},
            {"opacity":1,"x":0,"duration":2.2000000000000002,"ease":"power2.out"},
            "0"
        )
    ;

    const auawgaAnimation = gsap.fromTo("#auawga",
        {"opacity":0,"scale":0.5},
        {"opacity":1,"scale":1,"duration":3.2000000000000002,"ease":"power2.out"}
    );

    document.querySelector('#auawga').addEventListener('click', function() {
        if (auawgaAnimation.reversed()) {
            auawgaAnimation.play();
        } else {
            auawgaAnimation.reverse();
        }
    });
    const standalone1Animation = gsap.fromTo("#standalone1",
        {"opacity":0,"x":-100},
        {"opacity":1,"x":0,"duration":1,"ease":"power2.out"}
    );

    document.querySelector('#standalone1').addEventListener('click', function() {
        standalone1Animation.play();
    });
});
