    <?php if(!empty($_POST["keyword"])) {
		include("../database/config.php");
		
		
		$query = $db->query("SELECT DISTINCT city FROM hotel_details WHERE city like '%" . $_POST["keyword"] . "%' ORDER BY city LIMIT 0,6");
		$num = $query->numRows();
		if($num==0){
			$query2 = $db->query("SELECT * FROM hotel_details WHERE hotel_name like '%" . $_POST["keyword"] . "%'  LIMIT 0,6");
		$res2 = $query2->fetchAll(); ?>
        <ul class="srcRes">
		<?php foreach ($res2 as $ress2) { ?>
	      <li onClick="selectCountry('<?php echo $ress2['hotel_name']; ?>');"><i class="fa fa-map-marker"></i> <?php echo $ress2['hotel_name']; ?></li>
<?php } ?>
		</ul>
			<?php } ?>
		
		
   <?php } ?>
   
