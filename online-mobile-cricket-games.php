<?php
$title="Online Cricket Game Download | Online Cricket Games With Friends";
$meta_description="Online Cricket Game Download, Online Cricket Games With Friends, Online Mobile Cricket Games, Online Cricket App Download, Real Money Cricket Game, Multiplayer Cricket Games.";
    require_once('autoload.php');
    require_once __DIR__ . '/controllers/OneHandController.php';
   
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


<section class="bg-section pt-pb">
    <div class="container">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" style="padding-top:50px;">
                <img src="assets/img/logo1.png" alt="">
                <h3><strong>Changing the world of Online Mobile Cricket Games</strong></h3><br>
                <p class="">The world around us has changed considerably due to the introduction of the internet and immediate advancement in the field of technology. People all around the world are glued to various digital devices to fulfill their professional as well as entertainment needs. This aspect stands true for the world of online gaming as well and there has been an imminent rise in the online cricket game download trend.</p><br>
                <p>Human society has witnessed some of the most thrilling online mobile cricket games that have dominated the market. These games have helped us in more ways than one. They serve as a premium source of entertainment and also allow us to make money in the long run if the option of wagering is available. This is where the services of <a href="https://mlympix.com/" style="color:#0000FF;">Mlympix </a> can be effectively utilized.</p><br>
                    <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>           </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/bg-cricket.webp" alt="" style="width:100%">

            </div>
        </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#FFFFFF;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="color:#000;text-align:center;">What makes Mlympix different from other online cricket app downloads? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify">
           <div class="col-xl-6 col-md-6" style="padding-top:50px;">
                <img src="assets/img/cricket-app-download.webp" alt="">
            </div>
            <div class="col-xl-6 col-md-6 " style="color:#000;">
               <p>Mlympix has taken the <a href="https://mlympix.com/the-sports-clan.php" style="color:#000fff;">Indian gaming industry </a> by storm and plans to expand on an international level as well. We ensure that all your financial credentials will be safely withheld by the professional team here at Mlympix.</p><br>
               <p>All the games listed on the Mlympix app are in a multiplayer format which can be enjoyed with friends. Through our platform you now have a fantastic opportunity not only to enjoy top-notch games, but users also stand a chance of making money on the go. Therefore, if you want to play online cricket games with friends then you should download Mlympix today!</p>

            </div>
        </div>
    </div>
</section>
	
<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">What makes Mlympix different from other online cricket app downloads? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>Download the Mlympix application by visiting the official Mlympix website. A pop-up option will appear where the user must click on the “OK” option to initiate download. The Mlympix app is 100% safe to download.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>Wait for the download process to complete. The Mlympix app is 100% compatible with Android 7.0 and other devices.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After completing the Download, go to the settings options and activate the “Unknown Source” feature to enjoy the Mlympix app.</p>
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

<section class="pt-pb" style="background-color:#FFFFFF;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h1 style="color:#000;text-align:center;font-size:36px;">Play online mobile cricket games on Mlympix - Cricket Gameplay</h1>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify" style="color:#000;">
           <div class="col-xl-6 col-md-6" >
               <p style="padding: 25px 0px;line-height: 36px;">The Cricket gameplay on Mlympix is very engaging and entertaining. Each player gets to battle another registered player in a 1v1 duel. The format of traditional cricket is adopted where one player gets to bat while the other bowls. A target is set after completing the 1st half of the game which is then chased by the player who bowled first. If you want to enjoy premium quality online cricket games with friends then Mlympix is the best app for you.</p>
            </div>
          
            <div class="col-xl-6 col-md-6 " style="text-align:center;">
                <img src="assets/img/about-us.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to download Mlympix? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-12">
                <img src="assets/img/download-cricket.png" alt="" style="align:center;">       
			</div>
            <div class="col-xl-2 col-md-2">
               
               </div>
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify">
                <p style="line-height: 36px;padding: 50px 0px;">The Cricket gameplay on Mlympix is very engaging and entertaining. Each player gets to battle another registered player in a 1v1 duel. The format of traditional cricket is adopted where one player gets to bat while the other bowls. A target is set after completing the 1st half of the game which is then chased by the player who bowled first. If you want to enjoy premium quality online cricket games with friends then Mlympix is the best app for you.</p>
			</div>
          	 
        </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play online mobile cricket games on Mlympix?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row py-2 text-justify">
				    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket1.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Browse for the Game</strong></h4>
    						</div><br>
						<span style="font-size:12px;">After completing the online cricket app download, users will be taken to the home screen where they can check-out a multitude of games featured. For example, if you wish to play online cricket on Mlympix, all you need to do is select the game featured on the hope screen.</span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket2.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Deposit Money on your <br>Mlympix Wallet</strong></h4>
    						</div><br>
						<span style="font-size:12px;">The next step involves recharging your Mlympix accounts. Deposit a certain sum of money to start wagering and enjoying the online mobile cricket games listed on the application. The amount added to the Mlympix wallet is safe and will hold all your deposit and winning amount till the time the user wishes to withdraw a certain sum of money from the wallet. Losing a game would result in the deduction of the wager amount mentioned in the League Settings.</span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket3.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Choose a League <br> and Play</strong></h4>
    						</div><br>
						<span style="font-size:12px;">Every game of Mlympix has different leagues assigned which can be accessed by wager a specific amount of money. The paid games have a <a href="https://mlympix.com/the-sports-clan.php" style="color:#000fff;">1v1 multiplayer gameplay</a> option. The online cricket game download can be enjoyed by people from remote locations.</span>
						<span style="font-size:12px;"> Select the league you are comfortable playing in that suits your current skill level. Work your way up the ranks and convert it into real cash by winning individual games. The <a href="https://mlympix.com/download-board-games/" style="color:#000fff;">classic games</a> of Moksha Patam and Chaupar are free-to-play.</span>
                    </div>
				    </div>
		</div><br>
        <p>Select the league you are comfortable playing in that suits your current skill level. Work your way up the ranks and convert it into real cash by winning individual games. The classic games of Moksha Patam and Chaupar are free-to-play. </p>
				   
    </div>
</section>

<section style="padding-top:50px;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Why Choose Mlympix? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-12">
                <img src="assets/img/choose-mlympix.webp" alt="" style="align:center;margin-bottom: -7px;">       
			</div>
            <div class="col-xl-2 col-md-2">
               
               </div>
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify">
                <p style="line-height: 36px;padding: 25px 0px;">The process of withdrawing winnings is also comparatively easy. All you need to do is activate the withdrawal option through UPI or Online Banking methods, as per the preference of the application user. Mlympix gives you a fantastic opportunity to make money on the go which can be effectively utilized to pay-off additional debts.It is a great medium that connects entertainment with earnings. Get in touch with our team today to avail more information about the services offered by Mlympix.</p>
			</div>
          	 
        </div>
    </div>
</section>

<section class="pt-pb text-center" style="background-color:#ebbf27;padding-top:50px;">
    <div class="container">
        <div class="row">
           <div class="col-xl-6 col-md-6">
                <h2>Download <b style="color:#000;">Mlympix App</b> Now</h2>
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

                    <div class="accordion__header  is-active">
                        <h4>Is Mlympix available for iOS devices?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body  is-active">
                        <p>The Mlympix application is presently available for Android devices. However, the application will be available for iOS users as well.</p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is the Mlympix app safe to download?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes! The Mlympix app is completely safe to download and play.</p>
                    </div>

                    <div class="accordion__header">
                        <h4>What kind of games are available on Mlympix?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Mlympix features, Classic Board Games, Cricket, Archery and Hurdling.</p>
                    </div>

                    <div class="accordion__header">
                        <h4>What is the cash withdrawal procedure?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>You can deposit and withdraw cash in or out of your Mlympix wallet through UPI or Online Bank Transfer.</p>
                    </div>

                    <div class="accordion__header">
                        <h4>Are tournaments available on Mlympix?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes! Round robin tournaments and leagues in India are organized and multiple online cricket games with friends can be enjoyed through the Mlympix app.</p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
