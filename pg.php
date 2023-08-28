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
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<body>
	<!-- loader section Start -->
	<!-- <div class="container" id="preloader">
      
    </div>
     -->
	<!-- Loader Section End -->
	<!--- Header Section Start --->
 <?php
 include('header.php');
 ?>
	 
	<!--- Header Section End --->
	<!--- Home Section start --->
	<section class="section">
			<img src="images/build-banner.jpg" alt="">
					<div class="baner-text">
						<h1>Properties To Rent In Nagpur</h1>
	
<div class="search-cover form">
	<div class="container" id="locat-p">
	<form action="search.php" method="POST">
					<div class="col-md-12">
					
				<div class="row" id="locat1">
					<div class="col-md-3" id="list">
						<input type="text" list="area" placeholder="Location" name="Address">
					</div>

					<div class="col-md-3" id="list">
						<input type="text" list="Property" placeholder="Property Type" name="Type">
					</div>

					<div class="col-md-3" id="list">
						<input type="text" list="price" placeholder="Min Price From ₹" name="minprice">
					</div>

					<div class="col-md-3" id="list">
						<input type="text" list="price" placeholder="Max Price To ₹" name="maxprice">
					</div>
					<div class="col-md-3">
						
					<a href="search.php"><button type="submit" class="btn btn-primary" placeholder="search"  name="search" id="btn"> search	</button> </a>
					</div>
				</div>
 			</div>			
		</div>
	</div>
			</div>
	</form>
				</section>	
	<!--- Home Section End --->


	<!--- Rent Section Start --->
<div class="container-fluid" style="margin-top:150px;">
	<?php
				include('dbcon.php');
				$sql="SELECT * FROM `property`  WHERE `Type`='Rent' " ;
				 $run=mysqli_query($con,$sql);
				if(mysqli_num_rows($run)>0)
				{
			// $datas = mysqli_fetch_array($run);

			// foreach ($run as $row )
					$count=0;
				 while($data=mysqli_fetch_assoc($run))
				 {
					 
				$count++;
				$pid=$data['id'];

?>
	<section id="rent">
		<div class="container-md property" >
		<div class="w3-row prop">
				<div class="w3-col-lg-3 prop-img">
					 
				 <!-- this is image  -->
						<?php
						$res=$data['Image'];
						$display= explode(",", $res);
					$j=count($display);

					?> 
					 
				  <img  src="images/<?= $display[0]?>" style="width:100%;cursor:pointer"onclick="openModal(<?php echo $count;?>);currentDiv(1,<?php echo $count;?>)" class="w3-hover-shadow"/>		 					 							 	 
				</div>
				 
		 
				<div class="col-lg-6  prop-text">
					<!-- this is address box -->
					<!-- <h5> </h5> -->
					<p> <a href="#"><i class="fa-solid fa-location-arrow"></i></a><big><?= $data['Description'];?></big><?= $data['Address'];?></p>
						 
					 <!-- close address box  -->
				<div class="prop-block">
					<div class="prop-block1">
						<div class=" col-md-4 prop-area">
							<i class="fa-regular fa-square"></i><span>Dimension</span> <br>
							<big style="margin-left: 35px;"><?= $data['Dimension'];?></big>
						</div>
						<div class="col-md-4 prop-stat">
							<i class="fa-solid fa-building"></i><span>Furnished </span> <br>
							<big style="padding-left: 15px; max-width:100% ;font-size: 0.7em;"><?= $data['Furnished'];?></big>
						</div>
						<div class="col-md-4 prop-trans">
							<i class="fa-solid fa-house-chimney"></i><span>Property Type </span> <br>
							<big style="margin-left: 37px;font-size: 0.7em;"><?= $data['Type'];?></big>
						</div>
						
					</div>

				</div>
				<div class="prop-add ">
							<i class="fa-solid fa-house-chimney"></i></i><?= $data['Description'];?> <br>
							<!-- <span style="margin-left: 37px;font-size: 0.7em;"></span> -->
						</div>
			</div>
			<div class="col-lg-3  prop-rate">
				  
				<br>
				<!-- prize box -->
				<i class="fa-solid fa-indian-rupee-sign" style="margin-top: 3.5%;"></i> <?= $data['Price'];?> <br><br>
			
				<form id="form<?php echo $pid;?>" method="post">
			<button type="submit" class="btn-rs" onclick="intrestedfunction(<?php echo $pid;?>);"style="text-decoration: none;" id="btn-r.<?php echo $pid;?>">
			INTRESTED
			</button>
			</form>
				<br>
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

				<form id="cart<?php echo $pid;?>" method="post"><button type="submit" class="btn-rs" onclick="addtocartfunction(<?php echo $pid;?>);" style="text-decoration: none;" id="btn-a.<?php 
				echo $pid;?>">Add To Cart</button></form>
			 
			</div>
		</div>
		<!-- <br> -->
		
				<!-- start modal Section -->
				
					   
					  
				<div id="myModal<?php echo $count;?>" class="w3-modal w3-white myModal">
                    <span class="w3-text-white w3-xlarge w3-hover-text-grey w3-container w3-display-topright" onclick="closeModal(<?php echo $count;?>)" style="cursor:pointer">×</span>
                    <div class="w3-modal-content" style="margin-bottom:5px ;">
                   
                     <div class="w3-content" style="max-width:1000px">
					 <?php
				 $res=$data['Image'];
				 $display= explode(",", $res);
					?> <?php
					$j=count($display);
			      //  echo $j;
					   for ($x = 0; $x <$j-1; $x++) 
					   {
						?>
				   <img class="mySlides<?php echo $count;?>"  src="images/<?= $display[$x]?>" style="width:100%;height: 350px;">

				   <?php	 					 
					   }
					   ?>
					                     
                      <div class="w3-row w3-black w3-center">
                       <div class="w3-display-container">
                        <p id="caption"></p>
                        <span class="w3-display-left w3-btn" onclick="plusDivs(-1,<?php echo $count;?>)">❮</span>
                        <span class="w3-display-right w3-btn" onclick="plusDivs(1,<?php echo $count;?>)">❯</span>
                       </div>
					   <?php  for ($x = 0; $x<$j-1; $x++) {
					   
		   					   ?>
                       <div class="w3-col s1">
					 
                        <img class="demo w3-opacity w3-hover-opacity-off" src="images/<?= $display[$x]?>" style="width:70px;height: 70px;" onclick="currentDiv(<?php echo $x+1; ?>,<?php echo $count;?>)" >
                      
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
		}

		}
		?>
</div>	
	<!-- Rent Section End -->
		<!-- Contact Section Start -->
	<section id="contact">
	<form method="POST" id="frmContactus">
		<div class="container">
			<div class="text2">
				<h1> Have Question In Mind...? <br>
					Let Us Help You</h1>

				<div class="con">
				<input type="email" id="mails" name="emails" placeholder="Enter Your Email">
					<span style="color:red;"class="error"id="emailerr"></span>

					<button onclick="mailus();" class="btn btn-primary submit" name="submit"  id="submit"> send</button>
					<span style="color:red;" id="msg"></span>
				</div>
			
			</div>
		</div>
		</form>
	</section>

	<!-- Contact Section End -->
		<!-- Footer Section Start -->
		<?php
		include('footer.php');
		?>
	 <!-- Footer Section End -->

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
	}else{
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
				// jQuery('#msg').html(result);
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
<!--  end validation add to cart   -->

<!-- validtion for email -->

<script>

 var check=0;
function mailus()

	{	
		if (check==0) {
			
		jQuery('#frmContactus').on('submit',function(e){
	 
		 var email=document.getElementById("mails").value;
		 	 
		 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
         if(!email)
         {
			 
            document.getElementById("emailerr").innerHTML="Email is required";
		 
         }else if(email.match(mailformat))
			{
			jQuery('#msg').html('');
			jQuery('#submit').html('Please wait');
			jQuery('#submit').attr('disabled',true);
		
			jQuery.ajax({
				url:'contactus.php',
				type:'post',
				data:jQuery('#frmContactus').serialize(),
					success:function(result){ 
					jQuery('#msg').html(result);
					jQuery('#submit').html('send');
					jQuery('#submit').attr('disabled',false);
					//  alert('sendsuccesfully');
					document.getElementById("emailerr").innerHTML="";
			   		jQuery('#frmContactus')[0].reset();
					
				}
			});
			 
			} else{
				document.getElementById("emailerr").innerHTML="Email is inavalid";
				 
			}
		 
				e.preventDefault();
			});

	
		}
		check++;
	}
    // end for contact us 
	 
	  </script>

<!-- end validtion for email -->


</body>

</html>	