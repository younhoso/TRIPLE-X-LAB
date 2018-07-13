<?php include('header.php');?>
<!--pc 햄버거 디자인-->
<header class="header_design">
    <div class="hamber">
        <a href="index.php"><img src="./image/triplexlab_LOGO.svg" alt="triplexlab_LOGO"/></a>
        <div class="vertical">
            <div class="vertical_center">
                <a href="#">
                    <div class="hamberger"></div>
                    <div class="hamberger"></div>
                    <div class="hamberger"></div>
                </a>
            </div>
        </div>
    </div>
</header> 
<!-- login 구조 -->
<div class="l_wrapper">
	<ul class="login clearfix">
		<li><a href="#">LOGIN</a></li>
		<li><a href="#">SIGN UP</a></li>
		<li><a href="#"><i class="icon-search"></i></a></li>
	</ul>
</div>

<!--PC디자인-->
<div class="pc_design">
<!--햄버거 네비게션 디자인-->
    <div class="menu_box_container">
        <ul class="pc_gn_wrpper clearfix">
            <li class="about anima">
                <div class="hamber_in_logo">
                    <img src="./image/triplexlab_LOGO.svg" alt="triplexlab_LOGO">
                </div>
                <section>
                    <h2>.01</h2>
                    <div class="inner_ouer">
                        <h3>ABOUT US</h3>
                        <p>INTRODUCTION</p>
                        <div class="img_wrap">
                            <a href="#" onclick="DelayNext();"><div class="img" style="background-image: url(image/1.jpg);"></div></a>
                        </div>
                        <p class="txt_sum">HTML5, CSS3, LESS, Jquery, JS 에 관련한 거의 모든 웹퍼블리싱 기술을 보유하고 있으며, "JavaScript (node.js)"</p>
                    </div>
                </section>
            </li>
            <li class="works anima">
                <section>
                    <h2>.02</h2>
                    <div class="inner_ouer">
                        <h3>WORKS</h3>
                        <p>INTRODUCTION</p>
                        <div class="img_wrap">
                            <a target="_blank" href="http://younhoso.co.kr/d_pro/index.php"><div class="img" style="background-image: url(image/2.jpg);"></div></a>
                        </div>
                        <p class="txt_sum">기존에 있던 CERSHOME 홈페이지를 개선 하여 리뉴얼 했습니다.</p>
                    </div>
                </section>
            </li>
            <li class="ag_blog anima">
                <section>
                    <h2>.03</h2>
                    <div class="inner_ouer">
                        
                        <h3>AG Blog</h3>
                        <p>INTRODUCTION</p>
                        <div class="img_wrap">
                            <a target="_blank" href="https://blog.naver.com/thdbsgh3443"><div class="img" style="background-image: url(image/3.jpg);"></div></a>
                        </div>
                        <p class="txt_sum">제가 관심있는 분야 디자인과 개발에 관해서 글을 쓰고 있으며 저의 가치관, 생각들이 담겨져 있습니다.</p>
                    </div>
                </section>
            </li>
            <li class="contant anima">
                <div class="contant_wrap">
                    <section>
                        <h2>.04</h2>
                        <div class="inner_ouer">
                            <h3>CONTACT</h3>
                            <p>INTRODUCTION</p>
                            <div class="img_wrap">
                                <a href="#"><div class="img" style="background-image: url(image/4.jpg);"></div></a>
                            </div>
                            <p class="txt_sum">언제든지 연락을 기다리고 있습니다.</p>
                        </div>
                    </section>
                </div>
                <div class="menu_box_wrap">
                    <div class="menu_box">
                        <ul class="clearfix">
                            <li><a href="https://www.behance.net/youhoso" target="_blank"><i class="icon-behance"></i></a></li>
                            <li><a href="https://www.instagram.com/x__.os/" target="_blank"><i class="icon-instagram"></i></a></li>
                            <li><a href="https://blog.naver.com/thdbsgh3443" target="_blank"><i class="icon-blogger"></i></a></li>
                            <li><a href="https://github.com/younhoso/So_D_project.git" target="_blank"-><i class="icon-github-circled"></i></a></li>
                        </ul>
                        <h4 class="tit_12">FOLLOW US</h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
<!--햄버거 닫임 디자인-->
    <div class="close_btn" style="display: none;">
        <div class="line"></div>
        <div class="linee"><p><a href="#">CLOSE</a></p></div>
    </div>
<!--section디자인-->
    <div class="wrapper fullpage">
        <section class="bg_img_first section">
            <div class="inner">
                <div style="display: none;" class="inner_wrap dis">
                    <p class="tit_16">ABOUT US</p>
                    <h1 class="tit_46">CREATIVE FIELD</h1>
                    <ul>
                        <li>UX / UI</li>
                        <li>WEB DESIGN</li>
                        <li>INTERACTION DESIGN</li>
                        <li>WEB APP PUBLISHER</li>
                    </ul>
                </div>
            </div>
            <!-- Arrows Scroll down -->
            <footer class="section_footer cssanimation">
		          <a class="down">
		          	<i class="icon-down-open-big"></i>
		          </a>
		    </footer>
        </section>
        <section class="bg_img_second section">
                <div class="second_tit">
                    <p class="tit_14">SERVICE</p>
                    <h3 class="tit_20">내가 만드는 서비스</h3>
                </div>
                <div style="display: none;" class="second_wrap dis">
                    <div class="second_text">
                        <h4 class="tit_16">WORKS</h4>
                        <h2 class="tit_36">CERSHOME</h2>
                        <p>담백하고 직관적인 디자인, 유연하고 확장 가능한 디자인, 유니크한 디자인 3가지 모토로
                            작업하는것이 저의 TRIPLE X LAB의 철학입니다.
                        </p>
                    </div>
                </div>
                <!-- Arrows Scroll down -->
	            <footer class="section_footer cssanimation hu__hu__">
			          <a class="down">
			          	<i class="icon-down-open-big"></i>
			          </a>
			    </footer>
        </section>
        <section class="bg_img_third section">
                <div class="third_tit">
                    <p class="tit_14">SERVICE</p>
                    <h3 class="tit_20">나의 생활 공간</h3>
                </div>
                 <div style="display: none;" class="third_wrap dis">
                    <div class="second_text">
                        <h4 class="tit_16">AG BLOG</h4>
                        <h2 class="tit_36">BLOG STOTY</h2>
                        <p>나만의 BLOG STORY를 공유합니다. 제가 관심있는 분야 개발과, 디자인에 관해서 어느 장벽을 만났을경우 인터넷으로 정보를 찾아보는 경우가 많기 때문에 저와 같은 고충을 느꼈던 분들이 분명히 있기에 정보를 공유하기 위해서 시작했습니다.
                        </p>
                    </div>
                </div>
                <!-- Arrows Scroll down -->
	            <footer class="section_footer cssanimation">
			          <a class="down">
			          	<i class="icon-down-open-big"></i>
			          </a>
		    	</footer>
        </section>
        <section class="bg_img_fourth section">
                <div style="display: none;" class="fourth_wrap dis">
                    <div class="second_text">
                        <h4 class="tit_16">Information</h4>
                        <h2 class="tit_36">CONTACT</h2>
                        <ul>
                            <li><span>T.</span>+82.010.3388.2024</li>
                            <li><span>E.</span>thdbsgh3443 @naver.com</li>
                            <li><span>A.</span>72-19, Gwangjin-gu, Gueui-dong, Seoul</li>
                        </ul>
                    </div>
                </div>
        </section>
    </div>
</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="./js/anime.min.js"></script>
    <script src="./js/jquery.easings.min.js"></script>
    <script type="text/javascript" src="./js/scrolloverflow.min.js"></script>
    <script type="text/javascript" src="./js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="./js/skrollr.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/vanilla-tilt.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script>
	    /*윈도우 도큐먼트 창 딜레이 속도 조절 하는 함수*/
	    function NextClick() {
	        window.open('sub.php','_self');
	    };
	    function DelayNext() {
	        window.setTimeout(NextClick, 1500);
	    };
    </script>
	</body>
</html>
