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
	<!-- <link rel="stylesheet" href="update-sunday.css"> -->
	<!-- w3 link for modal -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Animation link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Link Swiper's CSS -->
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
	session_start(); 
?>
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="logo">
					<img src="image/home-l.jpg" alt="home">
				</div>
				<div class="col-md-9 ">
					 
						<ul class="nav nav-pills p-3" id="menu">
						<li class="nav-item m-1 active"><a href="home.php" class="nav-link">Home</a></li>
						<li class="nav-item m-1 "><a href="about.php" class="nav-link">About Us</a></li>
						<li class="nav-item m-1"><a href="rent.php" class="nav-link">Rent</a></li>
						<li class="nav-item m-1"><a href="flat.php" class="nav-link">Flat</a></li>
						<li class="nav-item m-1"><a href="pg.php" class="nav-link">PG</a></li>
						<li class="nav-item m-1"><a href="#contact" class="nav-link">Contact</a></li>

				<li class="nav-item m-1"><a href="admin.php" class="nav-link"><i class="fa-solid fa-user"></i></a></li>
						<?php
						// session_start();
							error_reporting(E_ERROR | E_PARSE);

						if($_SESSION['name'])
					{
							// $iduser=$_SESSION['name'];
					echo ' <li  class="nav-item m-1"><a href="add2caert.php" class="nav-link"  style="margin-left:-32px;"><i class="fa-solid fa-cart-shopping"></i></a></li>';
					echo ' <li  class="nav-item m-1"> <a href="log-out.php" class="nav-link"style="margin-left:-13px;">logout </a></li>';

					echo "<a href='home.php'> <button type='button' class='btn btn-primary' id='btn'>".$_SESSION['name']."</button></a> ";

					}
					else {
					echo "<a href='sign-up.php'> <button type='button' class='btn btn-primary' id='btn'> Get Started</button></a> ";		
					 
					}
						?>
						 
						 <!-- <li  class="nav-item m-1"><a href="add2caert.php" class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a></li> -->
						 <!-- <a href="log-out.php"> <button type="button" class="btn btn-primary" id="btn-1">Log Out</button></a> -->
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!--- Header Section End --->
	<!--- Home Section start --->
	<section id="home">
		<div class="container-fluid"  >
			<div id="slider">
				<div id="slid">
					<div class="row" id="header1">
						<img src="image/home-banner.jpg" alt="home-banner">
						<div class="col-sm-12" id="header-text"><br><br>
							<h1 class="animate__animated animate__slideInDown animate__slower animate__repeat-1 2s" id="anim">Find
								Your Next Perfect <br> Place To live.</h1>
							<p class="animate__animated animate__slideInUp animate__slower animate__repeat-1 2s" id="anim"> We hope
								you Enjoy a Wonderful home to live in! Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit.
								Obcaecati, recusandae. Lorem ipsum dolor sit amet consectetur adipisicing<br> elit.Lorem ipsum dolor sit
								amet. </p><br>
							<button type="button"
								class="animate__animated animate__slideInUp animate__slower animate__repeat-1 2s anim btn btn-primary"
								id="btn">Learn More</button>
						</div>

					</div>

					<div class="row" id="header1">
						<img src="image/banner1.png" alt="home-banner">
						<div class="col-sm-12" id="header-text"><br><br>
							<h1 class="animate__animated animate__slideInDown animate__slower animate__repeat-1 2s" id="anim">Rady To Find 
								Your <br> Place To live..?</h1>
							<p class="animate__animated animate__slideInUp animate__slower animate__repeat-1 2s" id="anim"> We hope
								you Enjoy a Wonderful home to live in! Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit.
								Obcaecati, recusandae. Lorem ipsum dolor sit amet consectetur adipisicing<br> elit.Lorem ipsum dolor sit
								amet. </p><br><br><br>
							<button type="button"
								class="animate__animated animate__slideInUp animate__slower animate__repeat-1 2s anim btn btn-primary"
								id="btn">Learn More</button>
						</div>

					</div>

					<div class="row" id="header1">
						<img src="image/banner2.png" alt="home-banner">
						<div class="col-sm-12" id="header-text"><br><br>
							<h1 class="animate__animated animate__slideInDown animate__slower animate__repeat-1 2s" id="anim">Outside 
								Your Comfort Zone Is The <br> only Place Worth Living.</h1>
							<p class="animate__animated animate__slideInUp animate__slower animate__repeat-1 2s" id="anim"> We hope
								you Enjoy a Wonderful home to live in! Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit.
								Obcaecati, recusandae. Lorem ipsum dolor sit amet consectetur adipisicing<br> elit.Lorem ipsum dolor sit
								amet. </p><br><br><br>
							<button type="button"
								class="animate__animated animate__slideInUp animate__slower animate__repeat-1 2s anim btn btn-primary"
								id="btn">Learn More</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	 
<form method="post" action="search.php">

		<div class="container" id="locat">
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
	</form>
	</section>
	<!--- Home Section End --->
	<!--- about Section start --->
	<section id="home1">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/buld1.jpg" alt="">
				</div>
				<div class="col-md-6 mr-5">
					<h1>We Provide The Best <br> Property For You.</h1>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odio repellat aperiam similique, commodi
					voluptatum voluptates esse laudantium nihil perspiciatis. <br><br>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ea. <br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, molestiae! <br>
					<button type="button" class="btn btn-primary" id="btn" style="margin-top: 15px;">Learn More</button>
				</div>
			</div>

		</div>
	</section>




	<!--- about Section End --->

	<!--- Rent Section Start --->
	<!-- <h3>Recently Added Properties</h3> -->
<?php
				include('dbcon.php');
				$sql="SELECT * FROM `property` ORDER BY id  DESC LIMIT 15";
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
<div class="container-md property">
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
				<i class="fa-solid fa-indian-rupee-sign" style="margin-top: 3.5%;"></i> <?= $data['Price'];?> <br>
			
			
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
		
		
	<!--- Rent Section End --->
	<!--- Agent Section start --->
	<section id="agent">
		<div class="container">
			<h2>How It Work</h2>
			<div class="text1">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aperiam quas <br> qui facilis itaque amet a
				expedita aspernatur modi!
			</div>
			<div class="row" style="margin-top:25px;">
				<!-- Swiper -->
    
				<div class="swiper mySwiper container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-house-chimney"></i><br><br>
                    <b>Find Home</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-people-carry-box"></i><br><br>
                    <b>Meet Roommates</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-shield"></i><br><br>
                    <b>Make it Official</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br> <i class="fa-solid fa-user"></i><br><br>
                    <b>Make Your Dream True</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-handshake"></i><br><br>
                    <b>Start Your Membership</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br> <i class="fa-solid fa-house-chimney"></i><br><br>
                    <b>Enjoy Your New Home</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>
   
			</div>
		</div>
	</section>

	<

	<!-- Contact Section Start -->
	<section id="contact">
		<div class="container">
			<div class="text2">
				<h1> Have Question In Mind...? <br>
					Let Us Help You</h1>
	<form method="POST" id="frmContactus">

				<div class="con">
					
					<input type="email" id="mails" name="emails" placeholder="Enter Your Email">
					<span style="color:red;"class="error"id="emailerr"></span>

					<button onclick="mailus();" class="btn btn-primary submit" name="submit"  id="submit"> send</button>
					<span style="color:red;" id="msg"></span>
				</div>
				</form>
			</div>
		</div>
		


	</section>

	<!-- Contact Section End -->

	<!-- Footer Section Start -->
	<footer>
		  <div class="">
	  			 
					  <div class="row footer">
						  <div class="col-md-3 foot">
	  						<div class="f-img">
								  <img src="image/home-r.png" alt="">
							  </div>
							  <h3>About Us</h3>
							  	<p>We are a young company always looking fornew and creative ideas to help you with your products in your everyday work</p>
							  
						
						  </div>
						  <div class="col-md-3 foot">
	  						<h3>Information</h3>
							  <p>About Us</p>
							  <p>Flats</p>
							  <p>Rents</p>
							  <p>P.G.</p>
							  <p>Contact Us</p>
						  </div>
						  <div class="col-md-3 foot">
	  						<h3>Helpfull Link</h3>
							  <p>Services</p>
							  <p>Supports</p>
							  <p>Terms & Condition</p>
							  <p>Privacy Policy </p>
						  </div>
						  <div class="col-md-3 soc">
						  <h3>Contact Us</h3>
	  							<p>+712 69874456</p>
	  							<p>hrperceptconsultant@gmail.com</p>
								<p><img src="image/fb.svg" alt=""><img src="image/tweet.svg" alt=""><img src="image/insta.svg" alt=""><img src="image/google.svg" alt=""></p>
						  </div>
					  </div>
				  
		  <div class="copyrights">
		  <p>	copyrights © 2022 Home Build Your Dream. All Rights Reserved</p>

		  <p>designed by: Percept Infosystem</p>
		  </div>
	  </footer>

	  <!-- Footer Section End -->



	<!-- home.js for slider  -->
<script src="home-js.js"></script>
 
 
<!-- validation for insert button  -->
<script>
	function intrestedfunction (formid){
     
		jQuery('#form'+formid).on('submit',function(e){
		jQuery('#msg').html('');
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
	}else
	{
		$("#exampleModal").modal("show");
		// window.open('home.php');
	}
		e.preventDefault();
	  });
	
	}
	 
	  </script>
<!--  end validation add to cart   -->
		<!--validation for contact us  -->

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
 

</body>

</html>