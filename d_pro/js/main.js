$(document).ready(function(){
// ScrollMagic jQuery indexpage pc
    var controller = new ScrollMagic.Controller();
    var ourScene = new ScrollMagic.Scene({
                    triggerElement: '#animate img',
                    duration: '350', //스크롤 끝점을 조절
                    triggerHook:0.49 //스크롤 시작점을 조절
                    }).setClassToggle('#animate', 'fadeInLeft')
                //.addIndicators()  스크롤 시작과 끝을 보여준다.
                .addTo(controller);
    
// PC 버전 Basic-3D-jQuery 플러그인 적용
// rotateSlider itemClass 속성 정의 rotateslider_item
    $('.best_seller').rotateSlider({
        itemClass : 'rotateslider_item'
    });
    
    // 모바일페이지 햄버거메뉴 클릭시, 메뉴보여주기
    $('.hamburger').click(function(){
        $('.mobile_sidebar').fadeIn(200);
	    $('.sidebar').delay(200).addClass('open',300);
        $('.sidebar li').each(function(index){
            $(this).delay(index*100).animate({'left':0,
                                              'opacity':1,
            },1000);
        }); 
    });
    // 모바일페이지 닫기버튼 클릭시, 메뉴 숨기기
     $('.close').click(function(){
        $('.sidebar').removeClass('open',300);
         $('.mobile_sidebar').fadeOut(200);
         $('.sidebar li').each(function(index){
            $(this).animate({'left':1000,'opacity':0,
            });
        }); 
    });
    // + 검은 화면 클릭시 숨기기
     $(window).click(function(e){
        if(e.target.className == "mobile_sidebar"){
            $('.sidebar').removeClass('open',300);
            $('.mobile_sidebar').delay(300).fadeOut();     
        }
     })

/*==== accordion_action ====*/
    $('.accordion_action .accordion_bg').fadeOut(200);
    $('.accordion_action').click( function() {
        var me = $(this).children('h2');
        var bros = $(this).siblings().children('h2');
        if( me.hasClass('open') == true ) {
            me.removeClass('open');
            me.next().slideUp();
            me.prev().fadeOut(200);
            
        } else {
            
            me.addClass('open');
            bros.removeClass('open');

            me.next().slideDown();
            bros.next().slideUp();

            me.prev().fadeIn(200); 
            bros.prev().fadeOut(200); 
        }
    });
    
/*==== tabs_action ====*/
    $('.tab li').click( function(){
        var index = $(this).index();
        $('.tab_action li:eq('+index+')').siblings().hide();
        $('.tab_action li:eq('+index+')').fadeIn();
    });
    
/*==== [jQuery] 숫자를 +,- 할때 자동 계산 로직 ====*/
$(".info_qty a").click(function(){
    //plus / minus 채크
    var range = $(this).attr('count_range');
    // 카운트 
    var countTag = $(this).parent().children('input.input-text');
    var count = countTag.val(); // number 1
    console.log(count);
    //증가
    if(range == "p") {
        count++;
    }
    //감소
    else {
         if(count <= 1){
            alert('최소 구매수량은 1개 입니다.');
            return;
        // 1개 미만이거나, 같으면 경고창을 넣고, 빠저 나온다. 
        }
        count--;
    }
    
    // 단가  - 태그에 별도 추가
    var price = $('.total').attr('data');
    // 총액 - 텍스트를 구한다.
    // var total = $('.total').html();
    // price data 값을 숫자로 바꾸고, value="1"를 숫자로 바꿔서 서로 곱한다. 그리고 변수에 담는다.
    var total_price = parseInt(price) * parseInt(count);
    // 최종으로 total클레스에 html에 넣을거야 3자리에 "," 넣고 total_price(서로 곱하는 값을 넣는다.) + WON을 넣어줘
    $('.total').html(numberCommas(total_price) + '<span>WON</span>');
}); 
    //숫자 3자리에 "," 넣을 함수
function numberCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
    
// 썸네일 이미지 클릭시, 하나의 이벤트를 통해서 제어가능
// 디테일 페이지 텝기능    
    $('.bg .tab_fade li').find('img').click(function(){
        var index = $('.bg .tab_fade li').find('img').index(this);
        $('.tab_img_right li:eq('+index+')').siblings().hide();
        $('.tab_img_right li:eq('+index+')').fadeIn();
    }); 
    
// 반응형 슬라이스
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    loop:true,
    center:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    margin:20,
    nav: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:3,
            nav:false
        }
    }
    });
    
    // 해더 영역 스크롤 할때 높이가 작아지는 부분
    $(window).scroll(function () {
    var sc = $(window).scrollTop()
    if (sc > 100) {
        $(".pc_header_global").addClass("small")
        $(".pc_header_global .logo").addClass("small")
    } else {
        $(".pc_header_global").removeClass("small")
        $(".pc_header_global .logo").removeClass("small")
    }
});
    //fixed ICON DESIGN fadin,fadeOut
    $('.fixed_btn a').click(function(){
        $('.fixed_action_btn ul.list').fadeIn(600);
            $('.fixed_btn').fadeOut(100);
    });
    
    var didScroll;
    var lastScrollTop = 0;
    var delta = 1;

    var navbarHeight = $('.fixed_btn').outerHeight();

    $(window).scroll(function(event) { 
        didScroll = true; 
    });
    setInterval(function() { 
        if (didScroll) { 
            console.log(didScroll);
            hasScrolled();
            didScroll = false; 
        } 
    },100);

    function hasScrolled() {
    // 접근하기 쉽게 현재 스크롤의 위치를 저장한다.
        var st = $(this).scrollTop(); 
    // 설정한 delta 값보다 더 스크롤되었는지를 확인한다.
        if(Math.abs(lastScrollTop - st) <= delta) 
            return; 
    // 헤더의 높이보다 더 스크롤되었는지 확인하고 스크롤의 방향이 위인지 아래인지를 확인한다.
        if (st > lastScrollTop && st > navbarHeight){ 
            // Scroll Down 
            $('.fixed_btn').removeClass('nav-down').addClass('nav-up');
         }else { 
         // Scroll Up 
            if(st + $(window).height() < $(document).height()) { 
            $('.fixed_btn').removeClass('nav-up').addClass('nav-down'); 
             } 
        } 
            lastScrollTop = st; 
        }

});

