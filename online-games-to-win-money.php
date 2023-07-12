<?php
$title="Online Games To Win Money | Online Games To Win Real Money | Mlympix";
$meta_description="Online Games To Win Money, Online Games To Win Real Money, Online Sports Games To Win Real Money, Real Cash Withdrawal Games, Real Money Games App, Download MlympixApp Now.";
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
                <h1 style="font-size:22px !important;"><strong>Mlympix: The best platform to play online games to win money  </strong></h1><br>
                <p>Online gaming is not a new thing to any gaming lover. But, at this time, it is trending among these users. Do you know the reason behind it?</p><br>
                <p>It’s the feature that allows gaming users to play online games to win real money. Yes, Mlympix offers a platform that provides a variety of online gaming and allows the users to play games and win real money.</p><br>
<p>Mlympix is a digital platform that is the only online gaming platform that offers league-based games. The features, graphics, rules, winning probability, and efficiency of this platform make it stand top in the online gaming field.</p><br><br>
<a href="thankyou-download-banner.php" onclick="window.open('https://mlympix.s3.ap-south-1.amazonaws.com/mlympix_launch.apk');" target="_self" type="submit" name="submit" class="btn" style="background-color:#E69D20 ; border-color:#E69D20 ;color:#fff;">Download Now &nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg></a>      <br><br><br>       </div>
            <div class="col-xl-6 col-md-6 " style="padding: 5%;">
                <img src="assets/img/win-real-money-bg.webp" alt="" >

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
                <h2 style="text-align:center;">Why is Mlympix better than other gaming platforms for you?  </h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-md-5 col-sm-12" style="text-align:center;">
                <img src="assets/img/win-real-money-about.webp" alt="" >       
			</div>
           
            <div class="col-xl-7 col-md-7 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix is our gaming application that allows users to play online games with the best graphics and features. We offer a variety of games in the field of sports, Olympics, and board games</p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>But, the feature that makes us different from other gaming platforms is that we help our gaming users to play online sports games to win real money. Not only sports games, but with every game, we offer real money to our users. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p><a href="https://mlympix.com/">Mlympix </a> is a platform that allows gaming lovers to play online games to win real money. Other gaming platforms are still old and do not offer real money for playing online games. We offer a multiplayer feature that increases the interest of our gaming users. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="" >       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Apart from this, we ensure that all the information of the users, who are playing online games to win money, is safe.</p>
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
                        <p>As the initial step of downloading the Mlympix application, a gaming user needs to visit the Mlympix website. Find the option to download this application. Click on Download and then click on the OK option visible on the pop-up window. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app2.png" alt="" style="align:center;">       
                        <h3>Step 2</h3><br>
                        <p>After clicking OK, the application will begin to download. In minimal time, it will get smoothly downloaded on your Android phone.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/download-app3.png" alt="" style="align:center;">       
                        <h3>Step 3</h3><br>
                        <p> Once it gets downloaded. Go to your device setting and activate the “unknown source” feature. Now, the application is successfully installed. 
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
                <h2 style="text-align:center;">Mlympix online games to win money  - The Gameplay</h2>
                <hr class="horizondal-line"><br><br>
            </div>
        </div>
        <div class="row">
           
           
            <div class="col-xl-6 col-md-6 col-12 text-justify">
            <div class="row" style="line-height: 33px;">
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Mlympix offers a wide variety of leagues to its gaming users.<br> It includes :</p><br>


                <div class="row">
                    <div class="col-xl-2 col-md-2 col-6" style="padding: 1%;">
                       <img src="assets/img/money-games-1.png" alt="">
                       <p>Cricket</p>
                    </div>
                    <div class="col-xl-2 col-md-2 col-6 ">
                    <img src="assets/img/money-games-2.png" alt="">
                       <p>Chaupar</p>
                       </div>
                       <div class="col-xl-2 col-md-2 col-6">
                       <img src="assets/img/money-games-3.png" alt="">
                       <p>snake & ladder</p>
                       </div>
                       <div class="col-xl-2 col-md-2 col-6">
                       <img src="assets/img/money-games-4.png" alt="">
                       <p>Hurdle</p>
                       </div>
                       <div class="col-xl-2 col-md-2 col-6">
                       <img src="assets/img/money-games-5.png" alt="">
                       <p>Archery</p>
                       </div>
                       <div class="col-xl-2 col-md-2 col-6 ">
                      <br>
                       <p>More...</p>
                       </div>
                   
                    
                </div>





            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>Every sport has different playing rules. Be it with cricket or Archery, a user can select a league and then start playing. </p>
            </div>
            <div class="col-xl-1 col-md-1 col-2" style="padding: 1%;">
                 <img src="assets/img/icon-currency.png" alt="">       
            </div>
            <div class="col-xl-11 col-md-11 col-10">
                <p>The rules of every game are similar as we play in the real world. A user can play these online sports games to win real money.  </p>
            </div>
           
            </div>
            </div>
          	 
            <div class="col-xl-6 col-md-6 col-sm-12" style="text-align:center;">
                <img src="assets/img/win-real-money-service.webp" alt="" style="width:65%;">       
			</div>

        </div>
    </div>
</section>


<section class="pt-pb">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12">
                <h2 style="text-align:center;">How to play online games to win real money on Mlympix? </h2>
                <hr class="horizondal-line"><br>
               
            </div>
        </div>


        <div class="row text-center">
            <div class="col-12 col-md-4" style="display: flex;flex-wrap: wrap;color:#000;">
				<div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/search-icon.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Search for the Game</h4><br>
                        <p style="font-size:12px;">The first and foremost step of playing an online game on Mlympix is to search for it. Mlympix offers a variety of sports and board games. Open the Mlympix application and search for the game which you want to play. However, on the homepage of Mlympix, a user will see all the variety of games available for them. In case you didn't find your sport, then search the game.</p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-1.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Add money to your Mlympix's Wallet   </h4><br>
                        <p style="font-size:12px;">Once you have selected the game of your choice, add money to your Mlympix wallet. However, it is necessary only in case you are playing online games to win money. Every information of our user is kept secure with us. With every win, an amount will get credited to the wallet. While on every loss, it will get deducted from the wallet. </p>
				    </div>
                </div>
			</div>
            <div class="col-12 col-md-4" style="color:#000;">
                <div class="outer-box">
                    <div class="inner-box">
                        <img src="assets/img/skill-service-3.png" alt="" style="align:center;">       
                        <h4 style="font-weight:bold;">Select a league and play effortlessly </h4><br>
                        <p style="font-size:12px;">Once you have added the amount to your Mlympix account, now you can select a league in your sport or <a href="https://mlympix.com/best-board-game-apps.php"> board game.</a> There are many leagues available for every game. A gaming user can choose it as per the budget and interest. However, they can play it on a multiplayer mode as well. The gaming will be smooth afterward.</p>
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
           <h2>Download <b style="color:#000;"> Mlympix App </b> Now</h2>
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
                        <h4>Can I install the Mlympix application on the iOS phone?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body is-active">
                        <p>Mlympix application is available only for Android phones. However, it will be available for iOS phones in the near future. 
</p>
                    </div>

                    <div class="accordion__header">
                        <h4> Is Mlympix offers real money after winning?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>Yes, every gaming user who plays online sports games to win real money actually receives the winning amount. 
</p>
                   </div>

                    <div class="accordion__header">
                        <h4> In what sports areas, Mlympix offers online games?</h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>Mlympix offers sports games in the area of cricket, hurdle, and Archery. Apart from this, there are various board games as well. 
</p>
                    </div>

                    <div class="accordion__header">
                        <h4>What are the modes in which I can transfer money to the Mlympix wallet?     </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>Any gaming user can deposit and withdraw real money from the Mlympix wallet. The modes of payment or transfer to the wallet include UPI and online bank transfers.
</p>
                    </div>

                    <div class="accordion__header">
                        <h4>Is it safe to keep money in Mlympix’s wallet?  </h4>
                        <span class="accordion__toggle"></span>
                    </div>
                    <div class="accordion__body">
                    <p>Yes, it is completely safe to deposit or withdraw from the Mlympix wallet. Mlympix ensures the security of every user’s money. 
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
