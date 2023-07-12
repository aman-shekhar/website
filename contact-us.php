<?php
$title="Contact us - MlympiX | Online Cricket Gaming";
$meta_keywords="An online multi-player mobile cricket gaming platform. Get in Touch! support@mlympix.com, MlympiX - 14, MNR Pride, Old Hal Airport Road, Domlur, Bangalore - 560071, +91 96806 65669";
$meta_description="An online multi-player mobile cricket gaming platform. Get in Touch! support@mlympix.com, MlympiX - 14, MNR Pride, Old Hal Airport Road, Domlur, Bangalore - 560071, +91 96806 65669";
    require_once('autoload.php');
	require_once __DIR__ . '/controllers/OneHandController.php';
?>

<?php
	if(isset($_POST['submit'])){
		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$email = isset($_POST['email']) ? $_POST['email'] : '';
		$comments = isset($_POST['comments']) ? $_POST['comments'] : '';
		$oneHandController = new OneHandController();
		$oneHandControllerData = $oneHandController->insertContactUs($name,$email,$comments);
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

<style>
    
    .center {
        display: flex;
  justify-content: center;
  align-items: center;
    }
</style>	

	<!-- ================ S-CONTACTS ================ -->
	<section class="s-contacts"style="background-image: url(../assets/bg2.webp);
  background-repeat: no-repeat;">
		<div class="container">
			<h1 class="title-decor">Contact <span style="color:#E9C412">Us</span></h1>
			<p class="slogan"></p>
			<div class="row">
				<div class="col-md-5 col-lg-4 justify-content-center">
					
					<div class="contact-item" style="padding:20px;">
						<div class="contact-item-left">
							<img src="assets/img/icon-2.svg" alt="img">
							<h5>question</h5>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li><a href="mailto:team@gmail.com">support @mlympix.com</a></li>
							
							</ul>
						</div>
					</div>
					<div class="contact-item" style="padding:30px;">
						<div class="contact-item-left">
							<img src="assets/img/icon-3.svg" alt="img">
							<h5>address</h5>
						</div>
						<div class="contact-item-right">
							<ul class="contact-item-list">
								<li>14, MNR Pride, Old Hal Airport Road, Domlur, Bangalore - 560071</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-lg-8">
					<form method="post">
						<ul class="form-cover">
							<li class="inp-name">
								<label>Name * (required)</label>
								<input id="name" type="text" name="name" style="border-bottom-color: #E9C412;" required>
							</li>
							<li class="inp-email">
								<label>E-mail * (required)</label>
								<input id="email" type="email" name="email" style="border-bottom-color: #E9C412;" required>
							</li>
							<li class="inp-text">
								<label>Message * (required)</label>
								<textarea id="comments" name="comments" style="border-bottom-color: #E9C412;" required></textarea>
							</li>
						</ul>
						<div class="btn-form-cover" style="text-align: center;">
							<button type="submit" name="submit" class="btn" style="background-color:#0071BB; border-color:#0071BB">send message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== S-CONTACTS-END ============== -->
	<link rel="stylesheet" type="text/css" href="styles/home.css">    
<link rel="stylesheet" type="text/css" href="styles/home-mobile-view.css"> 
<?php
    require_once __DIR__. '/components/footer.php';
?>
