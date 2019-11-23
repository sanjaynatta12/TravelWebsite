<?php
$metaHeader = new metaHeader();
$menuSection = new menuSection();
$mainSearchController = new mainSearchController();
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
   $mainSearchController->mainSearch();
   ?>
   
   <?php
   $mainJs->allJs();
   ?>
</body>
</html>