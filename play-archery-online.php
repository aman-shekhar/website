<?php
$title="Play Archery Online | Play Archery Games | Online Archery Games";
$meta_description="Play Archery Online, Play Archery Games, Archery Games Online Win Real Cash, Bow and Arrow Game Online, Online Archery Games, Archery Games Online, Mlympix.";
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
	
<section class="bg-section pt-pb">
    <div class="container">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" style="padding-top:50px;">
                <img src="assets/img/logo1.png" alt="">
                <h3><strong>The new platform to play archery online</strong></h3><br>
                <p>The growth in the field of technology and usage of the internet has been tremendous for the past few years. Most physical activities have turned into virtual ones such as shopping, selling products, watching movies, and even playing games. Through this innovation people can now play archery online with complete convenience from the comfort of their home. Gaming as a whole has taken a considerable leap in the online gaming domain. One of the examples is to play archery games. </p><br>
                <p> Various  <a href="https://mlympix.com/about.php" style="color:#000fff;">online gaming platforms </a> have been introduced recently due to their wide use in today’s world. If you are looking for a good gaming platform with unique features and various games, then Mlympix is the right place for you.</p><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>              </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/banner-archer.webp" alt="" style="width:100%">

            </div>
        </div>
    </div>
</section>

<section style="padding-top:50px;background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How is Mlympix better than other gaming applications?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/archer.webp" alt="" style="align:center;margin-bottom: -8px;">       
			</div>
           
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify">
                <p>Mlympix is our <a href="https://mlympix.com/" style="color:#000fff;">online gaming application </a> that has some exciting features and multiple options to select from. We provide you with games like archery, cricket, hurdling, and <a href="https://mlympix.com/download-board-games/" style="color:#000fff;">classic board games.</a> Our audience loves to play archery online. Our services are not only able to entertain you but also help you to make money. </p><br>
                <p>Our platform is a platform that has the feature of making our customers win real cash and provides a <a href="https://mlympix.com/the-sports-clan.php" style="color:#000fff;">multiplayer channel.</a>  We make sure that your details are kept completely secure and confidential. So there is an extraordinary amount of money that can be won by playing games like archery on our application. Mlympix also organizes round robin tournament and leagues which players can enjoy with their friends. </p>
            </div>
          	 
        </div>
    </div>
</section>
	
<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to download Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <p>It takes only three simple steps to download Mlympix app on your mobile phone and enjoy its fabulous features and games. The three steps to follow are mentioned below:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>Visit the official Mlympix website to download the mobile application. A pop-up option will appear on your screen, to which you need to press the OK option.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>After clicking on the OK option, wait for the download to complete successfully. Our app supports Android devices, so the download will not be a problem.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After the download is done, go to your settings and turn on the “unknown source” features for the complete installation of the app.</p>
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
                <h1 style="color:#000;text-align:center;font-size:36px;">Play Archery Online with Mlympix - The Archery Gameplay</h1>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify" style="color:#000;">
           <div class="col-xl-6 col-md-6 col-sm-12" >
               <p style="line-height: 36px;padding: 50px 0px;">The Archery Online gameplay on Mlympix app is simple yet effective. The traditional rules of archery are followed where two players go head to head in battle to score maximum points out of a specific number of chances provided. The first player takes the shot first which is then followed by the second user. This engaging format of Mlympix archery makes the game very engaging.</p>
            </div>
            <div class="col-xl-2 col-md-2">
               
            </div>
            <div class="col-xl-4 col-md-4 col-sm-12">
                <img src="assets/img/about-us.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play online mobile cricket games on Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <p>The steps to use our application are straightforward to understand. The following steps are mentioned below:</p><br><br>
            </div>
        </div>
        <div class="row py-2 text-justify" style="color:#000;">
				    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket1.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Select the game you <br>wish to play</strong></h4>
    						</div><br>
						<span style="font-size:12px;">After the app is completely installed, the users are taken to the homepage of the platform. There you will have different options available from which you can play whichever game you want. For example, if you wish to play archery games, search for archery and click on select.</span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket2.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Add money to the <br> Mlympix account</strong></h4>
    						</div><br>
						<span style="font-size:12px;">Adding money to your private Mlympix account is required if you wish to make money out of your games. Your details and the money you put in remains highly safe and secured. On winning a match, money is added to your account, and money is deducted on losing. </span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket3.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Select a league and <br> start playing</strong></h4>
    						</div><br>
						<span style="font-size:12px;">There are various leagues available on our application. You can select the one that suits you the best based on the money and matches available. There is a multiplayer option available as well. Many leagues are also available to play archery online. </span>
                    </div>
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

                    <div class="accordion__header is-active">
                        <h4>Which all games are available on Mlympix?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>There are various games available like archery, cricket, hurdling, and many other unique board games. </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is this app available on IOS as well?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Currently, there is only an Android supporting version of this app available. However, we are working on creating a platform that works efficiently with IOS as well. </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is the money kept in our Mlympix wallet safe?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, the money you keep in your personal Mlympix wallet remains safe and accessible by just you. We guarantee the complete safety and security of your cash. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>What are the ways available for the money transfer?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>There are UPI and online bank transfers available that can be used to withdraw or deposit a desired amount of money. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Does this app hold national matches?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, this app finds matches among players within India through its multiplayer gaming experience. Therefore, it is excellent for people who like to play archery games with diverse exposure. </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
