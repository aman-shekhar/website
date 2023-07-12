<?php
$title="Online Quiz Games For Kids | Best Quiz Games Online | Download Mlympix";
$meta_description="Online Quiz Games For Kids, Best Quiz Games Online, Download Mlympix, Best Sports Games For Android, Online Games To Play With Your Friends, Online Sports Games To Play With Friends.";
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
            <div class="col-xl-6 col-md-6" >
                <img src="assets/img/logo1.png" alt="">
                <h1 style="font-size:22px !important;"><strong>Grab the top tier excitement of online quiz games 
for kids at Mlympix  </strong></h1><br>
<p>Online games are the new convention of the modern tech-savvy world. Kids may learn alphabets later but they instantly grab the mechanics of how a game is played online. Words aren’t enough to praise such Smart kiddos!</p><br>
<p>However, there is one thing that each parent is worried about that online games propels their kids away from studies and doesn’t add much to their kids’ growth as well. </p><br>
                <p>But what if they train the minds of kids? Sharpen their thinking abilities? 
That’s where the online quiz games for kids by Mlympix come into the picture. The quiz games are designed in such a way that effectively trains the brain of kids.</p><br><br>
<a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>    <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 " style="padding: 5%;">
                <img src="assets/img/online-quiz-game-bg.webp" alt="" >

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
                <h2 style="text-align:center;">Why is Mylmpix better than other gaming platforms for you?  </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-md-5 col-sm-12" style="text-align:center;">
                <img src="assets/img/online-quiz-game-about.webp" alt="" >       
			</div>
           
            <div class="col-xl-7 col-md-7 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is an online gaming platform that is specifically designed to allow users to gain the thrill and excitement of online games. The users can easily access the Mlympix app and select the game they want to play.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The Mlympix app has a game list wherein the games are divided into two categories:</p>
                <div class="row" style="    padding: 10px 30px;">
                    <div class="quiz col-xl-6 col-md-6 ">
                        <div>
                            <p >Sports based games</p>
                            <hr class="horizondal-line" style="width: 50% !important;height: 2px !important; margin-bottom: 20px;   margin-left: 11%;">
                            
                           <div style="padding-left:35px;">
                           <img src="assets/img/quiz-game-running.png" alt="" style="width:38%;">
                           
                           <ul class="icon-circle">
                               <li>Cricket</li>
                               <li>Archery</li>
                               <li>Hurdling</li>
                        </ul>
                        </div>
                        </div>
                    </div>
                    <div class="quiz col-xl-6 col-md-6">
                    <div>
                            <p >Classic board games</p>
                            <hr class="horizondal-line" style="width: 50% !important;height: 2px !important; margin-bottom: 20px;   margin-left:11%;">
                            
                            <div style="padding-left:35px;">
                           <img src="assets/img/boardgame.png" alt="" style="width:38%;">
                           
                           <ul class="icon-circle">
                               <li><a href="https://mlympix.com/chaupar-game-online.php">Chaupar</a></li>
                               <li>Mokshpatam</li>
                              
                        </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Apart from these unique offers, the players at Mlympix gets a chance to win real money as well. You have to win individual matches and round Robin tournaments to mint money.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Therefore, if you’re seeking a platform that fills your entertainment and allows you to earn money too, then download the Mlympix app today!</p>
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
                <p> The process to install the Mlympix application is quite straightforward. You can download the
application and start playing in three easy steps:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p> The first and foremost step is to open the homepage of the official website of Mlympix. There, you can find the option to download the app, select that. Afterward, a pop-up notification will appear on the window, click OK to download the application. The app is 100% safe.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>Now, you have to wait for the download to complete. The Mlympix application is an Android friendly app and supports Android 7.0 and Higher versions.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After the download is completed, open the settings and activate the “unknown sources” to let the installation complete successfully and launch the app.
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
                <h2 style="text-align:center;">Mlympix best quiz games online - The Gameplay </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p><a href="https://mlympix.com/">Mlympix</a> is a top-notch platform when it comes to quiz games. The Quiz Gameplay at Mlympix engages the minds of the players in the best quizzes and challenges their skills.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The quizzes are designed in such a way that with enjoyment, you get to avail the of unparalleled satisfaction whenever you solve any quiz. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The derived satisfaction positively affects the personality of the players. And even if the player loses, it also acts as a motivation to the players.  </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-flower.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>They figure out that they need to sharpen their gaming skills, thinking abilities against other players which ultimately brings out a positive change in the players.</p>
            </div>
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/online-quiz-game-service.webp" alt="">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play the best quiz games online on Mlympix?  </h2>
                <hr class="horizondal-line"><br>
                <p>The procedure to play quiz games on Mlympix is quite simple and the layout of the game is
 very interesting. Some of the basic steps that are important for the user to know before playing
the game online are:</p><br><br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select the game you want to play</h4><br>
                        <p style="font-size:12px;">Once you’ve downloaded the Mylmpix application, you will be driven to the home screen of the app where a game list offered by Mlympix is presented. You can search for the game you want from that list and simply click on that.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Deposit the cash in your Mlympix Wallet  </h4><br>
                        <p style="font-size:12px;">After choosing the game, you have to deposit a certain sum of money to start wagering into your Mlympix account. It is needed to start playing the games on the Mlympix app. The paid games at Mlympix offer the players an option of 1v1 multiplayer. Anyways, you don’t have to be concerned about the money in your wallet. With us, your money is safe. The deposits and money that you have won remain intact in your account until you want to withdraw.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select a league</h4><br>
                        <p style="font-size:12px;">The games at Mlympix have leagues where you can participate only after you have wagered a specific amount of money. You have to select a league based on your choice and the amount you want to play with. Afterward, you simply have to improve your rank to convert it into real money by winning each game.</p>
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
                        <h4>Can the Mlympix app be downloaded on iOS?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Unfortunately, No as of now. Mlympix app can be downloaded on Android devices only. However, the team of professionals at Mlympix is working their best to provide this facility.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4> Can I win money by playing online games?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>Absolutely yes! At Mlympix, the players have the opportunity to earn real money by winning matches alongside enjoying the games.
</p>                 
                   </div>

                    <div class="accordion__header">
                        <h4> Is my money safe in my Mlympix wallet?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>A big yes without a doubt! The Mlympix wallet is 100% secured and safe. All the deposits and the winning amount of money added into your Mlympix Wallet remains intact unless you want to withdraw the amount.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4>Are the matches on Mlympix on the national level?    </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>The league matches organized on the Mlympix application are as big as the national league matches.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is the Mylmpix app safe to download?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>Definitely yes! The Mlympix application is 100% safe to download. You don’t have to worry about this aspect. The Mlympix app is an android friendly app.

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
