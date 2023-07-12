<?php
$title="Best Board Game Apps | Free Board Game Apps | Download Mlympix Now";
$meta_description="Best Board Game Apps, Free Board Game Apps, Download Mlympix Now, Download Board Games, Play Ancient Board Games, Classic Board Games To Play Online, Mlympix";
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

<section class="bg-section" style="padding:50px 15px 0px 15px;">
    <div class="container">
        <div class="row">
        <div class="col-xl-12 col-md-12">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6">
                <img src="assets/img/logo1.png" alt="">
                <h1 style="font-size:22px !important;"><strong>Mlympix – Revolutionizing The Way Of Playing Board Games </strong></h1><br>
                <p>In this hectic schedule, people have lost their touch of playing games but with Mlympix it is coming back. With Mlympix, which is an online gaming platform, it is now easy to play games anytime anywhere on your android device. </p><br>
<p>The online gaming platform offers several games and tournaments for the users where users can even earn money with a few simple steps. The application is user-friendly and easy to install and anyone can entertain themselves with Mlympix. It is the best free board game apps available in the Indian market with such diverse features. </p><br><br>
<a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>      <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 " style="padding: 5%;">
                <img src="assets/img/board-game-app-bg.webp" alt="">

            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<section style="padding-top:50px;background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Why is Mlympix better than other gaming platforms for you? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-md-5 col-sm-12">
                <img src="assets/img/board-game-app-about.webp" alt="" style="align:center;margin-bottom: -8px;">       
			</div>
           
            <div class="col-xl-7 col-md-7 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is the best board game apps due to its user-friendly interface and additional features.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The online gaming platform offers the opportunity to play several games with other players and also compete in tournaments.  </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> Unlike other gaming platforms, Mlympix is not just restricted to playing games but also aids in earning money.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Playing classic games such as board games and snake and ladder is now easy with <a href="https://mlympix.com/">Mlympix.</a> </p>
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
                <p>Mlympix application can be downloaded in three easy steps:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>The first step is to visit the official website of the online gaming platform and download the application from there. The android users can select the download option and click OK on the pop-up appearing after it. The process to download the android board game apps is initiated after this.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>Now, you have to wait for a few moments until the application gets downloaded on the android devices. Mlympix works very efficiently and won't take much time in getting downloaded. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After the download is complete, you need to go to the settings of the device and activate the”unlock source” feature to completely install the application and make it ready to play. </p>
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
                <h2 style="text-align:center;">Mlympix board games online – The Gameplay </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is the top free board game apps in the Indian market and the players can enjoy the board games online for free.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The online board game is not much different than the offline one and similarly, the players have to control their pawns and reach the end without getting defeated. The player who reaches the home first is the winner.  </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-board.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> The game is quite interesting and can be played by multiple players at once (maximum 4). </p>
            </div>
          
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/board-game-app-services.webp" alt="">       
			</div>

        </div>
    </div>
</section>

<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play board games online on Mlympix?  </h2>
                <hr class="horizondal-line"><br>
                <p>The method to play board games online on Mlympix is quite easy and can be understood in three easy steps:</p><br>
               <br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/search-icon.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Choose the game you want to play from the homepage of the application.   </h4><br>
                        <p style="font-size:12px;"> The first thing that the user needs to do after downloading the application is select the game that they want to play among the various games available on the homepage of the application. Mlympix is the <a href="https://mlympix.com/best-board-game-apps.php">best board game app</a> and the user can select the board game from the homepage and play it without any additional charges. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Play from the freeboard game apps.</h4><br>
                        <p style="font-size:12px;">You can wait for a few moments so that the application is installed and then enjoy the freeboard game on the online gaming platform. The game can be played by four people at once and is available for free on the platform.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Become a part of any league that is suitable for you. </h4><br>
                        <p style="font-size:12px;">The last step is to be a part of any league or tournament that suits your skill and time and play the game. Mlympix is the best android board game apps and hosts several leagues and tournaments, some even at domestic levels to keep the competitive spirit alive among the players.  </p>
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
                        <h4>Does this gaming platform allow playing games with multiplayer?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p> The gaming platform allows playing games with several players as per the requirements of the game. Mlympix is the best board game apps online where many players can play together from different locations. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can anyone access the money kept in your Mlympix account?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The gaming platform maintains high safety and security for the users and their accounts. The money kept in your Mlympix account is accessed by you and only you can withdraw from it. 
 </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is this application available in the international gaming industry too? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> The gaming platform is currently catering to the Indian market only but free board game apps will be available in the international gaming industry too via Mlympix very soon.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is Mlympix gaming platform available on IOS? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The Mlympix gaming platform will very soon be available for IOS as well but for now, only the Android application is available for download via the website. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can you play more than one game on the online gaming platform?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, you can play several games on the gaming platform. Free games like <a href="https://mlympix.com/download-board-games.php">classic ancient board games </a> along with money games like archery, cricket, and hurdling are available on the online gaming platform for playing.  </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
