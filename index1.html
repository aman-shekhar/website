<?php
	$title="Online Cricket Gaming | Best Mobile Multiplayer Games | MlympiX";
	$meta_keywords="Online Cricket Gaming, Best Mobile Multiplayer Games,  Play Cricket Games Online, MlympiX";
	$meta_description="Online Cricket Gaming, Best Mobile Multiplayer Games,  Play Cricket Games Online, MlympiX";
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
                $sucessMsg = "We have sent the MLYMPIX App Download <br>link to <span style='color:#E9C412'>$contacts</span>. Check your phone now!";

            }
		}
	}

?>
<?php
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')  {
            $url = "https://";
    }
    else  {
         $url = "http://";

    }
    // Append the host(domain name, ip) to the URL.
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url .= $_SERVER['REQUEST_URI'];
	if($url == 'https://www.mlympix.com/?download-application'){
       $isAndroid = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android"));
       if($isAndroid == 1){
           $filepath = 'Mlympix_V1.0.apk';

           ?>
           <a href="index.php#howtoinstall"><img src="assets/img/appDownload.webp" alt="download app" width="600" height="800"></a>
           <?php
           
           echo "<script>window.location.href = 'https://apk-download-mlympix.mlympix.com/mlympix_launch.apk'</script>";


            ?>

           <?php
       }else{
           echo "<script>alert('IOS app coming soon !!!');</script>";
       }

    }

    $refCode = "";
    $breakUrl = explode("=",$url);

    if($breakUrl[0] == 'https://mlympix.com/?refCode'){
        $refCode = $breakUrl[1];
        /*************************15-06-2021***************************/
        ?>
        <div id="myModal" class="modal">
              <div class="modal-content"  style="background-image: url('assets/img/popup.png');">
                <span class="close">&times;</span>
                 <div class="">
                     <form method="POST" action="index">

                         <p style="font-size:145%;text-transform: uppercase;color:#E9C412;FONT-WEIGHT: 550;margin-top: 80px; margin-bottom: 20px;text-align: center;">ENTER YOUR PHONE NUMBER & HIT DOWNLOAD
                       <br>  <font style="color:white;"> FOR AUTO-FILLED <br>REFERRAL CODE </font></p>

            								<input class="inp-form" type="text" name="referPhoneNumber" required style="border-radius: 0px;margin-bottom: 20px;background-color: #fefefe;border: green solid 2px;color:black;" placeholder="Enter Your Phone Number">
            				                <input type="hidden" name="refCode" value="<?=$refCode?>">
            				                <input type="hidden" name="url" value="<?=$url?>">
            				<button type="submit" name="refrelSubmit" class="btn" style="background-color:#008d40; border-color:#009242; color:#ffffff;padding:7px;margin-bottom: 80px; margin-left: 10%;
                width: 80%;">Download</button>
            			</form>
                 </div>
              </div>

        </div>
        <script>

            var modal = document.getElementById("myModal");
            modal.style.display = "block";
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
              modal.style.display = "none";
            }
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            if ( window.history.replaceState ) {
              window.history.replaceState( null, null, window.location.href );
            }
       </script>

        <?php
        // $refCode = $breakUrl[1];
    }


    $errorMsg ="";
        if(isset($_POST['refrelSubmit'])){
            $isAndroid = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android"));
            if($isAndroid == 1){
                    $referPhoneNumber = $_POST['referPhoneNumber'];
                    $refCode = $_POST['refCode'];
                    $url = $_POST['url'];
                    $length = strlen($referPhoneNumber);
                    if(! is_numeric($referPhoneNumber)){
                        $errorMsg = $phoneMsg;
                        //return false;
                    }else if($length != 10){
                        $errorMsg = $phoneMsg;
                        //return false;
                    }else if(empty($refCode)){
                        echo "<script>alert('You are not referred !')</script>";
                        //return false;
                    } else {
                        $oneHandController = new OneHandController();
                        $oneHandControllerData = $oneHandController->insertReferel($referPhoneNumber,$refCode,$optionalParam="");
                        if($oneHandControllerData){
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            // set URL and other appropriate options
                            // curl_setopt($ch, CURLOPT_URL, "http://elb-mlympix-public-preprod-beta-1681463277.ap-south-1.elb.amazonaws.com/referral/addCode?phoneNumber=".$referPhoneNumber."&refCode=".$refCode);
                            curl_setopt($ch, CURLOPT_URL, "http://api-preprod-beta.mlympix.com/referral/addCode?phoneNumber=".$referPhoneNumber."&refCode=".$refCode);
                            curl_setopt($ch, CURLOPT_HEADER, 0);

                            // grab URL and pass it to the browser
                            $response = curl_exec($ch);

                            // close cURL resource, and free up system resources
                            curl_close($ch);
                            // echo $refCode;
                            // echo $response; die();
                            if($response == '{"message":"Failed"}'){
                                //echo '<script type="text/javascript">','modalfnc();','</script>';
                                echo "<script>alert('Something wrong with the referel id !');window.location.href = '$url'</script>";

                            }else{
                                ?>
                        <?php
                                echo "<script>window.location.href = 'https://apk-download-mlympix.mlympix.com/mlympix_launch.apk'</script>";
                            }
                        }else{
                            echo "Something Wrong";
                        }
                    }
            }else{
                    echo "<script>alert('IOS app coming soon !!!');</script>";
            }

        }
    ?>


<?php
	// if(isset($_POST['newLetterSubmit'])){
	// 	$subscribeEmail = $_POST['subscribeEmail'];
	// 	$oneHandController = new OneHandController();
	// 	$oneHandControllerData = $oneHandController->insertNewsLetter($subscribeEmail);

	// }
?>

<?php
	// $oneHandController = new OneHandController();
	// $oneHandControllerDataSportGames = $oneHandController->fetchAllSportGames();

?>
<?php
	// $oneHandController = new OneHandController();
	// $oneHandControllerDataTraditionalGames = $oneHandController->fetchAllTraditionalGames();

?>

<?php

	if(isset($_POST['dwnldapp_test'])){
		$isAndroid = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "android"));
		echo "wserdtfyguhu";
		if($isAndroid == 1){
			$filepath = 'Mlympix_V1.0.apk';
			echo "file path";
				if(file_exists($filepath)) {
					echo "wserdtfyguhu";
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
		}
		// else{
		// 	echo "<script>alert('IOS app coming soon !!!');</script>";
		// }

	}
?>

<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
</script>

<script type="text/javascript">
	$(document).ready(function() {
		if (window.location.href.indexOf("download-application") > -1) {
			checkAndroidAndDownload();
		}
	});

	function checkAndroidAndDownload(){
		var userAgent = navigator.userAgent.toLowerCase();
		var Android = userAgent.indexOf("android") > -1;
		if(Android) {
			//getDownloadLink();
			location.href='https://mlympix.com/thankyou-download-banner.php';
			//document.getElementById('howtoinstall').focus();
		}
		else {
			alert('IOS app coming soon !!!')
		}
	}
	function getDownloadLink(){
		var request = new XMLHttpRequest()
		request.open('GET', 'http://api.mlympix.com/version', true)
		request.onload = function () {
			var data = JSON.parse(this.response)
			if (request.status == 200) {
				location.href=data.appUrl;
				console.log('got from api');
			} else {
				console.log('error in fetching data');
				location.href='https://apk-download-mlympix.mlympix.com/mlympix_launch.apk';
			}
		}
		request.send();
	}
</script>

<style>

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 999999999; /* Sit on top */
    padding-top: 150px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
    background-color: #1B1C31;
    margin: auto;
    padding: 20px;
        border-radius: 15px;
        border-color: #E9C412;
    width: 80%;
    }

    /* The Close Button */
    .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    }
        .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 9;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:right;
    }

    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

    }

    .sidenav a:hover{
    color: #f1f1f1;
    }

    .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }

        .responsive {
    width: 100%;
    height: auto;
    }
    .marquee{display:block;

            }
            .header {
            display:block;
        }


            /*.nav-menu{display:none!important;}*/
            .header-logo{display:none!important;}
            /*.nav-btn{display:none!important;}*/
            .program-item-front{width: 100%;height: 200px;}
            .program-col{float:left;max-height:350px;}
            .mobile-view{display:none;

            }
            .desktop-view{display:block;}

            @media only screen and (max-width: 600px) {
                .download-app{
    margin: 0 20px;
        padding: 9px 10px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        font-weight: bold;
        text-transform: uppercase;
        border-radius: 2px;
        font-size: 14px;
        -webkit-text-decoration: none;
        text-decoration: none;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        line-height: 30px;
    background-color: #008d40;
        color: #ffffff;
        border: 1px solid #009242;
        }
        .t-game-img{
            width: 60%;
            margin-left:30px;
        }

            .crossfit-banner-right{width:100%;}
        .desktop-view{display:none;}
        .mobile-view{display:block;}
        .s-counter-temp{padding-top: 20px !important;}
        .marquee{display:block;}
        .header {
            display:block;
            background-color: #1B1C31;
        z-index: 8;
        position: fixed;
        width: 100vw;
        top: 0;
        }

        .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
    }



    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: black;
    opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: black;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
    color: black;
    }
    .accordion
    {
        color: #000;
    }
    .accordion__header.is-active {
        background-color: #9e9e9e42;
        color: #fff;
        
    }
    .is-active .accordion__toggle {
        background-color: #fff;
    }
    .accordion__header {
        background-color: #9e9e9e42;
        color: #fff;
    }
    .accordion__body {
    
        background-color: #eee;
    
        color: #000;
    }
    body{
        background-color: #1B1C31;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

<!-- ============ S-CROSSFIT-SLIDER ============ -->

<link rel="stylesheet" type="text/css" href="styles/home.css">    
<link rel="stylesheet" type="text/css" href="styles/home-mobile-view.css"> 
    <div class="mainContainer">
        <div class="titleApp" style="padding: 10px;">
        </div>
        <div class="titleApp">
            <div class="titleContainer">
                <p class="titleAppText" data-value="The Exciting Cricket Gaming App">
                The Exciting Cricket Gaming App
                </p>
                
                <!-- <div class="titleAppContainer1">
                    <p class="titleAppText1">
                        Coming very soon with exciting new updates
                    </p>
                </div> -->
            </div>
        </div>
        <div style="display: flex;flex-direction: row;padding:10px;">
            <div style="flex:1;text-align: center;margin-left:20%">
                <a target="_blank" href="https://apps.apple.com/in/app/mlympix/id6448535992"><img class="appIcon" src="./assets/mlpx_appstore.webp"></a>
            </div>
            <div style="flex:1;text-align: center;;margin-right:20%">
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.Mlympix.MlympixSportsArena"><img class="appIcon" src="./assets/mlpx_playstore.webp"></a>
            </div>
        </div>
            <div class="carouselApp">
                <div class="wrapper">
                    <div class="mySlides fade">
                        <img class="carouselImage1" src="./assets/W3.webp">
                    </div>
                    <div class="mySlides fade">
                        <img class="carouselImage" src="./assets/cricket.webp">
                    </div> 
                </div>
                <div class="nav-dots">
                    <div class="dot"> </div>
                    <div class="dot"> </div>
                    <!-- <div class="dot"> </div>
                    <div class="dot"> </div>
                    <div class="dot"> </div> -->
                </div>                    
            </div>

            <!-- <div class="downloadViaSmsContainer2">
                <div class="downloadButtonMain1">
                    <button class="downloadButton1" role="button" onclick="checkAndroidAndDownload1()">
                        <p class="downloadButtonText1">
                            DOWNLOAD APP
                        </p>
                    </button>
                </div>
                <div class="availableOnAndroidTextCon">
                    <p class="availableOnAndroidText">
                        Available on Android<br> iOS coming soon
                    </p>
                </div>
            </div>   -->
        </div>
        <!-- <div class="tsliderMain">
            <div class="tslider">
                <div class="tslider--inner">
                <div class="orb">
                    <p class="realMoneyGamingSliderText">Free Khelo 10,000/- cash jeeto, daily!</p>
                    <p class="realMoneyGamingSliderText1"> | </p>
                </div>
                <div class="orb">
                    <p class="realMoneyGamingSliderText">Joining Bonus: Get 50 coins!</p>
                    <p class="realMoneyGamingSliderText1"> | </p>
                </div>
                <div class="orb">
                    <p class="realMoneyGamingSliderText">Skill Bharega Bill!</p>
                </div>
            </div>
            </div>
        </div> -->
    </div>
    <div class="secondMainContainer">
        <div class="downloadMsg">
            <div class="downloadMsgContainer">
                <p class="downloadMsgText" style="text-align:center;">
                Relive the Exciting Cricketing Moments
                </p>        
                <!-- <div class="downloadMsgContainer1">
                    <p class="downloadMsgText1" style="text-align:center;">Our App is 100% safe and secure and can be played by anyone above 18+ years</p>
                </div> -->
            </div>
        </div>
        <div class="features">
            <div class="featureCon">
                <div class="feature mouseEffect">
                    <img src="./assets/playing-hand.webp" class="featureimg">
                    <p class="featuretext">Play 100+ challenges</p>
                </div>
            </div>
            <div class="featureCon">
                <div class="feature mouseEffect2">
                    <img src="./assets/trophy.webp" class="featureimg">
                    <p class="featuretext">Show your skills and compete</p>
                </div>
            </div>
            <div class="featureCon">
                <div class="feature mouseEffect3">
                    <img src="./assets/two-players.png" class="featureimg">
                    <p class="featuretext">Exciting Real-Time Multiplayer Mode</p>
                </div>
            </div>
            <div class="featureCon">
                <div class="feature mouseEffect4">
                    <img src="./assets/secure-shield.webp" class="featureimg">
                    <p class="featuretext">100% Safe and Secure</p>
                </div>
            </div>
        </div>
        <div class="slider featuresMob">
            <div class="slide-track">
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/playing-hand.webp" class="featureimgMob">
                        <p class="featuretextMob">Play 10+ challenges</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/trophy.webp" class="featureimgMob">
                        <p class="featuretextMob">Show your skills and <br> compete</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/two-players.png" class="featureimgMob">
                        <p class="featuretextMob">Exciting Real-Time <br>  Multiplayer Mode</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/secure-shield.webp" class="featureimgMob">
                        <p class="featuretextMob">100% Safe <br> and Secure</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/playing-hand.webp" class="featureimgMob">
                        <p class="featuretextMob">Play 10+ challenges</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/trophy.webp" class="featureimgMob">
                        <p class="featuretextMob">Show your skills and <br> compete</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/two-players.png" class="featureimgMob">
                        <p class="featuretextMob">Exciting Real-Time<br>  Multiplayer Mode</p>
                    </div>
                </div>
                <div class="featureConMob">
                    <div class="featureMob">
                        <img src="./assets/secure-shield.webp" class="featureimgMob">
                        <p class="featuretextMob">100% Safe <br> and Secure</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="renownedGamesCon">
            <div class="renowedGamesTitle">
                <p class="renowedGamesTitleText">Our Renowned Games</p>
            </div>
            <div class="gamesIntro">
                <div class="gamesList">
                    <div class="game">
                        <img class="gamesListIcon" src="./assets/game1.webp">
                    </div>
                    <div class="game">
                        <img class="gamesListIcon" src="./assets/game2.webp">
                    </div>
                </div>
                <div class="gamesList">
                    <div class="game">
                        <img class="gamesListIcon" src="./assets/game3.webp">
                    </div>
                    <div class="game">
                        <img class="gamesListIcon" src="./assets/game4.webp">
                    </div>
                </div>
                <div class="gamesList">
                    <div class="game">
                        <img class="gamesListIcon" src="./assets/game5.webp">
                    </div>
                    <div class="game">
                        <img class="gamesListIcon" src="./assets/game6.webp">
                    </div>
                </div>
                <div class="guysPlaying">
                    <img class="guysPlayingImg" src="./assets/guysPlaying.webp" style="width:100%;height:auto;">
                </div>
            </div>
        </div> -->
        <div class="achievements">
            <!-- <div class="achievementTitle">
                <p class="achievementTitleText" style="text-align:center;">Our Community</p>
            </div>
            <div class="achievementsListCon">
                <div class="achiementCon">
                    <div class="achievement">
                        <img src="./assets/Picture2.png">
                        <div class="achievementTexts">
                            <p class="achievementText">70,000+</p>
                            <p class="achievementText1">Winners</p>
                        </div>
                    </div>
                </div>
                <div class="achiementCon">
                    <div class="achievement">
                        <img src="./assets/Picture1.png">
                        <div class="achievementTexts">
                            <p class="achievementText">25 lakhs+</p>
                            <p class="achievementText1">Reward distributed</p>
                        </div>
                    </div>
                </div>
                <div class="achiementCon">
                    <div class="achievement">
                        <img src="./assets/Picture3.png">
                        <div class="achievementTexts">
                            <p class="achievementText">4.5 Mn+</p>
                            <p class="achievementText1">Games played</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sliderAchievementsMob">
                <div class="slide-trackAchievementsMob">
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture2.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">70,000+</p>
                                <p class="achievementText1Mob">Winners</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture1.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">25 lakhs+</p>
                                <p class="achievementText1Mob">Reward distributed</p>
                            </div>
                        </div>
                    </div>
                    <div class="achiementConMob">
                        <div class="achievementMob">
                            <img width="50" src="./assets/Picture3.png">
                            <div class="achievementTextsMob">
                                <p class="achievementTextMob">4.5 Mn+</p>
                                <p class="achievementText1Mob">Games Played</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="ytVideoCon">
                <div class="ytVideo">
                    <iframe 
                        src="https://www.youtube.com/embed/0z2WwnD1kJg" 
                        frameborder="0" 
                        width="100%" height="415"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                    >   
                    </iframe>
                </div>
            </div>

            <div class="whyChooseUsCon">
                <div class="whyChooseUs">
                    <div class="whyChooseUsTitle">
                        <p class="whyChooseUsTitleText">
                            Why Choose Us
                        </p>
                    </div>
                    <div class="reasons">
                        <div class="reason">
                            <div class="reasonImg">
                                <img class="reasonImgIcon" src="./assets/ellipse.png" style="width: 100%;">
                            </div>
                            <div class="reasonTexts">
                                <p class="reasonTitle">
                                Secure, Reliable & Quick
                                </p>
                                <p class="reasonDesc">
                                When you win on Mlympix, you can be rest assured that your money is totally safe and ready to be transferred instantly to your account whenever you want. <br> One click app mein - paisa aap ke bank mein, Mlympix makes it possible.  
                                </p>
                            </div>
                        </div>
                        <div class="reason">
                            <div class="reasonImg">
                                <img class="reasonImgIcon" src="./assets/ellipse.png" style="width: 80%;">
                            </div>
                            <div class="reasonTexts">
                                <p class="reasonTitle">
                                Host & Earn
                                </p>
                                <p class="reasonDesc">
                                Host & Earn is a revolutionary way to set up leagues and earn from every league you create without even the need to play yourself. <br>Ab aap jitni league Khilaenge utna Kamayenge.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="withdrawalChannels">
                <div class="withdrawalChannelsTitle">
                    <p class="withdrawalChannelsTitleText" style="text-align:center;">Withdrawal Channels</p>
                </div>
                <div class="withdrawalChannelsCon">
                    <div class="bankImg">
                        <img class="bankImgg" src="./assets/bank.png">
                    </div>
                    <div class="upiImg">
                        <img class="upiImgg" src="./assets/upi.png">
                    </div>
                </div>
            </div> -->
            <div class="ourFeatureConMob">
                <div class="ourFeatureMob">
                    
                    <div class="featureConMob">
                        <p class="ourFeatureTextMob" style="text-align:center;">Our Feature</p>
                        <p class="playGameTextMob" style="text-align:center;">Relive Iconic Cricket Moments!</p>
                        <div class="appImageConMob">
                            <img class="appImageMob" src="./assets/pic1.webp">
                        </div>
                        <p class="playGameDescMob"> 
                        With our revolutionary swipe-up reel format, you can quickly access and play through a wide range of challenges that let you relive the biggest matches of all time. From the roar of the crowd, as you hit the winning runs in the 2011 World Cup Final to the tension of a last-over finish in the Ashes, our challenges are designed to put you right in the heart of the action. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="ourFeatureCon">
                <div class="ourFeature">
                    <div class="appImageCon">
                        <img class="appImage" src="./assets/pic1.webp">
                    </div>
                    <div class="featureCon">
                        <p class="ourFeatureText">Our Feature</p>
                        <p class="playGameText">Relive Iconic Cricket Moments!</p>
                        <p class="playGameDesc"> 
                        With our revolutionary swipe-up reel format, you can quickly access and play through a wide range of challenges that let you relive the biggest matches of all time. From the roar of the crowd, as you hit the winning runs in the 2011 World Cup Final to the tension of a last-over finish in the Ashes, our challenges are designed to put you right in the heart of the action. 
                        </p>
                        <!-- <div class="downloadBtn1">
                            <p class="downloadBtn1Text">Download</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="ourHappyMlympixersCon">
                <div class="ourHappyMlympixersTitleCon">
                    <p class="ourHappyMlympixersTitleText" style="text-align:center;">Our Happy Mlympixers</p>
                </div>
                <div class="reviewsCon">
                    <div class="reviews">
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>

                        
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div><div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">What a game! What an Experience!</p>
                                <p class="reviewDesc">
                                Tried the multiplayer mode with my friends, and I am enjoying that. Haven't played this kind of mode before where you get to bowl as well and then chase the target, just like how we play in real life.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Dhoni Dhoni !!! </p>
                                <p class="reviewDesc">
                                Main mahi bhai banke khela, finisher ki tarah challenge complete kiya aur 6 balls mei 26 chase kr daale.<br><br> Thanks Mlympix for this game and these challenges.                                 
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Bahut mazedar Cricket game! </p>
                                <p class="reviewDesc">
                                Good graphics, easy to play fun game. <br><br><br>Best for time pass.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>
                        <div class="reviewItemCon">
                            <div class="reviewItem">
                                <img src="./assets/quote.png">
                                <p class="reviewTitle">Awesome challenges</p>
                                <p class="reviewDesc">
                                Kaafi challenging and kaafi real. Itne aasan nhi hai, aur khelne pe pata chalta hai ki jis bhi khiladi ne real life mei uss total ko chase kiya hai woh alag hi baat hai. Challenges complete krne mei bahut mazza aata hai.                                
                                <br><img src="./assets/5stars.png">
                                <!-- <p class="reviewerName">Angela Taylor</p>
                                <p class="reviewerDetails">CEO SAMSUNG</p> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once __DIR__. '/components/footer.php';
?>
<script src="./scripts/imageCarousel.js"> </script>
<script src="./scripts/home.js"> </script>
<script type="text/javascript" defer>
const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let interval = null;
document.querySelector(".titleAppText").onmouseover = event => {  
  let iteration = 0;
  clearInterval(interval);
  
  interval = setInterval(() => {
    event.target.innerText = event.target.innerText
      .split("")
      .map((letter, index) => {
        if(index < iteration) {
          return event.target.dataset.value[index];
        }
      
        return letters[Math.floor(Math.random() * 26)]
      })
      .join("");
    
    if(iteration >= event.target.dataset.value.length){ 
      clearInterval(interval);
    }
    
    iteration += 1 / 3;
  }, 30);
}
</script>