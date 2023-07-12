<?php
$title="About Us - MlympiX | Online Cricket Gaming";
$meta_keywords="MlympiX is a digital platform with the objective of promoting sports in India via online media. It has 2 parts: MlympiX – The Game (Mobile Gaming App ) & MlympiX – The Sports Clan (Instagram Community Page).";
$meta_description="MlympiX is a digital platform with the objective of promoting sports in India via online media. It has 2 parts: MlympiX – The Game (Mobile Gaming App ) & MlympiX – The Sports Clan (Instagram Community Page).";
    require_once('autoload.php');
   
?>
<?php
    if(isset($_POST['dwnldapp'])){
         $isAndroid = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android")); 
           if($isAndroid == 1){
               $filepath = 'Mlympix_V1.0.apk';
                  if(file_exists($filepath)) {
                      //howtoinstall();
                        header('Content-Description: File Transfer');
                        header('Content-Type: application/octet-stream');
                        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
                        header('Expires: 0');
                        header('Cache-Control: must-revalidate');
                        header('Pragma: public');
                        header('Content-Length: ' . filesize($filepath));
                        flush(); // Flush system output buffer
                        readfile($filepath);
                        
                        die();
                    } else {
                        http_response_code(404);
            	        die();
                    }
               ?>
               
               <?php
           }else{
               echo "<script>alert('IOS app coming soon !!!');</script>";
           }
           
    }



?>
<style>
     @media only screen and (min-width: 600px) {
  .s-crossfit-slider {
    margin-top:-150px!important;
  }
  
}
 @media only screen and (max-width: 600px) {
  
  .about-img-col {
    flex: 0 0 100%;
    max-width: 100%;
}
.about-info-cover {
    flex: 0 0 100%;
    max-width: 100%;
}
}
.header{background-color: #1B1C31!important;}
</style>
	<section class="s-about" style="background-image: url(../assets/bg2.webp);
  background-repeat: no-repeat;">
		<div class="container" style="margin-top: 1px;">
			<div class="row" style="align-items: center;">
				<div class="col-md-5 col-xs-5 col-lg-5 col-sm-5 col-xl-5 about-img-col" style="margin-top: 0px; margin-bottom: 50px;">
					<div>
						<div>
							<img src="/assets/pic2.webp" alt="img" style="width:50%; height: auto; margin-left: 25%;">
						</div>
					</div>
				</div>
				<div class="col-md-7 col-xs-7 col-lg-7 col-sm-7 col-xl-7 about-info-cover" style="margin-top: 0px; margin-bottom: 50px;">
					<div class="text">
						<p style="text-align: justify; text-justify: inter-word;">Are you ready to rewrite cricket history? Our app is here to take you on an unforgettable journey through the most iconic moments in the game. </p>
					</div>
					<br>
					<div class="text">
						<p style="text-align: justify; text-justify: inter-word;">With our revolutionary swipe-up reel format, you can quickly access and play through a wide range of challenges that let you relive the biggest matches of all time. From the roar of the crowd, as you hit the winning runs in the 2011 World Cup Final to the tension of a last-over finish in the Ashes, our challenges are designed to put you right in the heart of the action. </p>
					</div>
					<br>
					<div class="text">
						<p style="text-align: justify; text-justify: inter-word;">But that's just the beginning. Our app also offers a one-of-a-kind real-time multiplayer cricket experience that lets you compete against players from all over the world in fast-paced, adrenaline-fueled matches. Will you be the one to claim victory and rise to the top?</p>
					</div>
					<br>
					<div class="text">
						<p style="text-align: justify; text-justify: inter-word;">And with each challenge you complete, you'll unlock new levels of skill and strategy that will help you dominate the competition. So why wait? Download our app now and become a cricketing legend!</p>
					</div>
					<br>
					<div class="text">
						<p style="text-align: justify; text-justify: inter-word;">But don't just take our word for it - see for yourself why cricket fans around the world are raving about our app. With its engaging challenges, immersive gameplay, and unbeatable multiplayer experience, this is one app you can't afford to miss. So what are you waiting for? Download it now and get ready to play ball!  </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="s-out-trainer" style="background-image: url(../assets/secondBg.webp);
  background-repeat: no-repeat;">
		<div class="container">
			<h1 class="title-decor">Our <span style="color:#E9C412">Team</span></h1>
			<p class="slogan"></p>
			<div class="row">
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/Pratyaksh.webp" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="">Pratyaksh Agarwal</a></h3>
							<div class="prof" style="color:#E9C412">Director</div>
							<p></p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/pratyaksh.agarwal.12"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/agarwalp1995"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/in/pratyaksh-agarwal-a81632a2/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/prat136/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/rishabh.webp" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="">Rishabh Khawad</a></h3>
							<div class="prof" style="color:#E9C412">Director</div>
							<p></p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/rishabh.khawad/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/rishabh161995"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/in/rishabh-khawad"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/rishabhkhawad/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 out-trainer-col">
					<div class="out-trainer-item">
						<a href="" class="out-trainer-img"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/aman.webp" alt="img"></a>
						<div class="out-trainer-info">
							<h3><a href="">Aman Shekhar</a></h3>
							<div class="prof" style="color:#E9C412">Founding Member</div>
							<p></p>
							<ul class="social-list">
								<li><a target="_blank" href="https://www.facebook.com/amanshekhar23"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://twitter.com/amanshekhar23"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.linkedin.com/in/aman-shekhar-1a0079a5/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a target="_blank" href="https://www.instagram.com/amanshekhar23/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			
			
			</div>
		</div>
	</section>

	<link rel="stylesheet" type="text/css" href="styles/home.css">    
<link rel="stylesheet" type="text/css" href="styles/home-mobile-view.css"> 
<?php
    require_once __DIR__. '/components/footer.php';
?>
