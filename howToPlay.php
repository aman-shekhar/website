<?php
    require_once('autoload.php');
	require_once __DIR__ . '/controllers/OneHandController.php';
?>
<?php
	$oneHandController = new OneHandController();
	$oneHandControllerDataSportGames = $oneHandController->fetchAllSportGames();	
?>
<?php
	$oneHandController = new OneHandController();
	$oneHandControllerDataTraditionalGames = $oneHandController->fetchAllTraditionalGames();	
?>


<section class="s-our-programs" style="background-image: url('http://mlympix.go-viral.in/assets/img/how1.png');">
		<div class="mask"></div>
		
		<div class="container">
		    
		
		
			<!-- ============== S-OUR-GAMES ============== -->
	
	
		<section>
		<div class="container justify-content-center">
		
			
			<h2 class="title-decor">Sport <span style="color:#ffec0c">Games</span></h2><br><br>

			<div class="d-flex justify-content-around">
				    <div class="col-md-2">

					<a href="sample.pdf" target="_blank">	<img class="rx-lazy" data-src="assets/img/cricket.png" alt="img"></a>
					
				</div>
				<div class="col-md-2">
				
							<a href="sample.pdf" target="_blank"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/hurdling.png" alt="img"></a>
						
				</div>
				<div class="col-md-2">
				
							<a href="sample.pdf" target="_blank"><img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/archery.png" alt="img"></a>
					
				</div>
			</div>
		</div></section>
		<br><br><br>
		<br>
		<section>
		<div class="container justify-content-center">
			
			<h2 class="title-decor">Traditional <span style="color:#ffec0c">Games</span></h2><br><br>

			<div class="d-flex justify-content-around">
				    <div class="col-md-2 col-sm-4">

						<a href="sample.pdf" target="_blank">	<img class="rx-lazy" data-src="assets/img/chavpar.png" alt="img"></a>
					
				</div>
				<div class="col-md-2 col-sm-4">
				
						<a href="sample.pdf" target="_blank">	<img class="rx-lazy" src="assets/img/placeholder-all.png" data-src="assets/img/moksha.png" alt="img"></a>
						
				</div>
				
			</div>
		</div></section>
		<br><br>
		
		
		</div>
	</section>

<?php
    require_once __DIR__. '/components/footer.php';
?>