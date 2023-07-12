<?php
    include_once __DIR__ . '/../models/BlogModel.php';
	include_once __DIR__ . '/../models/GameModel.php';
	include_once __DIR__ . '/../models/YouTubeModel.php';
	include_once __DIR__ . '/../models/NewsletterModel.php';
	include_once __DIR__ . '/../models/ContactUsModel.php';
	include_once __DIR__ . '/../models/ReferelModel.php';
?>
<?php

class OneHandController {

	public function getYoutubeLinks(){
		$youTubeModel = new YouTubeModel();
		$youTubeModelData = $youTubeModel->getYoutubeLinks();
		if($youTubeModelData){
			return $youTubeModelData;
		} else{
			return False;
		}
	}

	public function fetchAllBlog(){
		$blogModel = new BlogModel();
		$blogModelData = $blogModel->fetchAllBlog();
		if($blogModelData){
			return $blogModelData;
		} else{
			return False;
		}
	}



	public function fetchAllSportGames(){
		$gameModel = new GameModel();
		$gameModelSportData = $gameModel->fetchAllSportGames();
		if($gameModelSportData){
			return $gameModelSportData;
		} else{
			return False;
		}
	}

	public function fetchAllTraditionalGames(){
		$gameModel = new GameModel();
		$gameModelTraditionalData = $gameModel->fetchAllTraditionalGames();
		if($gameModelTraditionalData){
			return $gameModelTraditionalData;
		} else{
			return False;
		}
	}

	public function insertNewsLetter($subscribeEmail){
		$newsletterModel = new NewsletterModel();
		$newsletterModelData = $newsletterModel->insertNewsLetter($subscribeEmail);
		if($newsletterModelData){
			return $newsletterModelData;
		} else{
			return False;
		}
	}

	public function insertContactUs($name,$email,$comments){
		$contactUsModel = new ContactUsModel();
		$contactUsModelData = $contactUsModel->insertContactUs($name,$email,$comments);
		if($contactUsModelData){
			return $contactUsModelData;
		} else{
			return False;
		}
	}

	public function fetchSingleBlog($blogId){
		$blogModel = new BlogModel();
		$blogModelData = $blogModel->fetchSingleBlog($blogId);
		if($blogModelData){
			return $blogModelData;
		} else{
			return False;
		}
	}

	public function insertReferel($referPhoneNumber,$refCode,$optionalParam){
		$referelModel = new ReferelModel();
		$referelModelData = $referelModel->insertReferel($referPhoneNumber,$refCode,$optionalParam);
		if($referelModelData){
			return $referelModelData;
		} else{
			return False;
		}
	}
  
}

?>