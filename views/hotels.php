<?php
$metaHeader = new metaHeader();
$menuSection = new menuSection();
$hotelContent = new hotelContent();
$mainJs = new mainJs();
?>
<!doctype html>
<html>
<head>
<?php $metaHeader->getMetaHome();
$metaHeader->layout();
 ?>

</head>

<body>
   <?php 
   $menuSection->mobileMenu();
   $menuSection->deskTopMenu();
   $hotelContent->hotelContents(); 
   $hotelContent->contentSearchSmall();
   footer();
   ?>
   
   <?php
   $mainJs->allJs();
   ?>
</body>
</html>