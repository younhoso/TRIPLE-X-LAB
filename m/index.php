<?php include('header.php'); ?>
    <!--mobile 햄버거 오픈디자인-->
    <div class="mobile_sidebar"></div>
    <div class="mobile_sidebar_warp" style="display: none;">
        <div class="l_wrapper">
            <div class="nav_box">
                <a href="#0">
                    <div class="closeBtn"></div>
                    <div class="closeBtn"></div>
                </a>
            </div>
            <div class="tit_wrap">
                <div class="tit_section">
                    <h2 class="tit_16">/ HOME</h2>
                    <ul>
                        <li><a class="tit_40" href="#0">ABOUT US</a></li>
                        <li><a class="tit_40" href="#0">WORKS</a></li>
                        <li><a class="tit_40" href="#0">AG BLOG</a></li>
                        <li><a class="tit_40" href="#0">CONTACT</a></li>
                    </ul>
                </div>
                <div class="txt_section">
                    <ul>
                        <li class="tit_18"><a href="#0">UX METHODOLOGY</a></li>
                        <li class="tit_18"><a href="#0">OUTLET</a></li>
                    </ul>
                    <div class="txt_section_copy">
                        <div class="txt_img">
                            <img src="./image/logo_white.svg" alt="로고">
                        </div>
                        <p class="tit_10">COPYRIGHT. ALL RIGHTS RESERVED.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--mobile CONTENTS 디자인-->
    <div class="mobile_design">
        <section class="mo_tit_section">
            <div class="l_wrapper">
                <div class="txt_wrap">
                    <p class="par_14 txt">WEB PUBLISHER</p>
                    <h1 class="tit_32">INTERACTION DESIGNER.</h1>
                    <ul class="clearfix">
                        <li><a id="your-app-id" href="#0"><i class="icon-instagram"></i></a></li>
                        <li><a target="_blank" href="https://github.com/younhoso/So_D_project.git"><i class="icon-github-circled"></i></a></li>
                        <li><a target="_blank" href="https://www.behance.net/youhoso"><i class="icon-behance"></i></a></li>
                        <li><a target="_blank" href="http://naver.me/xOaEd3l5"><i class="icon-blogger"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="mo_list_section">
            <div class="mobile_gn">
                <h2 class="tit_16">CONTENT</h2>
                <ul class="mobile_gn_wrpper clearfix owl-carousel">
                    <li class="about anima item">
                        <a href="../sub.html">
                            <div class="inner_ouer">
                                <div class="img_wrap">
                                    <img src="image/1.jpg" alt="about이미지"/>
                                </div>
                                <div class="tit_wrapm">
                                    <h3 class="tit_20">ABOUT US</h3>
                                    <p class="tit_10 text">INTRODUCTION</p>
                                    <p class="txt_sum">HTML5, CSS3, LESS, Jquery, JS 에 관련한 거의 모든 웹퍼블리싱 기술을 보유하고 있으며 "JavaScript (node.js)"</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="works anima item">
                        <a target="_blank" href="http://younhoso.co.kr/index/d_pro">
                            <div class="inner_ouer">
                                <div class="img_wrap">
                                    <img src="image/2.jpg" alt="about이미지">
                                </div>
                                <div class="tit_wrapm">
                                    <h3 class="tit_20">WORKS</h3>
                                    <p class="tit_10 text">INTRODUCTION</p>
                                    <p class="txt_sum">기존에 있던 CERSHOME 홈페이지를 개선 하여 리뉴얼 했습니다.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="ag_blog anima item">
                        <a target="_blank" href="https://blog.naver.com/thdbsgh3443">
                            <div class="inner_ouer">
                                <div class="img_wrap">
                                    <img src="image/3.jpg" alt="about이미지">
                                </div>
                                <div class="tit_wrapm">
                                    <h3 class="tit_20">AG Blog</h3>
                                    <p class="tit_10">INTRODUCTION</p>
                                    <p class="txt_sum">제가 관심있는 분야 디자인과 개발에 관해서 글을 쓰고 있으며 저의 가치관, 생각들이 담겨져 있습니다.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="contant anima item">
                        <a href="#0">
                            <div class="inner_ouer">
                                <div class="img_wrap">
                                    <img src="image/4.jpg" alt="about이미지">
                                </div>
                                <div class="tit_wrapm">
                                    <h3 class="tit_20">CONTACT</h3>
                                    <p class="tit_10 text">INTRODUCTION</p>
                                    <p class="txt_sum">언제든지 연락을 기다리고 있습니다.</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/owl.carousel.min.js"></script>
	<script src="./js/greensockminified/jquery.gsap.min.js"></script>
    <script src="./js/greensockminified/TimelineLite.min.js"></script>
    <script src="./js/greensockminified/TimelineMax.min.js"></script>
    <script src="./js/greensockminified/TweenLite.min.js"></script>
    <script src="./js/greensockminified/TweenMax.min.js"></script>
    <script type="text/javascript" src="./js/anime.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var owl = $('.owl-carousel');
            owl.owlCarousel({
            loop:true,
            margin:20,
            autoWidth:false,
            autoplay:true,
            slideSpeed:4000,
            autoplayTimeout:2500,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:2
                },
            }
        });
        $('.hamber_click').click(function(){
            $('.mobile_sidebar').toggleClass('active',100,'easeOutSine');
            $('.mobile_sidebar_warp').fadeToggle(1000, 'easeOutSine');
        });
        $('.nav_box').click(function(){
            $('.mobile_sidebar').toggleClass('active',100,'easeOutSine');
            $('.mobile_sidebar_warp').fadeToggle(1000, 'easeOutSine');
        });
    });
    </script>
	</body>
</html>
