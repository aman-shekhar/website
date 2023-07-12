<?php
$title="Chaupar Games Online | Play Chaupar Game Online | Download Mlympix";
$meta_description="Chaupar Games Online, Play Chaupar Game Online, Play Ludo Online, Play Ludo Online With Friends, Play Ludo Game Online, Paly Ludo Classic Game Online, Ludo Master Game Download";
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
                <h1 style="font-size:22px !important;"><strong>Mlympix- Unveil the essence of ancient game 
Chaupar games online </strong></h1><br>
<p>Today, the virtual online world is not an alien concept. Even in the bleakest part of our lives, we find an online presence to help with our needs. Be it doing shopping, selling the products, or even availing services everything is done digitally today. One such field is online gaming which has taken the market by storm.</p><br>
                <p>The games that we used to play on grounds, or board, they too have hopped into the online world. At Mlympix, you can find your favorite games, especially if you want to gain the experience of chaupar, then we at Mlympix have the option to play chaupar game online for you. </p><br><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>      <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 " style="padding-top: 11%;">
                <img src="assets/img/chaupar-game-online-bg.webp" alt="" >

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
                <h2 style="text-align:center;">Why is Mlympix better than others for you?  </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/chaupar-game-online-about.webp" alt="" >       
			</div>
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is an advanced gaming platform that offers a multitude of games to play online and win real cash at the same time. Hence, you get to make money while enjoying the gaming process with no strenuous tasks. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>We have categorically divided the games into two parts: sports games and board games. Talking about board games, you have the option to play chaupar game online.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The chaupar game is completely free of cost and can be played with 3-4 players. The design of our app is user-friendly that allows our users to easily move around and kick-start gaming. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> Apart from our astounding app features, the game matches organized on our platform enable the users to cash at every win. In addition, various leagues and tournaments are also available on our platform that is as big as national matches.</p>
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
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p> First off, the users have to visit the official website of <a href="https://mlympix.com/">Mlympix</a> to download the app on android. On the homepage, click on the install application and tap OK to start the installation. For example: to download chaupar for android, you have to install the Mlympix app first.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>After selecting OK, the process to download the app initiates. The app gets downloaded pretty easily since it is an android friendly app and currently supports Android 7.0 and above.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>Once the downloading gets completed, the user has to open the settings and turn on the "unknown source" to complete the installation successfully.</p>
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
                <h2 style="text-align:center;">Chaupar games online on Mlympix- The Gameplay</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> The players who are seeking to play chaupar online can easily avail of the classic board game of chaupar at our Mlympix website for free.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>It is a mind-inclusive game that requires the players to strategically plan their every move. In this game, the players control the pawn tokens whilst competing against the opponents </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 2%;">
                 <img src="assets/img/icon-chaupar.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> The chaupar game very much mirrors the famous battle in the Mahabharata. It is the responsibility of the players to chalk out strategies that enable their pawns to see the end game without getting caught or killed. </p>
            </div>
          
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/chaupar-game-online-services.png" alt="">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play chaupar game online on Mlympix?</h2>
                <hr class="horizondal-line"><br>
               <br>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Choose the chaupar game from the home screen  </h4><br>
                        <p style="font-size:12px;">First, download chaupar for android, which means downloading the Mlympix app. After the downloading is over, open the app. You will get directed to the home screen wherein, you can find all the games that are offered on the platform. Choose the one game that you want  to play.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/chaupar-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;"> Chaupar game is free to play online </h4><br>
                        <p style="font-size:12px;">The classic board games category mentioned on Mlympix is completely free of cost. It means you don’t have to add any money or deposit it into your wallet to start playing. You have the option to play a 1v1 chaupar duel with other registered players online. Moreover, at most four players can play the chaupar game at a time and enjoy it together on the Mlympix app.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/chaupar-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Be a part of the league that aligns your preference  </h4><br>
                        <p style="font-size:12px;">You can earn a chance to win a pretty good cash amount only if you become a part of the league. It means that firstly, you have participated in a league that is appropriate for you to participate in all major<a href="https://mlympix.com/"> Round Robin</a> tournaments. You can opt for the league that aligns with your preference and the sum of money you want to proceed ahead with. </p>
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
                        <h4>Is Mylmpix wallet safe to keep our money? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Definitely yes. The deposits and money that are added to your wallet are 100% safe and secured. Only you can access it and withdraw it whenever you want.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4>  Is it possible to make money by playing games online? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>  Yes. Several games are being offered on the Mlympix platform that allows you to garner fun and make real money at the same time as well. The classic board games at Mlympix is completely free. </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Do Indian users compete against each other in matches on the Mlympix app? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Absolutely yes. The Mlympix app holds several matches and provides several gaming options that can be enjoyed by Indian users.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4> Can I download the Mlympix app on iOS?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>As of now, No. The Mlympix app currently supports android devices only. However, the Mlympix team is working to make it available for iOS users too.
 </p>
                    </div>

                    <div class="accordion__header">
                        <h4>What are the different modes of money transfer offered on the Mlympix app?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The users can use either UPI or online bank transfers to add or withdraw money from their Mlympix accounts and wallets.
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
