<?php
$title="Play Snake and Ladder Online | Snakes and Ladders Game Online";
$meta_description="Play Snake and Ladder Online, Play Snakes and Ladders Game Online, Snakes and Ladders Board Game Online, Snake and Ladder Online Game With Friends, Moksha Patam Games Online.";
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
    <div class="container-fluid">
        <div class="row text-justify">
            <div class="col-xl-6 col-md-6 pt-pb" style="padding:50px;">
                <img src="assets/img/logo1.png" alt="">
                <h3><strong>The new version to play snakes and ladders game online</strong></h3><br>
                <p>Our technology has advanced in so many ways that it is now possible to virtually do most of the tasks. The enhanced use of the internet has benefitted multiple businesses and online platforms, from shopping to gaming. Not only <a href="https://mlympix.com/" style="color:#000fff;">gaming platforms </a> but there are platforms like Mlympix that provide you with an option to play snake and ladder game online. With the help of Mlympix, gaming has become more enjoyable as you can connect with your friends and enjoy <a href="https://mlympix.com/download-board-games/" style="color:#000fff;">classic games </a> and play snake and ladder online for free. </p><br><br>
                 <a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>           </div>
            <div class="col-xl-6 col-md-6 ">
                <img src="assets/img/banner-laddar-game.webp" alt="" style="width: 100%;position: absolute;right: 0px;bottom: 0px;">

            </div>
        </div>
    </div>
</section>

<section class="pt-pb" style="background-color:#FFFFFF;color:#000;">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">Why is Mlympix a better gaming platform than others?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-md-6 col-sm-12">
                <img src="assets/img/snake-games.webp" alt="" style="align:center;margin-bottom: -8px;">       
			</div>
           
            <div class="col-xl-6 col-md-6 col-sm-12 text-justify">
                <p>Mlympix is our number one platform that has multiple choices available and is extremely easy to use. There are no complex rules set here, and neither is the layout of the app complicated. Instead, we make sure that our work provides you with the exact feel of playing games like snakes and ladders board games online with zeal and enjoyment.</p>     <br>          
                <p>Apart from providing many games to play, our services allow you to win a fantastic amount of money. Some matches and round robin tournaments take place on a national level and help you make a considerable amount of money by winning. All you need to do is add some cash to the Mlympix wallet account.  </p>
            </div>
          	 
        </div>
    </div>
</section>
	
<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to download this application?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app1.png" alt="" style="align:center;">       
                        <h3>Step 1</h3><br>
                        <p>You first need to visit the Mlympix website to download the Android version of the app. When you find the download option, click on it and press OK on the pop-up open on your screen to initiate the downloading process of the app. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>Next, wait for the app to get downloaded efficiently. This process will not take much time since our platform works effectively with all Android devices.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p>Next, wait for the app to get downloaded efficiently. This process will not take much time since our platform works effectively with all Android devices.</p>
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
                <h1 style="color:#000;text-align:center;font-size:36px;">Play Snakes and Ladders Game on Mlympix - The Gameplay</h1>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row text-justify" style="color:#000;">
           <div class="col-xl-6 col-md-6 col-sm-12" >
               <p style="line-height: 36px;padding: 50px 0px;">Users can play snakes and ladders game on <a href="https://mlympix.com/" style="color:#000fff;">Mlympix</a> without paying or wagering any additional money. The Mokshapatam resembles life where a player must battle evil in the form of snakes and climb ladders which personifies the goodness in life to reach the final Salvation [Moksha] in order to win the game.</p>
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
                <h2 style="text-align:center;">How to play snakes and ladders games online?</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row py-2 text-justify" style="color:#000;">
				    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket1.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Choose the game you <br> wish to play</strong></h4>
    						</div><br>
						<span style="font-size:12px;">When you are done downloading and installing the app efficiently, open it, and you will be directed to the home page. On this page, all you need to do is search for your desired game and click on it to start playing. Take snakes and ladder board games online, for example; if you wish to play that, click on it and start.</span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket2.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Play snake and ladder <br> online for free</strong></h4>
    						</div><br>
						<span style="font-size:12px;">The <a href="https://mlympix.com/download-board-games/" style="color:#000fff;">classic board games </a> featured on the Mlympix app are completely free. Users can now play snake and ladder online with their friends with complete convenience. </span>
						</div>
				    </div>

                    <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;">
				        <div style="background-color: #ffffff;padding: 30px 30px;box-shadow: 0 0px 0px rgb(0 0 0 / 12%), 0 1px 5px rgb(0 0 0 / 24%);border: 2px #fff;border-radius: 10px;">
    				        <div style="display: flex;flex-wrap: wrap;">
    						<img src="assets/img/mobile-cricket3.png" alt="">
    						<h4 style="display: flex;justify-content: center;align-items: center;"><strong>Be a part of an <br> efficient league</strong></h4>
    						</div><br>
						<span style="font-size:12px;">On our app, there are various leagues available from which you should choose the most appropriate one. Then, based on your decisions and preferences, join a league so that you can be a part of all the great matches and competitions regarding the sport or game you choose. </span>
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
                        <h4> What games are available on this fantastic gaming platform?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>There are various games available like archery, cricket, hurdling, and many other unique board games, including snakes and ladders board games online.   </p>
                    </div>

                    <div class="accordion__header">
                        <h4>Can the games available on this platform be played with more than one person? </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, our services provide the feature of playing multiplayer games and winning real cash prizes. You can play these exciting games along with your friends at your convenience.  </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is this gaming platform available on IOS?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Currently, our platform is only available and works well on all Android services only. We are still trying to create a platform that suits IOS perfectly as well.   </p>
                    </div>

                    <div class="accordion__header">
                        <h4>  Is the cash you kept in the Mlympix wallet secured and safe?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p>Yes, the money you keep in your account of Mlympix wallet stays highly secured and can be accessed by just you. We take care and full responsibility for the high security of your cash.    </p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is it true that there are matches that take place at a national level as well?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                        <p> Yes! certain matches and round robin tournaments on a national platform that helps provide great competition and exposure.  </p>
                    </div>

                    
                </div>  
			 </div>
		</div>
    </div>
</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
