<?php

class controllers extends homeBestHotels{
	   function topHetelsHome(){
		   include("views/contents/topHotelContent.php");
		   }
	
	}
class packageHome extends packageHomeModel{
	function topPackageHome(){
		   include("views/contents/topPackageContent.php");
		   }
	
	}
class ComplpackageHome extends complpackageHomeModel{
	function completedPackages(){
		   include("views/contents/complPackageContent.php");
		   }
	
	}

?>