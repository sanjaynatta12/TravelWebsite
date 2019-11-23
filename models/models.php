<?php
//include("controllers/controllers.php");
class metaHeader{
	public function getMetaHome(){
		include("database/config.php");
		if(!isset($_REQUEST['page'])){
	      $page_id = "home";
		}
		if(isset($_REQUEST['page'])){
	$page = $_REQUEST['page'];
	switch ($page){
		case "index":
		$page_id = "home";
		break;
		case "about-us":
		$page_id = "about-us";
		break;
		case "hotels":
		$page_id = "hotels";
		break;
		case "hotel-details":
		$page_id = "hotel-details";
		break;
		case "hotelSearch":
		$page_id = "hotelSearch";
		break;
		case "packages":
		$page_id = "packages";
		break;
	}
		}
		$sql = $db->query("SELECT * FROM page_setup WHERE page_id='$page_id'");
	$rows = $sql->fetchArray(); 
		include("views/contents/metaContectHome.php");
		}
		
		public function layout(){
			include("views/contents/layout.php");
			}
	}
	
	class mainJs{
	function allJs(){
		include("views/contents/js.php");
		}
}

?>