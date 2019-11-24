<?php $mainSrcPost = new mainSrcPost(); ?>
<section class="hot-page2-alp hot-page2-pa-sp-top all-hot-bg">
		<div class="container">
			<div class="row inner_banner inner_banner_3 bg-none">
				<div class="hot-page2-alp-tit">
					<h1>Hotel & Restaurants  </h1>
					<ul>
						<li><a href="#inner-page-title">Home</a> </li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
						<li><a href="#inner-page-title" class="bread-acti">Hotels & Restaurants</a> </li>
					</ul>
					<p>Indias's leading Hotel Booking website. </p>
				</div>
			</div>
			<div class="row">
				<div class="hot-page2-alp-con">
					<!--LEFT LISTINGS-->
					<div class="col-md-3 hot-page2-alp-con-left">

                         <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
							<h4><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Book Hotel</h4>
						<div class="hot-page2-alp-l-com1 hot-room-ava-check">
							
								<form>
									<ul>
										<li>
											<label> Your Search</label>
											<input type="text" readonly value="<?php echo $_POST['search']; ?>"> </li>
										<li>
											<label>Depart Date</label>
											<input type="date" value="<?php echo $_POST['t-start']; ?>"> </li>
										<li>
											<label>Return Date</label>
											<input type="date"  value="<?php echo $_POST['t-end']; ?>"> </li>
										
									</ul>
								</form>
							</div>
						</div>
						<!--PART 1 : LEFT LISTINGS-->
						<div class="hot-page2-alp-con-left-1">
							<h3>Suggesting Hotels</h3> </div>
						<!--PART 2 : LEFT LISTINGS-->
                        <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
							<ul>
                            <?php
							/*
							include("database/config.php"); 
				$chkhotel8 = mysqli_query($db,"SELECT * FROM hotel_details LIMIT 8");
				while($rowHotel8 = mysqli_fetch_array($chkhotel8)){
					$rooms = $rowHotel8['rooms'];
					$rt = $rowHotel8['rates'];
					$rates = number_format($rt,1);
		
					 ?>
								<!--LISTINGS-->
								<li>
									<a href="#">
										<div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img src="images/hotels/1.jpg" alt=""> </div>
										<div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
											<h5><?php echo $rowHotel8['hotel_name']; ?></h5> <span><?php echo $rowHotel8['address']; ?>, <?php echo $rowHotel8['city']; ?></span> </div>
										<div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span><?php echo $rates; ?></span> </div>
									</a>
								</li>
								<?php } */ ?>
								
							</ul>
						</div>
					</div>
					<!--END LEFT LISTINGS-->
					<!--RIGHT LISTINGS-->
					<?php $mainSrcPost->srcPost(); ?>
					<!--END RIGHT LISTINGS-->
				</div>
			</div>
		</div>
	</section>