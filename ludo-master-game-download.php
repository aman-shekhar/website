<?php
$title="Ludo Master Game Download | Play Ludo Game Online On Mlympix";
$meta_description="Ludo Master Game Download, Play Ludo Game Online On Mlympix, Play Ludo Online, Play Ludo Online With Friends, Chaupar Games Online, Play Chaupar Game Online.";
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
                <h1 style="font-size:22px !important;"><strong>Mlympix: The best platform to experience the online 
ludo gaming  </strong></h1><br>
<p>Ludo is one of the games which is popular for many decades. Even today, youth plays this game for entertainment. However, some play it on real board, and some may play it virtually. The craze of online ludo is not hidden from anyone. But the best experience of online ludo is with Mlympix.</p><br>
                <p>Mlympix is an online gaming platform that provides the best gaming interface to its gaming lover users. The features and winning probability after ludo master game download is much high than any other gaming platform. The best uniqueness of this platform is that the user can <a href="https://mlympix.com/online-games-to-win-money.php">win real money</a> by playing online games. </p><br><br>
                    <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>     <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 " style="padding-top: 11%;">
                <img src="assets/img/ludo-master-game-bg.webp" alt="" >

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
                <h2 style="text-align:center;">Why is Mylmpix better than any other platform for you? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/ludo-master-game-about.webp" alt="" >       
			</div>
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is a digital platform that offers various online board and sports games. This includes the ludo game as well. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is different from various other gaming platforms. It is so because our platform has the uniqueness of winning real money. A user can play ludo game online on Mlympix. We provide the best user interface with the best graphics.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Apart from this, the feature that makes our Mlympix platform different from other platforms is the safety of our user's money. We value the time and money of our customers, and all their information is kept safe with us.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Every game on our platform has different leagues which a gaming user chooses. Mlympix is the first online gaming platform offering leagues of the games. </p>
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
                <p>The process of ludo master game download from the Mlympix application is easy. However, here are the steps to download the Mlympix application.</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p> The first step to download the Mlympix application is to visit the official website of Mlympix. Visit the website, and you can easily see the option for downloading the application on Android Phones. Click the download option and then click OK on the pop-up window.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>Once you click the OK, the application will start downloading. In a matter of a few minutes, this application will get downloaded to your Android Phone.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>To make this download successful, go to your device setting and activate the "unknown source." Now the download is successful.</p>
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
                <h2 style="text-align:center;">Mlympix ludo games online - The Gameplay </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>On the Mlympix platform, a user can play various games including, ludo. After the ludo master game download, a user can select the desired league for the same.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The rules of this game are the same as we play in the real world. There is an option of multiplayer with the help of which a user can play this ludo game with his friends. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-ludo.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> Any player who will enter its four tokens in the middle square will win this game. If a user is playing the game for real money, he will receive the winning amount in the wallet. But, the amount will get deducted on every loss.</p>
            </div>
          
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/ludo-master-game-services.png" alt="">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play Ludo game online on Mlympix? </h2>
                <hr class="horizondal-line"><br>
               <br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Search the ludo game  </h4><br>
                        <p style="font-size:12px;">It is simple to play ludo game online on Mlympix after downloading this application. As a first step, visit the Mlympix official website. In case you have downloaded the <a href="https://mlympix.com/">Mlympix </a> application, then open the application. You will see various gaming options at the start of the application. Now, either choose ludo from the homepage or search for this game.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Add money to the Mlympix wallet </h4><br>
                        <p style="font-size:12px;">After selecting the ludo master game, the next step is to add money to your Mlympix wallet. However, it is essential only when a user is playing for real money. Therefore for adding money to your wallet, choose the Add Money option and the desired amount. On winning any game, an amount will get credited to the wallet. But the amount will get deducted with any loss in the game.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select the league for the ludo game </h4><br>
                        <p style="font-size:12px;">Once the money is added to the wallet, now select the league for the ludo game. A user will find many leagues to play ludo game online on Mlympix. Therefore, choose a league that suits your budget and interest. </p>
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
           <h2>Download <b style="color:#000;"> Mlympix App</b> Now </h2>
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
                        <h4>Is Mlympix offering real money in online ludo gaming?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Yes, a user can add real money to the Mlympix wallet, and on every win, a user will receive the winning amount in the wallet.</p>
                    </div>

                    <div class="accordion__header">
                        <h4> What are the modes of payment for adding money to the Mlympix wallet?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> A user can deposit and withdraw the money through UPI and the bank transfer procedure.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is the Mlympix application available for iOS phones?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>No, for now, the Mlympix application is not available for iOS phones. It is available for Android phones only. But in the near future, it is expected that it will be available for this version as well. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>What are the online sports games available on Mlympix?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Mlympix has a wide variety of sports games including, Hurdles, cricket, and Archery. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is the Mlympix application safe to download? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, the Mlympix application is completely safe for downloading on Android phones. 
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
