<?php
$title="Skill Based Games | Online Skill Based Games | Download Mlympix";
$meta_description="Skill Based Games, Online Skill Based Games, Download Mlympix, Best Sports Games For Android, Online Games To Play With Your Friends, Online Sports Games To Play With Friends.";
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
                <h1 style="font-size:22px !important;"><strong>Enjoy the thrilling and mind-edgy skilled based games at Mlympix </strong></h1><br>
                <p>Long gone are the days when online games used to lure teenagers only. Nowadays, people from all categories of ages have joined the online stream too. As much as it can be attributed to the fact that online skilled based games are the source of fun and enjoyment, these games allow people to fill their pockets as well. The combination of entertainment mixed with a chance to mint revenues has ushered the growth of the online gaming industry.  </p><br>
                <p>And with the expansion of industry came a hike in expectations of people. The online gamers now want something that entertains them, gives them an adrenaline pump, and tests their skills. That’s where Mylmpix comes into the picture. <a href="https://mlympix.com/">Mlympix</a> is an advanced gaming platform that offers you games that are equally brainy and earn a chance to win money from that.</p><br><br>
                <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>     <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 " style="padding: 3%;">
                <img src="assets/img/skill-based-games-bg.webp" alt="" >

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
                <h2 style="text-align:center;">Why is Mylmpix better than other gaming platforms for you? </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/skill-based-games-about.png" alt="" >       
			</div>
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is a real money-inclusive gaming platform where multiple players can play the game at the same time. It is a digital gaming platform that aims to promote the online skilled based games among interested users, especially the sports game.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The platform is ready to expand its root at the international level. At Mlympix, users are assured that their financial information and credentials are 100% safe and secured as it is managed by a team of professionals.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Each game available on Mlympix is in multiplayer mode so that you can enjoy these games easily with your friends.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p> At Mlympix, the players have the opportunity to earn real money while enjoying top-tier games. Hence, if you are searching for online skilled based game android, then you should download the Mlympix app.</p>
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
                <p>The procedure to download the Mlympix application is confined to just three simple steps. You have to follow the below mentioned three easy steps to become a part of the Mlympix virtual world</p><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>The very first step is that you have to visit the homepage of Mylmpix's official website wherein you can easily spot the download app option. As you will click on it, a pop-up notification will appear asking for permission, just tap OK to start the installation.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>Next, you have to wait as the application gets downloaded. Note that Mlympix is compatible with any android device and currently supports android version 7.0 and above.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>Lastly, as the app is downloaded, open the settings in your phone and turn on the unknown source to complete the installation.</p>
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
                <h2 style="text-align:center;">Mlympix skilled based games online- The Gameplay </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is a one of its kind gaming platform where only thrilling and exciting games are provided to the users. The online gaming website holds the objective to spread the skill-based sports game all over India.</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is the only league-based sports game platform that works on designing games that test and polishes your pure skills in various sports. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The users can find <a href="https://mlympix.com/online-mobile-cricket-games.php">cricket games,</a> Hurdling, and archery in the sports-based category games on Mlympix. All of these games are multiplayer that can be enjoyed by at most 3-4 players. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/game-point.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The most interesting part is that with each win, players are rewarded with real cash prizes as well.</p>
            </div>
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/skill-based-games-service.png" alt="">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play online skilled based games android on Mlympix? </h2>
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
                        <img src="assets/img/skill-service-2.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Choose the game of your choice</h4><br>
                        <p style="font-size:12px;">After you have downloaded the Mylmpix app, you have to open the app and come to the home screen of the app. On the home screen, you can spot all the games that are offered by Mlympix. From amongst them, choose the one you want to play. For example: if you want to play online Cricket, you have to select it from the list featured on the home screen.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Add a sum of money to your Mlympix account </h4><br>
                        <p style="font-size:12px;">The second step includes adding the money to your Mlympix accounts. Deposit a specific amount in your wallet to initiate wagering and play the games listed on the Mlympix application. You don’t have to be concerned about the money that you have added or the amount you earn by winning games. The wallet keeps the total sum safe until you decide to take it out. However, the deduction of wager will take place whenever you lose a game.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Opt a league according to your preference</h4><br>
                        <p style="font-size:12px;">All the games on the game list of the Mlympix app have league matches that can be accessed only by wagering a certain sum of money. You have to select a league that aligns with your skillset and preferences. Play vigorously and smartly to improve your rankings, reach up the ladder and easily convert the ranks in real money by winning every single game. The paid sports games have the option of 1v1 multiplayer. The <a href="https://mlympix.com/download-board-games.php">classic board games </a> are free to play on Mlympix.</p>
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
                        <h4>Does the Mlympix app work perfectly on android?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Absolutely yes! The Mlympix app is designed specifically for android devices as of now. Currently, the app supports android version 7.0 and above.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4> What are the options for money transfer on the Mlympix app?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>The Mlympix app provides its users two money transfer options: UPI and bank account.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is my money in the Mlympix account safe?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes. The deposits and money won from matches are 100% safe in your Mlympix account. No one can access your money or use it. Only you can decide when to withdraw it.
  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can the Mlympix app be downloaded on iOS?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>No. Mylmpix can be downloaded on Android devices only.
  </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Does the Mlympix app hold league matches?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Each game on the Mylmpix app is assigned league matches. You can access these league matches only after wagering money.
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
