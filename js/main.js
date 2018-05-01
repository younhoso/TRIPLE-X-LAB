$(document).ready(function() {
	$('.fullpage').fullpage({
        'navigation': true,
        onLeave: function(anchor, index){
            if($('.fp-section.active')) {
            $(this).find('.dis').fadeOut(300);
           }
        },
        afterLoad: function(anchor, index){
            if($('.fp-section.active')) {
            $(this).find('.dis').fadeIn(300);
        }
    }
    });
    function open(){
        anime({
            targets:'.pc_gn_wrpper .anima',
            translateX: 1777,
            easing:'easeInOutBack',
            duration:function(anima, index, totaltargets){
                return 500 + (index * 200);
            }                    
        })  
    };
    function closeed(){
        anime({
            targets:'.pc_gn_wrpper .anima',
            translateX: 0,
            easing:'easeInOutBack',
            duration: function(anima, index, totaltargets){
                return 500 + (index * 100);
            }
        });  
    };
    $('.vertical_center').click(function(){
        open();
        $('.vertical_center').closest('.header_design')
                             .next()
                             .find('.close_btn')
                             .fadeIn(2000);
    }); 
    $('.close_btn').click(function(){
        closeed();
        $('.close_btn').fadeOut(200);
    });
    $('.pc_gn_wrpper li').click(function(){
        closeed();
        $('.pc_gn_wrpper li').closest('.menu_box_container')
                             .next()
                             .fadeOut(100);
    });
//    $('.hamber').hover(function(){
//        $('.hamber').toggleClass("on", 500, "easeOutSine");
//    });
    VanillaTilt.init(document.querySelector(".vanilla"), {
        max: 25,
        speed: 400

    });

    $('.items').owlCarousel({
        autoWidth:true,
        margin:10,
        loop:true,
        nav:true,
        // autoplay:true,
        // autoplayTimeout:2000,
        items:3
        
    });

});