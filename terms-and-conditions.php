<?php
$title="Terms and Conditions - MlympiX | Online Casual Gaming | MlympiX";
$meta_keywords="The use of this Platform by the Users is solely governed by these Terms as well as the Privacy Policy, and any modifications or amendments made thereto by the Company, from time to time, at its sole discretion.";
$meta_description="The use of this Platform by the Users is solely governed by these Terms as well as the Privacy Policy, and any modifications or amendments made thereto by the Company, from time to time, at its sole discretion.";
    require_once('autoload.php');
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
<link rel="stylesheet" type="text/css" href="styles/home.css">    
<link rel="stylesheet" type="text/css" href="styles/home-mobile-view.css"> 
	<section class="s-our-programs"style="background-image: url(../assets/secondBg.webp);
  background-repeat: no-repeat;">
		<div class="container privacy"  style="text-align: justify; text-justify: inter-word;">
			<h1 class="title-decor">Terms and <span style="color:#E9C412">Conditions</span></h1>
            <iframe src="TERMS_OF_USE.pdf" 
    type="application/pdf"
    frameBorder="0"
    scrolling="auto"
    height="1000px"
    width="100%"alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html" 
    full-frame="" internalinstanceid="21" 
    title="CHROME">
</iframe>
</div>
	</section>


<?php
    require_once __DIR__. '/components/footer.php';
?>
