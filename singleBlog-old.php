<?php
$blogId = $_GET['blogId'];
switch($blogId){
case 15:
$title="Rare Facts About Suresh Raina | Mlympix";
$meta_keywords="Suresh Raina is the only player to get at least one man of the match award every season of the IPL, to get at least 350 runs in every season and score at least one fifty in every season.";
$meta_description="Suresh Raina is the only player to get at least one man of the match award every season of the IPL, to get at least 350 runs in every season and score at least one fifty in every season.";
break;
case 16:
$title="Rare Facts About Sunil Chhetri | Mlympix";
$meta_keywords="Sunil Chhetri is the first Indian footballer to score 50 international goals while playing for the national side. Now, with 72 goals, he is the highest ever goal-scorer in Indian football history.";
$meta_description="Sunil Chhetri is the first Indian footballer to score 50 international goals while playing for the national side. Now, with 72 goals, he is the highest ever goal-scorer in Indian football history.";
break;
case 17:
$title="Rare Facts About Sania Mirza | Mlympix";
$meta_keywords="Sania began her career as a singles player but switched to doubles after finding it more suitable to her game. She won her first grand slam with Mahesh Bhupathi at the Australian Open in 2009";
$meta_description="Sania began her career as a singles player but switched to doubles after finding it more suitable to her game. She won her first grand slam with Mahesh Bhupathi at the Australian Open in 2009";
break;
case 18:
$title="Fan Letter to Cristiano Ronaldo | Mlympix";
$meta_keywords="Fan letter to Cristiano Ronaldo. Punya Chowksey - The only thing that I wish from you is that I would love to see you in Manchester United once again. keep playing the game and keep giving us fans legendary memories that will never die.";
$meta_description="Fan letter to Cristiano Ronaldo. Punya Chowksey - The only thing that I wish from you is that I would love to see you in Manchester United once again. keep playing the game and keep giving us fans legendary memories that will never die.";
break;

}
    require_once('autoload.php');
	require_once __DIR__ . '/controllers/OneHandController.php';
?>

<?php
	$blogId = $_GET['blogId'];
	$oneHandController = new OneHandController();
	$oneHandControllerData = $oneHandController->fetchSingleBlog($blogId);
?>

	<section class="s-news" style="background-image:url(../assets/secondBg.webp);padding: 70px 0 !important;">
		<div class="container" style="margin-top: 1px;">
			<div class="row">
				<div class="col-12 col-lg-12 blog-cover">
					<div class="post-item-cover">
						<div class="post-header">
							<div class="post-thumbnail">
								<img src="admin/upload/<?=$oneHandControllerData->blogImagePath?>" alt="img">
							</div>
						</div>
						<div class="post-content">
							<div class="meta">
								<span class="post-by"><i class="fa fa-user" aria-hidden="true"></i><a href="#">By Admin</a></span>
								<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><?=$oneHandControllerData->createdAt;?></span>
							</div>
							<h2 class="title"><?=$oneHandControllerData->blogTitle;?></h2>
							<div class="text">
								<p style="line-height: 1.4;"><?=$oneHandControllerData->blogSubject;?></p>
							</div>
						</div>
						
					</div>
				
					<div class="autor-cover">
						<img src="assets/img/autor-img.png" alt="img">
						<div class="autor-content">
							<div class="name" style="color:#ffec0c"><?=$oneHandControllerData->blogWritter;?></div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
<link rel="stylesheet" type="text/css" href="styles/home.css">    
<link rel="stylesheet" type="text/css" href="styles/home-mobile-view.css"> 
<?php
    require_once __DIR__. '/components/footer.php';
?>
