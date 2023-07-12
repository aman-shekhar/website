<?php
$title="Download Board Games | Classic Board Games to Play Online | Mlympix";
$meta_description="Download Board Games, Classic Board Games to Play Online, Play Ancient Board Games, Best Board Game Apps, Free Board Game Apps, Android Board Game Apps.";
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


<section class="bg-section pt-pb">
    <div class="container">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" style="padding-top:50px;">
                <img src="assets/img/logo1.png" alt="">
                <h3><strong>The advanced place to play board games online</strong></h3><br>
                <p>These days, online platforms are a must for any given domain. The high and advanced technology has given us the power to develop multiple platforms for various sections like shopping, selling products, money transfer, gaming, etc. Are you looking to download board games that add a sense of entertainment and thrill to your life? One of the most used platforms is for gaming and even allows classic board games to play online, which is available on Mlympix. </p><br><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>            </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/banner-board-games.webp" alt="" style="width:100%">

            </div>
        </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Why is Mlympix better than most of the other gaming platforms?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/gaming-platforms.webp" alt="" style="align:center;margin-bottom: -8px;">       
			</div>
           
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify">
                <p>Mlympix is an <a href="https://mlympix.com/" style="color:#000fff;">online gaming platform </a> that has multiple choices available through which people can enjoy games as well as make money on the go. Along with <a href="https://mlympix.com/the-sports-clan.php" style="color:#000fff;">sports related games,</a>  you are given the option to play ancient board games as well which are completely free and can be enjoyed by 3-4 players. Our gaming app is straightforward to use and has a precise and efficient layout.  </p><br>
                <p>Along with its unique features, our gaming platform allows you to make money via various matches. Various tournaments and league competitions take place on the app for all the available games and download board games. </p>
            </div>
          	 
        </div>
    </div>
</section>
	
<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Steps to download the Mlympix application</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>First, users must visit the official website of Mlympix to download the application on their Android devices. Click on the download option and select the OK button on the pop-up window.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>After pressing OK, the app begins to get downloaded. It gets downloaded pretty smoothly since our platform works well with Android.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After it shows that the download is completed, go to your settings and activate the “unlock source” feature on your device to successfully install the app.</p>
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
                <h1 style="color:#000;text-align:center;font-size:36px;">Play ancient board games on Mlympix - Chaupar Gameplay</h1>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify" style="color:#000;">
           <div class="col-xl-6 col-md-6 col-sm-12" >
               <p style="line-height: 36px;padding: 50px 0px;">The traditional and classic board game of Chaupar can be enjoyed by players for free. The strategic game allows players to control pawns while fighting opponents resembling the concept of the great battle of Mahabharata. Players must adopt specific strategies to ensure that the pawns reach the final end game without being killed.</p>
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
                <h2 style="text-align:center;">How to play ancient board games on Mlympix?</h2>
                <hr class="horizondal-line"><br>
                <p>The process of playing any games on our platform, like any hurdling games online, is straightforward to understand since our layout is highly user-friendly and not complicated. Some of the basic steps that will help you to go about our app are mentioned below</p><br><br>
            </div>
        </div>
        <div class="row py-2 text-justify" style="color:#000;">
				    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket1.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Select the game you <br> choose to play from the<br> home screen</strong></h4>
    						</div><br>
						<span style="font-size:12px;">When you open the app after it is downloaded, you will be taken to the home page, where all the available games on this platform are provided. Choose any of the games you wish to play and begin smoothly. You can also download board games on our platform.</span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket2.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Free to play classic <br> online  board games</strong></h4>
    						</div><br>
						<span style="font-size:12px;">The classic board games listed on Mlympix are completely free. You can play <a href="https://mlympix.com/about.php" style="color:#000fff;">1v1 games with other online players.</a> A total of 4 players can enjoy the classic board games featured on the Mlympix application. </span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket3.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Become a part of a <br> league that works <br>best for you.</strong></h4>
    						</div><br>
						<span style="font-size:12px;"> To win fantastic cash prices, you need to be a part of a suitable league so that you can take part in all the major round robin tournaments. Select a league based on your preference and the amount of money you wish to play with. The matches that take place can even be at a domestic level.</span>
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
                        <h4> Is the money kept in our Mlympix wallet secured and safe?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Yes, the money you keep in your personal Mlympix wallet remains highly secured and can be accessed by just you. We take care of the complete safety and security of your cash.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can somebody make money just by playing online games? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Absolutely yes, there are various features provided by us that allow you to make money by playing matches and round robin tournaments related to any different sports. Playing classic board games to play online on the other hand is absolutely free on Mlympix. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Does this app hold matches among the Indian users?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, this app can hold matches in all the available gaming options which can be enjoyed by all users inside of India. Therefore, it is excellent for people who like to play ancient board games with a diverse touch and exposure.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is this gaming platform available on IOS?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>At the moment, our platform is available on all Android services only. We are still working on creating a platform that suits IOS just as efficiently and effectively as well.   </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can the games on this platform be played with more people?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, our services provide the feature of playing multiplayer games with real cash prizes. All the games have a multiplayer option where 1v1 battles can be enjoyed. The classic board games, on the other hand, can be played by a maximum of 4 users.  </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
