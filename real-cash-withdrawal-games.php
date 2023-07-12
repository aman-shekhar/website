<?php
$title="Real Cash Withdrawal Games | Best Real Money Game Apps";
$meta_description="Real Cash Withdrawal Games, Best Real Money Game Apps, Play Real Money Games Online, Play Real Money Games Online India, Online Games To Win Real Money.";
    require_once('autoload.php');
    require_once __DIR__ . '/controllers/OneHandController.php';
   
    ?>
    
    <?php
        $errorMsg = "";
        $sucessMsg = "";
        $phoneMsg = "Please enter 10 digit mobile number";
        if(isset($_POST['submit'])){
            $phoneNumber = $_POST['phoneNumber'];
            $length = strlen($phoneNumber);
            if(! is_numeric($phoneNumber)){
                $errorMsg = $phoneMsg;
                //return false;
            }else if($length != 10){
                $errorMsg = $phoneMsg;
                //return false;
            } else {
                $var1 = "https://www.mlympix.com/";
                $var2 = "thankyou-download-send-sms.php";
                $msg = "Dear $phoneNumber! Here is your link as per request - $var1$var2. Thank you for choosing MLYMPIX!";
                //$msg = "Unleash the gaming skills inside you! Click https://www.onelink.to/mlympix to download the Mlympix app now %26 win real cash! From MLYMPIX";
                $contacts = $phoneNumber;
    
    
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL, "http://manage.sambsms.com/app/smsapi/index.php");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "key=5607AB3E0DE157&entity=1301160008504022330&tempid=1207162520840793997&campaign=0&routeid=7&type=text&contacts=".$contacts."&senderid=MLYMPX&msg=".$msg);
                $response = curl_exec($ch);
                curl_close($ch);
    
                if($response){
                    $sucessMsg = "We have sent the MLYMPIX App Download <br>link to <span style='color:#FF0000'>$contacts</span>. Check your phone now!";
    
                }
            }
        }
    
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
	<header class="header">


<div class="header-menu">
    <div class="container">
<div class="d-flex flex justify-content-between justify-content-md-center py-2 position-fixed align-items-center align-self-center">
      <a href="index.php" class="logo"><img src="assets/img/logo1.png" alt="logo" width="120"></a>



        <div class="align-self-center d-flex">
                <a href="#" class="nav-btn">
                <span></span>
                <span></span>
                <span></span>
</a>
        </div>

</div>


<nav class="nav-menu">
            <ul class="nav-list">
                <li><a href="index.php" style="font-size: 120%; color:#E9C412;">Home</a></li>
                <li><a href="about.php" style="font-size: 120%;">About Us</a></li>
                <li><a href="the-sports-clan.php" style="font-size: 120%;">The Sports Clan</a></li>
                <li><a href="contact-us.php" style="font-size: 120%;">Contact Us</a></li>

            </ul>
</nav>

</div>
</div>
</header>
<section class="bg-section">
    <div class="container">
        <div class="row text-justify">
        <div class="col-xl-12 col-md-12">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" style="    padding: 50px 15px 0px 15px;">
                <img src="assets/img/logo1.png" alt="">
                <h1 style="font-size:22px !important;"><strong>Unlock the treasure of online gaming with Mlympix</strong></h1><br>
                <p>The invasion of technology has propelled our lives into an unprecedented virtual world. Today the technology has glued into each second of our lives. Even the games that we used to enjoy in our childhood have made an online presence and that too with a bang. </p><br>
                <p>Well, it figures when the online gaming industry has been soaring high for the past few years. And the reason? Quite simple.</p><br>
                <p>With time, people have learned that online real cash games are not only a great way to connect to friends and play along with them but, they can also avail themselves a chance to earn real money if wagering is an option. And that’s why Mlympix has grabbed the attention of many.</p><br>
                <br><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>    <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/real-cash-games-bg.webp" alt="" class="bg-position">

            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Why is Mlympix better than any other platform for you? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/real-cash-games-about.webp" alt="">       
			</div>
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is an online gaming platform that brings an opportunity to play several online real cash games including, online cricket and archery games.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>In addition, you can also find some boards games like <a href="https://mlympix.com/play-snake-and-ladder-online.php">Moksha Patam</a> and chaupar for free. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The easy access and simple maneuver on the website give brownie points to the Mlympix platform. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Aside from the availability of various adrenaline-rushing games, the players also stand a chance to make real money on Mlympix. </p>
            </div>
            </div>
            </div>
          	 
        </div>
    </div>
</section>
	
<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How can you download the Mlympix application?</h2>
                <hr class="horizondal-line"><br>
                <p>The uniquely different Mlympix application can be downloaded in a very simplistic way. You have to follow only three easy steps to open the doors of this thrilling gaming platform, which are as follows:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p style="font-size: 14px;">The first step is that you have to visit the Mlympix website to download the application for Android OS. Afterward, click on the download app option available on the homepage and tap "OK" when the pop-up notification appears on the window to allow the download. Don’t worry Mlympix application is 100% safe and secure.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p style="font-size: 14px;">As you tap on OK, you have to wait for a few minutes to let the application download on your device. This application is Android-friendly software. Therefore, you don't have to worry about any lag or glitches. Currently, the app is supported on Android version 7.0 and above.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p style="font-size: 14px;">After the application is done downloading, you have to go to the settings and then turn on the “Unknown source” to enjoy the online gaming on Mlympix and play real cash withdrawal games.</p>
				    </div>
                </div>
			</div>
        		 
        </div>
    </div>
</section>

<section class="pt-pb text-center" style="background-color:#ebbf27;padding-top:50px;">
    <div class="container">
        <div class="row">
        <div class="col-xl-10 col-md-10">
        <div class="row">
           <div class="col-xl-7 col-md-7">
                <h2>Download <b style="color:#000;">Via SMS</b></h2>
            </div>
            <div class="col-xl-5 col-md-5 ">
            <form method="post" class="subscribe-form">
<input class="inp-form" type="text" name="phoneNumber" style="border-radius: 0px;" required="" placeholder="Enter Your Phone Number">
<button type="submit" name="submit" class="btn" style="background-color:#0071BB; border-color:#0071BB">Send</button>
</form>    
	<br>
				<?php if(!empty($sucessMsg)){?>
			    <h6 style="border-color: transparent;color:#fff;"><?php echo $sucessMsg; ?></h6>
			<?php } ?>
</div>
</div>
        </div>
        </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Mlympix real cash withdrawal games online -  The Gameplay  </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            
           
            <div class="col-xl-7 col-md-7 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is an online multi-player platform that allows its players to make real cash. It offers its registered users an opportunity to play against other registered players in 1v1 duels.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>There are several gaming options available for interested players. Let’s look at what Mlympix has in store for you :</p>
                <div class="row" style="    padding: 10px 30px;">
                    <div class="quiz col-xl-6 col-md-6 ">
                        <div>
                            <p>Sports game Category</p>
                            <hr class="horizondal-line" style="width: 50% !important;height: 2px !important; margin-bottom: 20px;   margin-left: 11%;">
                            
                           <div style="padding-left:35px;">
                           <img src="assets/img/quiz-game-running.png" alt="" style="width:38%;">
                           
                           <ul class="icon-circle">
                               <li>Online cricket game</li>
                               <li>Hurdling</li>
                               <li>Online archery</li>
                        </ul>
                        </div>
                        </div>
                    </div>
                    <div class="quiz col-xl-6 col-md-6">
                    <div>
                            <p>Classic Board Games category</p>
                            <hr class="horizondal-line" style="width: 50% !important;height: 2px !important; margin-bottom: 20px;   margin-left:11%;">
                            
                            <div style="padding-left:35px;">
                           <img src="assets/img/boardgame.png" alt="" style="width:38%;">
                           
                           <ul class="icon-circle">
                               <li>Chaupar</li>
                               <li>Mokshpatam</li>
                              
                        </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-emoji.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>All these game have their own set of rules and regulations. However, players don’t need to worry about the complexity of rules. They are pretty much similar to the way we play in real life.</p>
            </div>
           
          
            </div>
            </div>

            <div class="col-xl-5 col-md-5 col-sm-12" style="text-align:center;">
                <img src="assets/img/real-cash-games-services.webp" alt="">       
			</div>
          	 
        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play online real cash game on Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/search-icon.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Search for the game you want to play</h4><br>
                        <p style="font-size:13px;">After you have downloaded the Mlympix app, visit the home screen of the app. On the home screen, you can find several gaming options and choose the one you want to play. For example: if the user wants to play chaupar, he has to click on that to kick-start the Gameplay</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/hurdling-games-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Add money to your Mlympix wallet </h4><br>
                        <p style="font-size:13px;">Afterward, you have opted for the game you are required to recharge your Mlympix accounts to start the real gameplay. You have to add a specific sum of money to initiate wagering and enjoy gaming on Mlympix. 
Also, you don’t have to be concerned about your money since the wallet is 100% safe and holds your deposits and the amount you have won till you decide to withdraw them. However, any loss in the game will deduct the wagering amount like it is mentioned in league settings.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/hurdling-games-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Opt a league and start playing </h4><br>
                        <p style="font-size:13px;">Each game on <a href="https://mlympix.com/">Mlympix </a> has several leagues that you can access only after wagering a certain sum of money. The paid games have an option of 1v1 multiplayer. You can easily enjoy the online games on Mlympix in remote areas as well.
</p>
				    </div>
                </div>
			</div>
        		 
        </div>

       
		
    </div>
</section>




<section class="pt-pb text-center" style="background-color:#ebbf27;padding-top:50px;">
    <div class="container">
        <div class="row">
           <div class="col-xl-6 col-md-6">
           <h2>Download <b style="color:#000;"> Mlympix App </b> Now</h2>
            </div>
            <div class="col-xl-6 col-md-6 ">
            
<a href="thankyou-download-footer.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#fff; border-color:#fff;color:#000;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>
            </div>
        </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#eee;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">FAQ’s</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row py-2 text-justify">
			 <div class="col-12 col-md-12">
                 <div class="accordion">

                    <div class="accordion__header is-active">
                        <h4>Which online games can I find on the Mlympix platform?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Mlympix offers several games that can be classified into two categories:</p>
                        <p><strong>Sports games:</strong> Archery, Cricket, and Hurdling</p>
                        <p><strong>Board games:</strong> Chaupar, moksh patam.</p>
                    </div>

                    <div class="accordion__header">
                        <h4> Can I download this app on my iOS? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> The app is currently android friendly software. However, the team is working to make it available for iOS users too soon.</p>
                    </div>

                    <div class="accordion__header">
                        <h4>I'm apprehensive if my money in my Mlympix wallet is safe or not?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> The money and deposits in the Mlympix wallet are 100% safe and secure.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Are there any national-level matches on Mlympix?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> Mlympix holds leagues and tournaments which are as big as national-level matches.
 </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Are the games on Mlympix single-player or multi-player? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> Mlympix offers its users multiplayer options on its online games.
 </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
