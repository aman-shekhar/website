<?php
$title="Play Hurdles Game Online | Hurdle Game On Mlympix | Download Now";
$meta_description="Play Hurdles Game Online, Hurdle Game On Mlympix, Play Hurdles Game On Mlympix, Download MlympixApp Now, Hurdling Games Online, Play hurdles online, Download Hurdle Games";
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
        <div class="col-xl-12 col-md-12">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6" style="    padding: 50px 15px 0px 15px;">
                <img src="assets/img/logo1.png" alt="">
                <h3><strong>Mlympix – The safest online platform to play hurdling games and earn money</strong></h3><br>
                <p>The trend of playing games online is gaining immense popularity in recent years. With the
advancement in technology and the wide reach of electronic gadgets, people are now finding
different ways for their entertainment online. Numerous platforms have also come up in recent
years which specialize in gaming, where one can put money and earn it back easily by winning
the game. With the emergence of several gaming platforms online, it is important to choose the one
which is secure and safe. Mlympix is one such platform where you can easily play games and
win money. A large number of people are preferring to play hurdles game on Mlympix as it is
interesting and helps you to win money. </p><br><br>
<a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>     <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/hurdles-games-online-bg.webp" alt="" class="bg-position">

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
                <h2 style="text-align:center;">Why is Mlympix better than other gaming platforms for you?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/hurdling-1.webp" alt="" >       
			</div>
           
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify">
                <p>> safety and
security are some of the top reasons for it being preferred by so many people to play games.</p>
</p><br>
<p>> The gaming platform not only allows you to play hurdles game online, but it also offers several
other games like <a href="https://mlympix.com/play-archery-online.php">archery </a> and cricket.</p><br>
<p>> Along with the availability of multiple choices, the gaming platform is also quite
comprehensible and easy to use which is why, it, is quite popular and has several players.</p><br>
<p>> Moreover, another reason for it being better than other gaming platforms is because it enables
the users to earn money through it.</p><br>
<p>> Anyone can play hurdles game on Mlympix and earn
money by creating their account on the gaming platform.</p>
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
                <p>The process to install the Mlympix application is quite straightforward. You can download the
application and start playing in three easy steps:</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>To download the Mlympix application for Android devices, you need to visit the official site of
Mlympix. After this, a pop-up comes upon which the user needs to click OK to start the process
of downloading.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>After initiating the downloading process, the user needs to efficiently wait for a few moments
for the downloading to complete. The <a href="https://mlympix.com/">Mlympix</a> application is completely safe to download and
takes a very minimal amount of time to start.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>After completing the downloading process, the user needs to activate the “Unknown Source”
feature from the settings option to start the application and enjoy.</p>
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
                <h1 style="color:#000;text-align:center;font-size:36px;">Mlympix hurdling games online – The gameplay</h1>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify" style="color:#000;">
           <div class="col-xl-6 col-md-6 col-sm-12" >
               <p>The hurdle game on Mlympix is quite an interesting and engaging game where the players can
win money. The game is a 1v1 gameplay where both the players are running side by side and
are trying to win by jumping over multiple hurdles. The hurdle game on Mlympix requires
consistency and focus to defeat the opponent. The point system in this game goes as per the
following. The game consists of a 1000 meter race. In this race, the player needs to run and
collect the coins and overcome the hurdles. Each point collected results to 1 point where as
crossing each hurdle results to 4 points. After the finishing the race, the total points are
calculated on the basis of the number of coins collected and number of hurdles crossed.</p>
            </div>
            
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/hurdling-2.webp" alt="">
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
                <p>The procedure to play hurdles game on Mlympix is quite simple and the layout of the game is
 very interesting. Some of the basic steps that are important for the user to know before playing
the game online are:</p><br><br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/hurdling-games-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select a game that you are interested in playing.</h4><br>
                        <p style="font-size:14px;">After installing the Mlympix application, users will see the home screen where an individual can
see different games and browse for the game that they want to play.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/hurdling-games-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Open your account and deposit money on the Mlympix wallet.</h4><br>
                        <p style="font-size:14px;">The next step is to deposit the money in your Mlympix wallet to earn money in the game.
Playing the Hurdle game on Mlympix can help you fetch several rewards and cash prizes for
winning the match. All the cash prizes that you win are deposited in yourMlympix wallet and
the user can withdraw them at their convenience.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/hurdling-games-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Choose the match that is suitable for you and start playing.</h4><br>
                        <p style="font-size:14px;">All the games of the online gaming platform have varied leagues and matches. One can select
the match that suits their skill, money, and time and starts playing and winning.</p>
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
                        <h4>Is putting money in Mlympix account safe?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Mlympix ensures the complete safety and security of the money that is put in the account of the players. The gaming platform ensures that the money is earned in the right way and that it is safe. 
 </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Can you make actual money by playing games online on Mlympix? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, one can make actual money by playing games online on Mlympix. It is quite easy and safe to play the hurdle game on Mlympix and win money. All you have to do is create your account on the gaming platform and play matches.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is this gaming application available on both android as well as IOS?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The gaming application is currently available only for Android users but will be available very soon for IOS users too.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Do regular tournaments and league matches take place on this gaming platform? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, regular league matches and tournaments take place in the gaming platform to keep the competitive enthusiasm alive among the players. Moreover, players can also win money by playing hurdle games on Mlympix and by scoring highest in these competitions.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>What games can be played on this online gaming platform? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The online gaming platform offers two categories of games, the first one is the money games such as archery, cricket, and hurdling while the other one is the free games such as classics and ancient board games.  </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
