<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="NextGenerationDev">
    <title><?php echo ($modelone["title"]); ?></title>
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
	
	<link rel="stylesheet" href="/Public/css/x3dom.css">
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

<section class="breadcumd-banner">
    <div class="container">
        <div class="breadcumd-wrapper">
            <h1 class="left-content">
                <?php echo ($modelone["title"]); ?>
            </h1>
            <ul class="right-content">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                
                <li >
                    <?php echo ($modelone["title"]); ?>
                </li>
            </ul>
        </div>
    </div>
</section>

<div class="blog-section pt-120 pb-120">
<div class="container">
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="blog-items hover-none blog-single mb-50">
            <div class="blog-thumb">
                <x3d id="x3domOrientationSceneView" width='600px' height='450px' >
                     <scene  DEF='scene'>
                        <Viewpoint id="front" position="<?php echo ($modelone["daxiao"]); ?>" orientation="0.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="right" position="-3.07427 50.25329 2010.79608" orientation="1.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="left" position="-60 100 600" orientation="0.00451 0.99612 -0.03175 1.73722" description="camera"></Viewpoint>
                        <Viewpoint id="top" position="0.05087 3.78235 -1.75890" orientation="0.00451 0.87466 0.48473 3.12040" description="camera"></Viewpoint>
                        <directionalLight id="directional" direction='0 -1 0' on ="TRUE" intensity='1.0' shadowIntensity='0.0'>
                        </directionalLight>
					    
                        <Transform  id="rotation">
                         
                        <inline   url="/Public/x3d/<?php echo ($modelone["url1"]); ?>" id="tdModels">
                                <navigationInfo id="head" headlight='true' type='"EXAMINE"'></navigationInfo>
                                <Background groundColor='(1,1,1)' skyColor='(1,1,1)'></Background>
						</inline>
                       </Transform>
					</scene>
				</x3d>
            </div>
            
            </div>
           
           
        </div>
        <div class="col-lg-4">
            <div class="blog-list-right">
           
            <div class="items-box">
                <h5 class="box-head">
                    Camera Views
                </h5>
                <ul class="tag">
				    <li>
                        <a onclick="defaultO()">
                        Default
                        </a>
                    </li>
                    <li>
                        <a onclick="left()">
                        left
                        </a>
                    </li>
					
					 <li>
                        <a onclick="right()">
                        right
                        </a>
                    </li>
                    
                    
                </ul>
            </div>
			<div class="items-box">
                <h5 class="box-head">
                    Animation Options
                </h5>
                <ul class="tag">
				   
                    <li>
                        <a onclick="rotateX()">
                        RotX
                        </a>
                    </li>
                    <li>
                        <a onclick="rotateY()">
                        RotY
                        </a>
                    </li>
                    <li>
                       <a onclick="rotateZ()">
                        RotZ
                        </a>
                    </li>
                    <li>
                        <a onclick="stopAnimation()">
                        Stop
                        </a>
                    </li>
                    
                    
                </ul>
            </div>
            <div class="items-box">
                <h5 class="box-head">
                    Render and Lighting Options
                </h5>
                <ul class="tag">
				    
                    <li>
                        <a onclick="headLightOnOff()">Headlight
                        </a>
                    </li>
                    <li>
                        <a onclick="lightDefault()">Default
                        </a>
                    </li>
                    
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
</div>



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

<script src="/Public/js/x3dom.js"></script>

</body>

</html>
<script>

let y = 1
let rotateYInterval = null
let rotateDom = document.querySelector('#rotation')


function rotateY(){
stopAnimation();
    if(rotateYInterval){
        clearInterval(rotateYInterval)
        rotateYInterval = null
    } else {
        rotateYInterval = setInterval(()=>{
            y+=0.01
            rotateDom.setAttribute('rotation',"0,1,0,"+y)
        },5)
    }
}


let z = 1
let rotateZInterval = null
function rotateZ(){
   stopAnimation();

    if(rotateZInterval){
        clearInterval(rotateZInterval)
        rotateZInterval = null
    } else {
        rotateZInterval = setInterval(()=>{
            z+=0.01
            rotateDom.setAttribute('rotation',"0,0,1,"+z)
        },5)
    }
}

let x = 1
let rotateXInterval = null
function rotateX(){
stopAnimation();
    if(rotateXInterval){
        clearInterval(rotateXInterval)
        rotateXInterval = null
    } else {
        rotateXInterval = setInterval(()=>{
            x+=0.01
			
            rotateDom.setAttribute('rotation',"1,0,0,"+x)
        },5)
    }
}

function stopAnimation(){
    if(rotateXInterval){
        clearInterval(rotateXInterval)
        rotateXInterval = null
    }
    if(rotateZInterval){
        clearInterval(rotateZInterval)
        rotateZInterval = null
    }
    if(rotateYInterval){
        clearInterval(rotateYInterval)
        rotateYInterval = null
    }
}




let headLightDom = document.querySelector('#head')
let onOrOff = true
function headLightOnOff(){
    if(onOrOff){
        headLightDom.setAttribute('headlight','false')
        onOrOff = false
    }else {
        headLightDom.setAttribute('headlight','true')
        onOrOff = true
    }
}
function lightDefault(){
    headLightDom.setAttribute('headlight','true')
    onOrOff = true
}

function left(){
    rotateDom.setAttribute('rotation','0,1,0,1.5')
}

function defaultO(){
    rotateDom.setAttribute('rotation',`0,1,0,0`)

}

function right(){
    rotateDom.setAttribute('rotation',`0,1,0,-1.5`)

}

</script>