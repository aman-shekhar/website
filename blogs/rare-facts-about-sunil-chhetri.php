<?php
$title="Rare Facts About Sunil Chhetri | Mlympix";
$meta_keywords="Sunil Chhetri is the first Indian footballer to score 50 international goals while playing for the national side. Now, with 72 goals, he is the highest ever goal-scorer in Indian football history.";
$meta_description="Sunil Chhetri is the first Indian footballer to score 50 international goals while playing for the national side. Now, with 72 goals, he is the highest ever goal-scorer in Indian football history.";

    require_once('autoload.php');
	require_once __DIR__ . '/controllers/OneHandController.php';
?>

<?php
	$blogId = 16;
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