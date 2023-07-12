<?php
$title="Play Hurdling Games Online | Play Hurdles Online | Mlympix";
$meta_description="Play Hurdling Games Online, Hurdling Games Online, Play Hurdles Online, Play Hurdles Game Online, Play Hurdles Game On Mlympix, Hurdle Jumping Game Online, Download Hurdle Games, Hurdle Race Games Online";
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

<section class="bg-section">
    <div class="container">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" style="    padding: 50px 50px 0px 25px;">
                <img src="assets/img/logo1.png" alt="">
                <h3><strong>Your top-notch platform for playing hurdling games online</strong></h3><br>
                <p>With the increased usage of technology and the internet in today’s world, the prime essence of doing things practically is lost. Now, most of the items and activities are taken virtually. Luckily, we have such advanced technology that can provide us with such platforms. One such platform is made to play hurdling games online, known as <a href="https://mlympix.com/" style="color:#000fff;">Mlympix.</a> </p><br><br>
                 <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>             </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/banner-hurdling.webp" alt="" style="width:100%position: absolute;bottom: 0px;">

            </div>
        </div>
    </div>
</section>

<section style="padding-top:50px;background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Why is Mlympix better than other gaming platforms for you?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/hurdling-game.webp" alt="" style="align:center;margin-bottom: -8px;">       
			</div>
           
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify" style="line-height:36px;">
                <p>Mlympix is our online platform that allows you to play hurdles online and many other <a href="https://mlympix.com/" style="color:#000fff;">money games </a> like cricket, and archery along with <a href="https://mlympix.com/download-board-games/" style="color:#000fff;">free classic board games </a> such as Moksha Patam and Chaupar. The assessability of this platform is also very simple to understand. Apart from providing a variety of exciting games for you to play, you can get a chance to make a lot of money as well.  </p><br>
                <p>Mlympix is our highly advanced application that allows users to win a fantastic amount of money by winning various matches and round robin tournaments. These matches can be as big as on a national level as well. Furthermore, there are matches available to play hurdling games online as well. </p>
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
                <p>This unique application can be easily downloaded and used efficiently by following just three simple steps that are explained below</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>Firstly, you need to visit the official Mlympix website to download the app for Android devices. Then, click on the application when you see it and press on the OK option when a pop-up notification is visible.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>After you click on OK, you need to wait for the app to download. The application is downloaded quite smoothly since our platform works well with Android systems.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After the download is completed, go to your device setting and activate the “unknown source” feature to install the app perfectly.</p>
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
                <h1 style="color:#000;text-align:center;font-size:36px;">Mlympix hurdling games online - The Gameplay</h1>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify" style="color:#000;">
           <div class="col-xl-6 col-md-6 col-sm-12" >
               <p style="line-height: 36px;padding: 50px 0px;">The Mlympix hurdling game online is a 1v1 battle where 2 players compete with each other at the same time trying to jump over multiple hurdles over a specific distance. The fast paced game requires players to be focused in order to edge ahead and defeat an online opponent.</p>
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
                <h2 style="text-align:center;">How to play hurdling games online on Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <p>The process of playing any games on our platform, like any hurdling games online, is straightforward to understand since our layout is highly user-friendly and not complicated. Some of the basic steps that will help you to go about our app are mentioned below</p><br><br>
            </div>
        </div>
        <div class="row py-2 text-justify" style="color:#000;">
				    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket1.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Choose a game that you <br> wish to play</strong></h4>
    						</div><br>
						<span style="font-size:12px;">The home screen lists all the games that the app features. All you need to do is download the app. The users will be directed to the home page which lists diverse games. Just select the game you wish to play to get started.</span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket2.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Update your Mlympix <br> wallet</strong></h4>
    						</div><br>
						<span style="font-size:12px;">There is an Mlympix wallet available online on our platform where you can store some money. If you wish to make money by playing your desired games and winning amazing cash prices, this is needed. The cash and your details will be kept highly secured and safe, so you do not need to worry about safety and confidentiality. </span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket3.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Join any league that <br> suits your preference</strong></h4>
    						</div><br>
						<span style="font-size:12px;"> There are various types of leagues available on our platform, from which you need to select and join one that suits your preferences and matches available. These leagues help you win a significant amount of money if you win any round robin tournament through these.</span>
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
                        <h4>Does Mlympix have the feature of providing multiplayer matches?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Yes, our application gives you the choice of playing any of the games available with more people. Playing with your friends can now become more enjoyable with Mlympix. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>  Is it true that you can make actual money just by playing games on this platform?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, anybody who has their account on the Mlympix wallet is indeed eligible to play any match and win a significant amount of money that gets directed into your account. </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is it safe to put money in the Mlympix wallet account online?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, we guarantee you that your account and other personal details have been kept highly secured and confidential. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is this gaming platform available on IOS?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>At the moment, our platform is only available on all Android services only. We are still working on creating a platform that suits IOS as well.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>What all games are available here?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>This platform is excellent for people who wish to play hurdles online. There are also games like cricket, archery, and free-to-play classic board games.  </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
