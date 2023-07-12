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
		    
		    
			<h2 class="title-decor">Sport <span style="color:#ffec0c">Games</span></h2>
			<?php 
				for($i=0; $i<sizeof($oneHandControllerDataSportGames) ; $i++) {
			?>

			<div class="row">
				<div class="col-sm-6 col-md-4 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(admin/upload/<?=$oneHandControllerDataSportGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataSportGames[$i]->gameName ; ?></h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(admin/upload/<?=$oneHandControllerDataSportGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataSportGames[$i]->gameName ; ?></h3>
								<a href="<?php echo "https://mlympix.go-viral.in/admin/upload/".$oneHandControllerDataSportGames[$i]->gamePdfLink?>" class="btn" target="_blank">More</a>
							</div>
						</div>
					</div>
				</div>
			<?php 
				$i++;
				if($i<sizeof($oneHandControllerDataSportGames)){
			?>
				<div class="col-sm-6 col-md-4 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(admin/upload/<?=$oneHandControllerDataSportGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataSportGames[$i]->gameName ; ?></h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(admin/upload/<?=$oneHandControllerDataSportGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataSportGames[$i]->gameName ; ?></h3>
								<a href="<?php echo "https://mlympix.go-viral.in/admin/upload/".$oneHandControllerDataSportGames[$i]->gamePdfLink?>" target="_blank" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
			<?php
				}
				$i++;
				if($i<sizeof($oneHandControllerDataSportGames)){
			?>
				<div class="col-sm-6 col-md-4 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(admin/upload/<?=$oneHandControllerDataSportGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataSportGames[$i]->gameName ; ?></h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(admin/upload/<?=$oneHandControllerDataSportGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataSportGames[$i]->gameName ; ?></h3>
								<a href="<?php echo "https://mlympix.go-viral.in/admin/upload/".$oneHandControllerDataSportGames[$i]->gamePdfLink?>" target="_blank" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
			<?php
				}
			?>
			</div>
			<?php
				}
			?>
			
			<br><br><br><br><br>
			<h2 class="title-decor">Traditional <span style="color:#ffec0c">Games</span></h2>
			<?php 
				for($i=0; $i<sizeof($oneHandControllerDataTraditionalGames) ; $i++) {
			?>
			<div class="row">
				<div class="col-sm-6 col-md-4 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(admin/upload/<?=$oneHandControllerDataTraditionalGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataTraditionalGames[$i]->gameName ; ?></h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(admin/upload/<?=$oneHandControllerDataTraditionalGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataTraditionalGames[$i]->gameName ; ?></h3>
								<a href="<?php echo "https://mlympix.go-viral.in/admin/upload/".$oneHandControllerDataTraditionalGames[$i]->gamePdfLink?>" target="_blank" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
			<?php 
				$i++;
				if($i<sizeof($oneHandControllerDataTraditionalGames)){
			?>
				<div class="col-sm-6 col-md-4 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(admin/upload/<?=$oneHandControllerDataTraditionalGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataTraditionalGames[$i]->gameName ; ?></h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(admin/upload/<?=$oneHandControllerDataTraditionalGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataTraditionalGames[$i]->gameName ; ?></h3>
								<a href="<?php echo "https://mlympix.go-viral.in/admin/upload/".$oneHandControllerDataTraditionalGames[$i]->gamePdfLink?>" target="_blank" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
			<?php
				}
				$i++;
				if($i<sizeof($oneHandControllerDataTraditionalGames)){
			?>
				<div class="col-sm-6 col-md-4 program-col">
					<div class="program-item">
						<div class="program-item-front" style="background-image: url(admin/upload/<?=$oneHandControllerDataTraditionalGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataTraditionalGames[$i]->gameName ; ?></h3>
							</div>
						</div>
						<div class="program-item-back" style="background-image: url(admin/upload/<?=$oneHandControllerDataTraditionalGames[$i]->gameImage ;?>);">
							<div class="program-item-inner">
								<h3><?=$oneHandControllerDataTraditionalGames[$i]->gameName ; ?></h3>
								<a href="<?php echo "https://mlympix.go-viral.in/admin/upload/".$oneHandControllerDataTraditionalGames[$i]->gamePdfLink?>" target="_blank" class="btn">More</a>
							</div>
						</div>
					</div>
				</div>
			<?php
				}
			?>
				
			</div>

			<?php
				}
			?>

		</div>
	</section>

<?php
    require_once __DIR__. '/components/footer.php';
?>