<?php
$title="The Sports Clan | Sports Games Online | Download MlympiX";
$meta_keywords="The sports clan is the instagram social community page for sports lovers with a mission to bring people together. The objectives of the page is to encourage people to make an attempt to participate in sports.";
$meta_description="The sports clan is the instagram social community page for sports lovers with a mission to bring people together. The objectives of the page is to encourage people to make an attempt to participate in sports.";
    require_once('autoload.php');
	require_once __DIR__ . '/controllers/OneHandController.php';
?>
<?php
$blogLinks = array('rare-facts-about-suresh-raina.php',"rare-facts-about-sunil-chhetri.php", "rare-facts-about-sania-mirza.php", "fan-letter-to-ronaldo.php","online-games-to-win-money-have-fun-and-earn-cash.php","why-you-should-try-the-best-multiplayer-games.php","top-technologies-that-revolutionized-sports-games-online.php","online-games-with-friends-a-pandemic-respite.php","play-cricket-games-online-fun-for-all-ages.php","popular-online-real-money-games-sports-edition.php","play-ludo-online-vs-offline-whats-better.php","archery-games-online-learn-what-archery-is-all-about.php","how-do-online-real-money-games-work.php","the-real-money-games-app.php","10-features-that-define-the-best-real-money-game-apps.php","start-the-year-in-style-with-these-trending-online-real-money-games.php");
?>
<?php 
	//sportsClanYoutubeLinks
	$oneHandController = new OneHandController();
	$youTubeLinksData = $oneHandController->getYoutubeLinks();
?>
<?php
	$blogController = new OneHandController();
	$blogControllerData = $blogController->fetchAllBlog();	
?>
<style type="text/css">
		#instafeed-container a img{ 
			width: 25%;
			padding:5px;
		}
</style>
	
	
	<section class="s-related-posts home-related-posts">
		<div class="container">
			<h2 class="title-decor" style="font-size: 46px;">YouTube <span style="color:#E9C412">Channel</span></h2>
			<?php //for($i=0; $i<sizeof($youTubeLinksData); $i++){ 
					foreach($youTubeLinksData as $rows){
				?>
			<div class="col-md-4 col-sm-12" style="float:left;">
			    	<iframe title="youtbeLinks" width="100%" height="415" src="<?=$rows->youTubeLinks?>"></iframe>
			</div>
			<?php }?>	
            <div style="clear:both;"></div>
	        <br><br>
			<div class="row">
					<div class="col-md-12" align="center">
						<a class="btn" href="https://www.youtube.com/channel/UCRpgv-QGt8szEytQBz60yqQ" style="background-color:#0071BB; border-color:#0071BB">View All</a>
					</div>
			</div>
		</div>
		
		

	</section>
	
	
	
	<section class="s-related-posts home-related-posts">
	    
		<div class="container">
		    <h2 class="title-decor" style="font-size: 46px;">Latest from <span style="color:#E9C412">Instagram</span></h2>
		    <div id="instafeed-container"></div>


	<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
	<script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		target: "instafeed-container",
    	resolution: 'low_resolution',
		accessToken: 'IGQVJWT1pTRk5Dc3FhRVRZAaHY4Qm5vWjR4UkVDaERBSk5XQzdfWVBRREhPcUtXaTU3eUtEbWViRzFTQ2lKODBGOVFKVGJJcVA4X0RjdFBsTFlFZAWotank2WVdfZAVRNYmlGRzdPWGxlcXhmd25QZA1RZAcQZDZD'
	});
	userFeed.run();
	</script><div id="instafeed-container"></div>



	<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
	<script type="text/javascript">
	var userFeed = new Instafeed({
		get: 'user',
		target: "instafeed-container",
    	resolution: 'low_resolution',
		accessToken: 'IGQVJWT1pTRk5Dc3FhRVRZAaHY4Qm5vWjR4UkVDaERBSk5XQzdfWVBRREhPcUtXaTU3eUtEbWViRzFTQ2lKODBGOVFKVGJJcVA4X0RjdFBsTFlFZAWotank2WVdfZAVRNYmlGRzdPWGxlcXhmd25QZA1RZAcQZDZD'
	});
	userFeed.run();
	</script>
		</div>
    </section>

	<section class="s-related-posts home-related-posts">
	    
		<div class="container">
			<h1 class="title-decor">The <span style="color:#E9C412">Clan Blog</span></h1>
			<?php 
					for($i = 0; $i<sizeof($blogControllerData); $i++){
						
			?>
			<div class="row">
					<div class="col-md-6 related-post-col">
							<div class="post-item-cover">
								<div class="post-header">
									<div class="related-post-categ" style="background-color:#0071BB; border-color:#0071BB"><?=$blogControllerData[$i]->blogHeader;?></div>
									<div class="post-thumbnail">
										<a href="<?=$blogLinks[$i]?>"><img src="admin/upload/<?=$blogControllerData[$i]->blogImagePath?>" alt="img"></a>
									</div>
								</div>
								<div class="post-content">
									<div class="meta">
										<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><?=$blogControllerData[$i]->createdAt;?></span>
									</div>
									<h3 class="title"><a href="<?=$blogLinks[$i]?>"><?=$blogControllerData[$i]->blogTitle;?></a></h3>
									<div class="text">
										
									</div>
								</div>
								<div class="post-footer">
									<div class="meta">
										<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?=$blogControllerData[$i]->blogWritter;?></a></span>
										
									</div>
									<a href="<?=$blogLinks[$i]?>" class="btn" style="background-color:#0071BB; border-color:#0071BB"><span>read more</span></a>
								</div>
							</div>
						</div>
					 <?php 
						$i++;
						if($i<sizeof($blogControllerData)){
					 ?>
						<div class="col-md-6 related-post-col">
							<div class="post-item-cover">
								<div class="post-header">
									<div class="related-post-categ" style="background-color:#0071BB; border-color:#0071BB"><?=$blogControllerData[$i]->blogHeader;?></div>
									<div class="post-thumbnail">
										<a href="<?=$blogLinks[$i]?>"><img src="admin/upload/<?=$blogControllerData[$i]->blogImagePath?>" alt="img"></a>
									</div>
								</div>
								<div class="post-content">
									<div class="meta">
										<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><?=$blogControllerData[$i]->createdAt;?></span>
									</div>
									<h3 class="title"><a href="<?=$blogLinks[$i]?>"><?=$blogControllerData[$i]->blogTitle;?></a></h3>
									<div class="text">
									
									</div>
								</div>
								<div class="post-footer">
									<div class="meta">
										<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#"><?=$blogControllerData[$i]->blogWritter;?></a></span>
										
									</div>
									<a href="<?=$blogLinks[$i]?>" class="btn" style="background-color:#0071BB; border-color:#0071BB"><span>read more</span></a>
								</div>
							</div>
						</div>
						<?php } ?>
				
			</div>
			<?php
					}
				?>
		</div>
	</section>

	<br><br>
<?php
    require_once __DIR__. '/components/footer.php';
?>
