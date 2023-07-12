<?php
$title="Bow And Arrow Game Online - Mlympix | Play Archery Games";
$meta_description="Bow And Arrow Game Online - Mlympix, Play Archery Games, Play Archery Online, Archery Games Online Win Real Cash, Online Archery Games, Download Mlympix App and play Online Archery Games";
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

<section class="bg-section" style="padding: 50px 15px 0px 15px;">
    <div class="container">
        <div class="row">
        <div class="col-xl-12 col-md-12">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" >
                <img src="assets/img/logo1.png" alt="">
                <h1 style="font-size:22px !important;"><strong>Mlympix- The Best Platform To Play Bow and Arrow Game Online </strong></h1><br>
<p>The world is revolutionizing at a very rapid pace and everything is getting virtual. One can easily shop, order food, attend classes and even play games online. Numerous people are playing games online for their fun and are making money too. </p><br>
                <p>Playing games online on safe as secure platforms like Mlympix can easily help you to make money in your free time. The platform is best for playing a bow and arrow game online or archery. The online gaming platform has multiplayer and free games as well to entertain you in your free time.  </p><br><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>       <br><br><br>       </div>
<div class="col-xl-1 col-md-1" >
                </div>
            <div class="col-xl-5 col-md-5" >
                <img src="assets/img/arrow-game-bg.webp" alt="" >

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
                <h2 style="text-align:center;">How is Mlympix better than other gaming platforms for you? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/arrow-game-about.png" alt="" >       
			</div>
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix  is not just better than any other gaming platform but it is the best in its category in the Indian gaming industry. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The online gaming platform has several games like archery, cricket, hurdling, classics ancient board games, chaupar, etc which can be easily played by several people at a time. It is the best platform to play archery games online win <a href="https://mlympix.com/real-cash-withdrawal-games.php">real cash.</a> </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The best part is that Mlympix not just entertains you but is also a good source to make money simultaneously. Moreover, numerous tournaments and league matches also take place on the application for the games available on the platform.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The gaming app can be easily used by anyone without any hurdle or hassle and is completely safe and secure. Numerous people play bow and arrow game online and make money easily on this platform. </p>
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
                <p>Mlympix application is easy to download and one can install it in three easy steps:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>The first requirement is you have to visit the website of the gaming platform to download the android version of the application. You can find the download option there, when you click on it and press OK on the pop-up, then the downloading process of the application starts. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>The gaming platform works efficiently and takes a very insignificant amount of time to complete the process. The application will get downloaded on its own after the first step and you have to wait for a few moments. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>The last step is to activate the ‘unlock source’ feature from your device's settings after the download is complete to achieve the final installation of the application and that is it. The gaming platform is downloaded and ready to play with these three easy steps.</p>
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
                <h2 style="text-align:center;">Mlympix bow and arrow game online – The Archery Gameplay </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> The bow and arrow game online on Mlympix application is simple and easy to play.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> The interesting setup of the game on the Mlympix platform makes the game of archery extremely engaging. It is chance-by-chance gameplay and more than one player can play at once.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The game will proceed as one by one both the players shoot in their respective turns and the one who scores the maximum points in a certain number of chances wins the match.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-arrow.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> A lot of people are preferring to play archery games online to win real cash on the gaming platform</p>
            </div>
          
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/arrow-game-services.png" alt="">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play Archery game online on Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <p>The steps to play Archery game online and win real cash on Mlympix are quite easy and comprehensible. The steps to play the game are given below :</p><br>
               <br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select the game you want to play </h4><br>
                        <p style="font-size:12px;">After installing the app, you can go to the homepage where you get several options from which you can easily choose the game you wish to play. If you want to <a href="https://mlympix.com/play-archery-online.php">play archery, </a> then search the bow and arrow game online and select it. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Add money to the Mlympix account </h4><br>
                        <p style="font-size:12px;">If you want to make money out of the game, then you need to add money to your private mlympix account which can only be accessed by you. The gaming platform is highly secure and when you win a match, money is added to the account and it is deducted on losing. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select a league and start playing </h4><br>
                        <p style="font-size:12px;">There are several leagues available for playing on the application. You can play by selecting the one that suits you according to the availability of money and matches and start playing.  </p>
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
                <h2>Download <b style="color:#000;"> Mlympix App </b> Now </h2>
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
                        <h4>Is Mlympix available on IOS currently?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>The gaming platform is currently not available for IOS. Mlympix is currently supporting only the Android version and it is 100% safe and secure to download the android app via the website. </p>
                    </div>

                    <div class="accordion__header">
                        <h4> What are the games available on the gaming platform Mlympix?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>  Several games such as archery, cricket, hurdling, etc are available for playing on the platform. Games such as ancient board games are also available for free here. One can easily play archery games online win real cash.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is it safe and secure to keep cash in the Mlympix wallet? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The gaming platform takes good care of the security and safety of the cash put in the wallet and it is completely safe and secure to keep cash in the Mlympix wallet. Moreover, the cash kept in the Mlympix wallet can only be accessed by you.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Are the games available on the gaming platform multiplayer?   </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The games available on the gaming platform are multiplayer and one can easily play leagues and bow and arrow game online with strangers with full security and safety. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is the gaming platform available in international markets too? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The gaming platform is currently catering to the Indian market only but is working on widening its reach very soon. 
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
