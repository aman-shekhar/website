	<style>

	   .footer-mobile{
    display:none;

}
#footer a
{
	color:#fff !important;
}

	    @media only screen and (max-width: 600px) {

.footer-mobile{
    display:block;
}
}





	</style>

<!-- ================== FOOTER ================== -->
<footer id="footer">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-sm-6 col-lg-3 footer-item-logo">
					<a href="index.php" class="logo-footer"><img src="assets/img/logo1.png" alt="logo" style="width:100%"></a>
					<ul class="social-list">
					    <li><a target="_blank" href="https://wa.link/u9jn3i"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/Mlympix"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/mlympix"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/channel/UCK2m4Cx-wzV6SCC9o-0q72w"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/mlympix"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>


				<div class="col-sm-6 col-lg-3 footer-item">
					<h3>Quick Links</h3>
					<ul class="footer-blog">
						<li><a href="about.php">About Us</a></li>
						<li><a href="the-sports-clan.php">The Sports Clan</a></li>

						<li><a href="contact-us.php">Contact Us</a></li>
					</ul>
				</div>
					<div class="col-sm-6 col-lg-3 footer-item footer-item-list">
					<h3>More Links</h3>
					<ul class="footer-blog">
								<li><a href="privacy-policy.php">Privacy Policy</a></li>
					<li><a href="terms-and-conditions.php">Terms &amp; Conditions</a></li>
					<li><a href="disclaimer.php">Disclaimer</a></li>

					</ul>
				</div>
				<div class="col-sm-6 col-lg-3 footer-item footer-address">
					<h3>Get in Touch!</h3>
					<ul class="footer-cont">
						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+919680665669">+91 96806 65669</a></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:support@mlympix.com">support@mlympix.com</a></li>
						<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="contact-us.php">14, MNR Pride, Old Hal Airport Road, Domlur, Bangalore - 560071</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="copyright" style="text-align: center;"><a href="index.php" target="_blank">Mlympix</a> © 2021 All Rights Reserved.</div>

			</div>
		</div>
	</footer>
	<!-- ================ FOOTER END ================ -->


	<!--================= TO TOP END =================-->

	<!---- FIX FOOTER FOR MOBILE --->

		<!-- <div class="footer-mobile">
	    <div class="footer-fixed bottomManu" style="position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #1B1C31;
   z-index:10;
   color: white;
   text-align: center;display: none;">

	     <div style="padding:6px;background-color:#1B1C31;">
	     <form method="post" class="subscribe-form">
				 <button class="download-app" id="Ctabtn_footer" type="button" name="dwnldapp_test" onclick="checkAndroidAndDownload1()" style="margin: auto;width: 300px;padding-left:89px;">DOWNLOAD APP</button>

				</form>


	    </div>
	</div>
</div> -->
	<!---- FIX FOOTER FOR MOBILE --->

<script type="text/javascript">
	function checkAndroidAndDownload1(){
		var userAgent = navigator.userAgent.toLowerCase();
		var Android = userAgent.indexOf("android") > -1;
		if(Android) {
			//getDownloadLink();
			location.href='https://mlympix.com/thankyou-download-footer.php';
			//document.getElementById('howtoinstall').focus();
		}
		else {
			alert('IOS app coming soon !!!')
		}
	}
</script>

	<!--=================== SCRIPT	===================-->
	<script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/rx-lazy.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/scripts.js"></script>

</body>
</html>
