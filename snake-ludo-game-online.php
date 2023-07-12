<?php
$title="Snake Ludo Game Online | Snake And Ladder Online Game With Friends";
$meta_description="Snake Ludo Game Online, Snake And Ladder Online Game With Friends, Play Snakes And Ladders Game Online, Snakes And Ladders Board Game Online, Moksha Patam Board Games";
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
<section class="bg-section" style="padding: 50px 15px 0px 15px;">
    <div class="container">
        <div class="row">
        <div class="col-xl-12 col-md-12">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" >
                <img src="assets/img/logo1.png" alt="">
                <h1 style="font-size:22px !important;"><strong>Mlympix – Helping You Ace The Snakes And Ladders 
Game Online   </strong></h1><br>
<p>The advancement in technology has taken our lives to the next level which is highly virtual and aided by the internet. An individual is capable of performing all tasks online now which includes everyday activities as well as entertainment activities.</p><br>
                <p>Playing games online is immensely popular among people and Mlympix has taken it to other heights. Mlympix is a safe and secure online gaming platform which offers several games and opportunities to earn money.  </p><br><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>      <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/snake-game-bg.webp" alt="" >

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
                <h2 style="text-align:center;">Why is Mlympix better than other gaming platforms for you?   </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/snake-game-about.png" alt="" >       
			</div>
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-egg.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p><a href="https://mlympix.com/">Mlympix</a> is the best gaming platform to play snakes ludo game online.  </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-egg.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The online gaming platform has several features and benefits which makes it highly preferable. The application is extremely user-friendly and the layout of the games is quite engaging.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-egg.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The gaming platform not just comes with the best features but also allows you to learn money by playing games online. The user needs to deposit the cash in the wallet and they are good to go.  </p>
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
                <h2 style="text-align:center;">How can you download the Mlympix application?  </h2>
                <hr class="horizondal-line"><br>
                <p>The Mlympix application can be downloaded in three easy steps:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>To download the android version of the Mlympix application, the user needs to go to the website of the gaming platform and select the download option and then press OK on the pop-up that appears afterward. The downloading process starts after clicking OK on the pop-up.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>In the second step the user needs to wait for the downloading process to get over. The gaming platform is quite smooth and won't take much time to complete the process. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>In the last step, after the download is complete, the user needs to go to the device's settings and activate the “unlock source” feature so that the final installation of the application is completed. Now, the application is ready to be used and the user can play <a href="https://mlympix.com/play-snake-and-ladder-online.php">snake and ladder online game with friends.</a> </p>
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
                <h2 style="text-align:center;">Mlympix snakes and ladders game online – The Gameplay</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-egg.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> We have always played snakes and ladders on physical boards but with Mlympix you can now play the snake ludo game online. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-egg.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The snake and ladder game on the online platform is the same as the offline mode and the players can play it for free.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-egg.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>  The players have to fight the snakes and climb the ladders and reach the top (Moksha) to win the game.  </p>
            </div>
          
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/snake-game-services.png" alt="">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play the snakes and ladders games 
online on Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <p>One can play the snakes and ladders game online on Mlympix in three easy steps:</p><br>
               <br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select the game that you are interested in playing.  </h4><br>
                        <p style="font-size:12px;">After installing the application, open the app and you will be taken to the homepage. On the homepage, search for the game that you want to play and select it, start playing the game by clicking on it. For playing snake and ladder online with friends, click on the game and start playing. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/chaupar-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Play snake and ladder for free on the gaming platform. </h4><br>
                        <p style="font-size:12px;">The snake and ludo game online is completely free and the user can play it anytime with multiple players. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Choose the most appropriate league accordingly.</h4><br>
                        <p style="font-size:12px;"> Mlympix offers several leagues and tournaments, the players can choose the one which suits them according to their skill and time. These competitions instill an enthusiastic spirit among the players and they enjoy the game to the maximum level. </p>
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
                        <h4>Is the Mlympix application easy and safe to install? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>The Mlympix application is very easy and 100% safe to install and play. One can easily install it and play a free snake ludo game online. 
</p>
                    </div>

                    <div class="accordion__header">
                        <h4> What are the ways available for transferring money and its withdrawal in the online gaming platform?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> All the cash that the player wins gets deposited in the account of the user in Mlympix and the user can withdraw it anytime. It is quite easy to transfer money and withdraw it in the online gaming platform and one can easily do it anytime via UPI or online bank transfer.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>What are the different games available for playing on Mlympix? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Numerous games both free and money games are available for playing on Mlympix. Classic games such as snake and ladders, ludo, moksha pagan, and money games such as archery, cricket, and hurdling are available on the platform. It is the best platform to play snake and ladder online with friends and is downloaded by a lot of people. 
</p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can you make actual money by playing games on the gaming platform?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, the gaming platform can help you in earning actual money by playing matches and tournaments of several games online. Classic games such as snake ludo game online are available for free on the platform. 
 </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is this gaming platform available on IOS? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The Android application of Mlympix is currently available for download via the website and is 100% safe and secure to install. The company is presently working on bringing the IOS application and it will be available very soon. 
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
