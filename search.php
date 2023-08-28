<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Build Your Dream</title>
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>

	<!--  CSS LINK -->
	<link rel="stylesheet" href="style.css">
	<!-- w3 link for modal -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Animation link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
	<!-- mail links -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<style>
		.error {
			color: #FF0000;
		}
	</style>
</head>
<!-- Slider  -->
<script src="jquery/jquery.js" type="text/javascript"></script>
<script src="jquery/jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#slid').cycle('fade')
	})
</script>
<!-- Link JS FIle -->

<body>

	<!--- Header Section Start --->
 <?php
 include('header.php');
 ?>
	<!--- Header Section End --->
	<!--- Home Section start --->

	
	<section class="section"   style="margin-bottom: 147px;">  
			<img src="images/build-banner.jpg" alt="">
					<div class="baner-text">
						<h1>Properties In Nagpur</h1>
						<div class="search-cover" style="padding: 0;">
	<form method="post" action="search.php">
	<div class="container" id="locat-p">
			<div class="col-md-12">
				<div class="row" id="locat1">
					
					<div class="col-md-3" id="list">
						<input type="text" list="area" placeholder="Location" name="Address">
					<span class="error" id="adderr"> </span>

					</div>

					<div class="col-md-3" id="list">
						<input type="text" list="Property" placeholder="Property Type" name="Type">
					<span class="error" id="typeerr"> </span>

					</div>

					<div class="col-md-3" id="list">
						<input type="text" list="price" placeholder="Min Price From ₹" name="minprice">
					<span class="error" id="minpriceerr"> </span>

					</div>

					<div class="col-md-3" id="list">
						<input type="text" list="price" placeholder="Max Price To ₹" name="maxprice">
					<span class="error" id="maxppriceerr"> </span>

					</div>
					<div class="col-md-3">
						
					 <button type="submit" class="btn btn-primary" placeholder="Serach" name="search" id="btn"> search</button>
					</div>
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Sign Up Your Email Id</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<a href=""> Register.html</a>
					</div>
					</div>
				</div> 
				</div>	
					
				</div>
			</div>

		</div>
		</form>
		</div>

		</div>
				</section>
				 
	<!--- Home Section End --->
	<!--- property display Section Start --->
	<div class="se-box" style="margin-top:114px;">
	<?php

	include('dbcon.php');
	if (isset($_POST['search'])) 
	{
		$errorcount = 0;
		$add = $_POST['Address'];
		if($add)
		{
			$add="%".$add."%";
		}
		else if(empty($add))
		{
			$add="";
			$errorcount = 1;
		}
		$type = $_POST['Type'];
		if($type){

			$type="%".$type."%";
		}
		else if( ($errorcount==1) && (empty($type)))
		{
			$type="%".$type."%";
			$errorcount = 2;
		}else if (empty($type))
		{
			$type="";
		}
		$minprice = $_POST['minprice'];
		if (empty($minprice)) 
		{
			$minprice ="''";
		}
		$maxprice = $_POST['maxprice'];
		if (empty($maxprice))
		{
			$maxprice ="''";
		}
	 
		$a = "SELECT * FROM property where Address like '".$add."' or Type like '".$type."' or (`Price` >=$minprice && `Price` <=$maxprice)";
		echo $a;
		
		// $b = "SELECT * FROM property where Address like '".$add."' or Type like '".$type."' and (`Price` >=$minprice && `Price` <=$maxprice)";
		// echo $b;
	
	// if ((empty($maxprice)) &&  (empty($minPrice))) 
	// {
	// 	$run=mysqli_query($con,$a);
	// }
	// if ( (!empty($maxprice)) &&  (!empty($minPrice)) ) {
	// 	$run=mysqli_query($con,$b);

		 
	// }
	$run=mysqli_query($con,$a);
			if (mysqli_num_rows($run)>0) 
			{
				
				 
				// if($data1 = mysqli_fetch_assoc($run)) 
				// {

				$count = 0;

				while ($data = mysqli_fetch_assoc($run)) 
				{
					
					$count++;
					$pid = $data['id'];

				?>
					<section id="rent">
						<div class="container-md property"  >
							<div class="w3-row prop">
								<div class="w3-col-lg-3 prop-img">

									<!-- this is image  -->
									<?php
									$res = $data['Image'];
									$display = explode(",", $res);
									$j = count($display);

									?>

					<img src="images/<?= $display[0] ?>" style="width:100%;cursor:pointer" onclick="openModal(<?php echo $count; ?>);currentDiv(1,<?php echo $count; ?>)" class="w3-hover-shadow" />
								</div>


					<div class="col-lg-6  prop-text">
									<!-- this is address box -->
									<!-- <h5> </h5> -->
									<p> <a href="#"><i class="fa-solid fa-location-arrow"></i></a><big><?= $data['Description']; ?></big><?= $data['Address']; ?></p>

								<!-- close address box  -->
					<div class="prop-block">
							<div class="prop-block1">
									<div class=" col-md-4 prop-area">
										<i class="fa-regular fa-square"></i><span>Dimension</span> <br>
											<big style="margin-left: 35px;"><?= $data['Dimension']; ?></big>
										</div>
										<div class="col-md-4 prop-stat">
												<i class="fa-solid fa-building"></i><span>Furnished </span> <br>
												<big style="padding-left: 15px; max-width:100% ;font-size: 0.7em;"><?= $data['Furnished']; ?></big>
											</div>
											<div class="col-md-4 prop-trans">
												<i class="fa-solid fa-house-chimney"></i><span>Property Type </span> <br>
												<big style="margin-left: 37px;font-size: 0.7em;"><?= $data['Type']; ?></big>
											</div>
										</div>
									</div>
									<div class="prop-add ">
										<i class="fa-solid fa-house-chimney"></i></i><?= $data['Description']; ?> <br>								</div>
								</div>
								<div class="col-lg-3  prop-rate">

									<br>
									<!-- prize box -->
									<i class="fa-solid fa-indian-rupee-sign" style="margin-top: 3.5%;"></i> <?= $data['Price']; ?> <br><br>

									<form id="form<?php echo $pid;?>" method="post">
								<button type="submit" class="btn-rs" onclick="intrestedfunction(<?php echo $pid;?>);"style="text-decoration: none;" id="btn-r.<?php echo $pid;?>">
								INTRESTED
								</button>
								</form>
									<br>
								 
									<form id="cart<?php echo $pid;?>" method="post"><button type="submit" class="btn-rs" onclick="addtocartfunction(<?php echo $pid;?>);" style="text-decoration: none;" id="btn-a.<?php 
										echo $pid;?>">Add To Cart</button></form>
															
								</div>
							</div>
						 

							<!-- start modal Section -->


							<div id="myModal<?php echo $count; ?>" class="w3-modal w3-white myModal">
								<span class="w3-text-white w3-xlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeModal(<?php echo $count; ?>)" style="cursor:pointer">×</span>
								<div class="w3-modal-content" style="margin-bottom:5px ;">

								<div class="w3-content" style="max-width:1000px">
										<?php
										$res = $data['Image'];
										$display = explode(",", $res);
										?> <?php
						$j = count($display);
						//  echo $j;
						for ($x = 0; $x < $j - 1; $x++) {
						?>
											<img class="mySlides<?php echo $count; ?>" src="images/<?= $display[$x] ?>" style="width:100%;height: 350px;">

										<?php
									}
										?>

										<div class="w3-row w3-black w3-center">
											<div class="w3-display-container">
												<p id="caption"></p>
												<span class="w3-display-left w3-btn" onclick="plusDivs(-1,<?php echo $count; ?>)">❮</span>
												<span class="w3-display-right w3-btn" onclick="plusDivs(1,<?php echo $count; ?>)">❯</span>
											</div>
											<?php for ($x = 0; $x < $j - 1; $x++) {
											?>
												<div class="w3-col s1">

													<img class="demo w3-opacity w3-hover-opacity-off" src="images/<?= $display[$x] ?>" style="width:70px;height: 70px;" onclick="currentDiv(<?php echo $x + 1; ?>,<?php echo $count; ?>)">

												</div>
											<?php
											}
											?>


										</div> <!-- End w3-content -->

									</div> <!-- End modal content -->
								</div> <!-- End modal -->

								<!-- ====== End Modal Section=====-->
					</section>
				<?php
				}	// while loop close
				
		
			
		}else{

			echo "no record found";


		}     // query run close 
			
		


		// validatuion start


		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		 
		if ($errorcount == 0) {
			// display();
		} else if ($errorcount ==2) {

			# code...
		?>

			<script>
				//  window.open("home.php");
				alert('you have entered empty filed ')
				// $("#exampleModal").modal("show");
				window.open('search.php');
			</script>
	<?php

			// include('propertyf.php');
		}

	}


	?>
</div>

	<!-- Flat Section End --
	 Contact Section Start -->
	<section id="contact">
		<form method="POST" id="frmContactus">
			<div class="container">
				<div class="text2">
					<h1> Have Question In Mind...? <br>
						Let Us Help You</h1>

					<div class="con">

						<input type="email" name="email" placeholder="Enter Your Email">
						<button type="submit" class="btn btn-primary submit" id="submit">Send</button>

					</div>

				</div>
			</div>
		</form>
		<!-- Footer Section Start -->
		<footer>
		<?php
		include('footer.php');
		?>
		</footer>

		<!-- Footer Section End -->
		<script>
			jQuery('#frmContactus').on('submit', function(e) {
				jQuery('#msg').html('');
				jQuery('#submit').html('Please wait');
				jQuery('#submit').attr('disabled', true);
				jQuery.ajax({
					url: 'contactus.php',
					type: 'post',
					data: jQuery('#frmContactus').serialize(),
					success: function(result) {
						jQuery('#msg').html(result);
						jQuery('#submit').html('done');
						jQuery('#submit').attr('disabled', false);
						alert('sendsuccesfully');
						jQuery('#frmContactus')[0].reset();
					}
				});
				// alert('hi im mail');
				e.preventDefault();
			});
		</script>
	</section>

	<!-- Contact Section End -->
	<!-- home.js for slider  -->
	<script src="home-js.js"></script>
	  
<!-- validation for insert button  -->
<script>
	function intrestedfunction (formid){
     
		jQuery('#form'+formid).on('submit',function(e){
		// jQuery('#msg').html('');
		jQuery('#btn.r'+formid).html('Please wait');
		jQuery('#btn.r'+formid).attr('disabled',true);
		var sessName = '<?php echo $_SESSION['name']?>';
		 
			if(sessName)
			{
		
			jQuery.ajax({
			url:'intrestedinfo.php?pid='+formid,
			type:'POST',
			data:jQuery('#form'+formid).serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#btn.r'+formid).html('done');
				jQuery('#btn.r'+formid).attr('disabled',true);
	 			// alert('sendsuccesfully');
				jQuery('#form'+formid)[0].reset();
			}
		});
		// alert('hi im mail');
	}else
	{
		$("#exampleModal").modal("show");	
		// alert('plz login');
	}
		e.preventDefault();
	  });
	
	}
	 
	  </script>
<!--  end validation  -->

<!-- validation for add to cart button  -->
<script>
	function addtocartfunction (cartid){

		jQuery('#cart'+cartid).on('submit',function(e){
		// jQuery('#msg').html('');
		jQuery('#btn.a'+cartid).html('Please wait');
		jQuery('#btn.a'+cartid).attr('disabled',true);
		var sessName = '<?php echo $_SESSION['name']?>';
		// console.log(sessName);
			if(sessName)
			{
		
		jQuery.ajax({
			url:'add2caert.php?pid='+cartid,
			type:'post',
			data:jQuery('#cart'+cartid).serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#btn.a'+cartid).html('done');
				jQuery('#btn.a'+cartid).attr('disabled',true);
	 
				alert('added');
				jQuery('#cart'+cartid)[0].reset();
			}
		});
		// alert('hi im mail');
	}else{
		$("#exampleModal").modal("show");
	}
		e.preventDefault();
	  });
	
	}
	 
	  </script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>