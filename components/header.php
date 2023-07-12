<?php
$title_default="Online Cricket Gaming | Best Mobile Multiplayer Games | MlympiX";
$meta_description_default="Online Cricket Gaming, Best Mobile Multiplayer Games, MlympiX";
$meta_keywords_default="Online Cricket Gaming, Best Mobile Multiplayer Games, MlympiX";
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo isset($title)?$title:$title_default;?></title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="<?php echo isset($meta_keywords)?$meta_keywords:$meta_keywords_default;?>">
	<meta name="description" content="<?php echo isset($meta_description)?$meta_description:$meta_description_default;?>">
	<meta name="format-detection" content="telephone=no">
	<meta name='viewport' content='width=device-width'>
	<meta name="google-site-verification" content="zqtF5S2Iyrc3AQgPDclzdkdWhx55LM2qczSgRmXq_Z8" />
	<meta name="robots" CONTENT="INDEX, FOLLOW"> 
	<meta name="geo.region" content="IN-KA" />
	<meta name="geo.placename" content="BENGALURU" />
	<meta name="geo.position" content="12.961362;77.6329645" />

	
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" href="assets/css/slick.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="canonical" href="https://mlympix.com<?php echo isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'/';?>" />

	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-202493491-1"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-202493491-1');
	</script>

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TTF4JS5');</script>
<!-- End Google Tag Manager -->

<!-- Smart Look -->
<script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '022cb63c178e9e91f64119ba3b0ef3721628dc5c');
</script>

<style>
    @media only screen and (min-width: 600px) {
  .s-crossfit-slider {
    margin-top:-250px;
    max-height: 500px;
  }
  .download-btn{
      display:block !important;
  }
}
/*.s-crossfit, .s-about, .s-out-trainer, .s-our-programs{background-color:#202020;}*/
.crossfit-item{background-color:#2A2D32!important;}
html{max-width: 100%!important;overflow-x: hidden!important;}
.download-app{
    margin: 0 20px;
    padding: 9px 10px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 2px;
    font-size: 14px;
    -webkit-text-decoration: none;
    text-decoration: none;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    line-height: 30px;
    background-color: #008d40;
    color: #ffffff;
    border: 1px solid #009242;
	   }
	</style>
</head>

<body id="home">
	
	
	<!-- ================= HEADER ================= -->
	<header class="header"style="background-color: #1B1C31!important;">
	
		
		<div class="header-menu">
			<div class="container">
		
		 <div style="float:left;" class="d-flex flex justify-content-between justify-content-md-center py-2 position-fixed align-items-center align-self-center">
	      	<a href="index.php" class="logo"><img src="assets/img/logo1.png" alt="logo" width="120"></a>
	        	
			<div class="align-self-center d-flex">
				    	<a href="#" class="nav-btn">
					    <span></span>
                		<span></span>
                	    <span></span>
		</a>
				</div>
	    </div>
		<div style="float:right;">	
				<nav class="nav-menu">
				<?php
					if(basename($_SERVER['PHP_SELF']) == "about.php")
					{ ?>
					    <ul class="nav-list">
						<li><a href="index.php" style="font-size: 120%;">Home</a></li>
						<li><a href="about.php" style="font-size: 120%; color:#E9C412;">About Us</a></li>
						<!-- <li><a href="blog.php" style="font-size: 120%;">blogs</a></li> -->
						<li><a href="contact-us.php" style="font-size: 120%;">Contact Us</a></li>
					<!--	<li><a href="howToPlay.php">How To Play</a></li>-->
					</ul>
					<?php
					}
						else if(basename($_SERVER['PHP_SELF']) == "blog.php")
					{ ?>
					    <ul class="nav-list">
						<li><a href="index.php" style="font-size: 120%;">Home</a></li>
						<li><a href="about.php" style="font-size: 120%;">About Us</a></li>
						<!-- <li><a href="blog.php" style="font-size: 120%; color:#E9C412;" >blogs</a></li> -->
						<li><a href="contact-us.php" style="font-size: 120%;">Contact Us</a></li>
						
					<!--	<li><a href="howToPlay.php">How To Play</a></li>-->
					</ul>
					<?php
					}
						else if(basename($_SERVER['PHP_SELF']) == "contact-us.php")
					{ ?>
					    <ul class="nav-list">
						<li><a href="index.php" style="font-size: 120%;">Home</a></li>
						<li><a href="about.php" style="font-size: 120%;">About Us</a></li>
						<!-- <li><a href="blog.php" style="font-size: 120%;" >blogs</a></li> -->
						<li><a href="contact-us.php" style="font-size: 120%; color:#E9C412;">Contact Us</a></li>
						</ul>
					<?php
					}
					else if(basename($_SERVER['PHP_SELF']) == "index.php")
					{ ?>
					    <ul class="nav-list">
						<li><a href="index.php" style="font-size: 120%;  color:#E9C412;">Home</a></li>
						<li><a href="about.php" style="font-size: 120%;">About Us</a></li>
						<!-- <li><a href="blog.php" style="font-size: 120%;" >blogs</a></li> -->
						<li><a href="contact-us.php" style="font-size: 120%;">Contact Us</a></li>
						</ul>
					<?php
					}
					  else 
					  { ?>
					    <ul class="nav-list">
						<li><a href="index.php" style="font-size: 120%;">Home</a></li>
						<li><a href="about.php" style="font-size: 120%;">About Us</a></li>
						<!-- <li><a href="blog.php" style="font-size: 120%;" >blogs</a></li> -->
						<li><a href="contact-us.php" style="font-size: 120%;">Contact Us</a></li>
					<!--	<li><a href="howToPlay.php">How To Play</a></li>-->
					</ul>
					<?php
					}
				?>
				</nav>
		</div>
			</div>
		</div>
	</header>
	<!-- =============== HEADER END =============== -->
