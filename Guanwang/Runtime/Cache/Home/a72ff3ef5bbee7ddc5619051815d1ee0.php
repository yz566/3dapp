<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title>3D app  Home</title>
    <!--Favicon img-->
    
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <!--Bootstarp map css-->
    <link rel="stylesheet" href="/Public/css/bootstrap.css.map">
    <!--Odometer css-->
    <link rel="stylesheet" href="/Public/css/odometer.css">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="/Public/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="/Public/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="/Public/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="/Public/css/animate.css">
    <!--Popup css-->
    <link rel="stylesheet" href="/Public/css/magnific-popup.css">
    <!--Swiper min css-->
    <link rel="stylesheet" href="/Public/css/swiper-bundle.min.css">
    <!--Owl Nice select css-->
    <link rel="stylesheet" href="/Public/css/nice-select.css">
    <!--main css-->
    <link rel="stylesheet" href="/Public/css/main.css">
</head>
<body>
 
<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!--==== Scroll-Up Section End ======= -->

<!--==== Preloader Start Here ======= -->
<div class="boxes-bg">
    <div class="boxes">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!--==== Preloader End Here ======= -->

<!--==== Header Section Here ======= -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo-menu">
                <a href="/index.php/Home/Index/index" class="logo">
                    <img src="/Public/picture/logo.png" alt="img">
                </a>
            </div>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="main-menu">
                <li class="active">
                    <a href="/index.php/Home/Index/index">Home <i class="fas "></i></a>
                    
                </li>
                <li>
                    <a href="/index.php/Home/Index/StatementofOriginality">Statement of Originality</a>
                </li>
				<li>
                    <a href="/index.php/Home/Index/models">Models</a>
                </li>
                
                <li>
                    <a href="javascript::" onclick="contact()">contact</a>
                </li>
               
            </ul>
        </div>
    </div>
</header>
<!--==== Header Section End ======= -->

<script>

   function contact(){
   
     alert("E-mail:yz566@sussex.ac.uk");
   
   }

</script>




<!--=========== Banner Section Here ========= -->
<section class="banner-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="banner-content center">
                    <h2 style="color:white">
                        Coca Cola Great Britain
                    </h2>
					<h5>
                        <span class="highlight-color">Founded in 1886 Dr John S Pemberton</span>
                    </h5>
                    <p>
                        The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Banner Section End ========= -->
<?php if(is_array($shouye)): $i = 0; $__LIST__ = $shouye;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shouye): $mod = ($i % 2 );++$i;?><section class="about-section pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-thumb" style="text-align:center">
                    <img src="/Public/picture/<?php echo ($shouye["img"]); ?>"  style="width:250px;height:300px;" >
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="about-content">
                    <h3>
                        <?php echo ($shouye["title"]); ?>
                    </h3>
                    <p>
                        <?php echo ($shouye["content"]); ?>
                    </p>
                    
                    <a href="<?php echo ($shouye["url"]); ?>" class="cmn--btn mt-4">
                        view
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><?php endforeach; endif; else: echo "" ;endif; ?>



<!--=========== Footer Section Here ========= -->
 <section class="footer-section background-color">
    <div class="container">
        <div class="footer-top pt-80 pb-80">
            <div class="row g-5 justify-content-between">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="widget-items">
                        <div class="footer-head">
                            <h4 class="header-content">
                                cocal-cola
                            </h4>
                        </div>
                        <div class="footer-content-area">
                            <p>
                                cocal-colacocal-colacocal-colacocal-cola
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="widget-items">
                        <div class="footer-head">
                            <h6 class="header-content">
                                Quick links
                            </h6>
                        </div>
                        <div class="footer-content-area">
                            <div class="quick-link">
                                <ul class="footer-content">
                                    <li><a href="index.php">Home</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6  wow fadeInUp" data-wow-delay="0.5s">
                    <div class="widget-items">
                        <div class="footer-head">
                            <h6 class="header-content">
                                Useful links
                            </h6>
                        </div>
                        <div class="footer-content-area">
                            <div class="quick-link">
                                <ul class="footer-content">
                                    <li><a href="#">Course</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="widget-items">
                        <div class="footer-head">
                            <h6 class="header-content">
                                Our Newslatter
                            </h6>
                        </div>
                        <div class="footer-content-area">
                            <p>
                                
                            </p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-area">
        <div class="container">
            <div class="footer-bottom">
                <p>Copyright &copy; 2023</p>
                
            </div>
        </div>
    </div>
    </section>
    <!--=========== Footer Section End ========= -->

<!--Jquery 3 6 0 Min Js-->
<script src="/Public/js/jquery-3.6.0.min.js"></script>
<!--Bootstrap bundle min Js-->
<script src="/Public/js/bootstrap.bundle.min.js"></script>
<!--Waypoint Jquery min Js-->
<script src="/Public/js/jquery.waypoints.min.js"></script>
<!--Viewport Jquery Js-->
<script src="/Public/js/viewport.jquery.js"></script>
<!--Wow min Js-->
<script src="/Public/js/wow.min.js"></script>
<!--Odometer Up min Js-->
<script src="/Public/js/odometer.min.js"></script>
<!--Owl Carousel min Js-->
<script src="/Public/js/owl.min.js"></script>
<!--Popup min Js-->
<script src="/Public/js/jquery.magnific-popup.min.js"></script>
<!--Owl nice Jquery min Js-->
<script src="/Public/js/jquery.nice-select.min.js"></script>
<!--Coundown min Js-->
<script src="/Public/js/countdowncustom.js"></script>
<!--Swiper min Js-->
<script src="/Public/js/swiper-bundle.min.js"></script>
<!--main Js-->
<script src="/Public/js/main.js"></script>
</body>

</html>