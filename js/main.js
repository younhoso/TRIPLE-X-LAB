$(document).ready(function() {
	$('.fullpage').fullpage({
        navigation: false,
        onLeave: function(anchor, index){
            if($('.fp-section.active')) {
            $(this).find('.dis').fadeOut(300);
           }
        },
        afterLoad: function(anchor, index){
            if($('.fp-section.active')) {
            $(this).find('.dis').fadeIn(300);
        }
            if(index == 4) {
                $(this).closest('.pc_design').prev('.l_wrapper').children('.login').css('color','#333');
            } else if(index != 4){
                $(this).closest('.pc_design').prev('.l_wrapper').children('.login').css('color','#fff');
            }
        }
    });


    
    // $('.scrolldown a, .scrolldown.down, .scroll.down').on('click',function() {
    //     try {
    //         $.fu.fullpage.moveSectionDown();
    //     } catch (error){
    //         $('html, body').animate({
    //             scrollTop: window.innerHeight
    //         }, 400, function () {
    //         });
    //     }
    // });
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
                             .next('.pc_design')
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