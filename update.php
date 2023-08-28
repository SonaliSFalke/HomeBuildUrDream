<!-- <?php
	// session_start();

	// 			if(	$_SESSION['uid'])
	// 			{
	// 			echo "";
				
	// 			}
	// 			else
	// 			{
				
	// 			header("Location:adminn.php");
	// 			}
	?>    -->
   
   
   <!DOCTYPE html>
    <html lang="en">

    <head>
    	<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>admin</title>
    	<link rel="stylesheet" href="bootstrap/bootstrap.css">
    	<link rel="stylesheet" href="style.css">
    	<!-- Font Awesome Icon Link -->
    	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
    </head>

    <body style="background-image:url('image/action-bg.jpg'); background-repeat:no-repeat;background-size:cover;">
     
    	<!-- Update section start -->
        <form method="POST" action="" >

    	<div class="container update">
    		<h1>Edit/Update Property Details</h1>
    
    		<div class="container-fluid" id="locat" style="background:white;">
    			<div class="col-md-12">
    				<div class="row" id="locat1">
    					<div class="col-md-3" id="list">


    						<input type="text" name="Address" list="area" placeholder="Location">
    					</div>

    					<div class="col-md-4" id="list">


    						<input type="text" name="Type" list="Property" placeholder="Property Type">
    					</div>

    					<div class="col-md-3" id="list">

    						<input type="text" name="Price" list="price" placeholder="Price">
    					</div>
    					<div class="col-md-3 search">
    						<button type="submit" name="submit" class="btn" id="con">Search</button>
    						<!-- <button type="submit" name="submit" class="btn" id="con">Search</button> -->

    					</div>

    				</div>
    			</div>

    		</div>

    	</div>
</form>

        <?php
         include('dbcon.php');
         if(isset($_POST['submit']))
         {
             include('dbcon.php');
                     $Address=$_POST['Address'];
                     $Type=$_POST['Type'];                  
                     $Price =$_POST['Price'];
              
					 $sql="SELECT * FROM `property` where  Address LIKE'%$Address%' or Type LIKE '%$Type%' or Price LIKE '%$Price%';";
              $run=mysqli_query($con,$sql);
                  
              if(mysqli_num_rows($run)<1)
              {
                 echo"<script>alert('No PROPERTY found');</script>";		
              }
              else
              {
                      $count=0;
                      while($data=mysqli_fetch_assoc($run))
                      {
						 $count++;         
        ?>
 
			<div class="container-md property" style="margin:1% 2% 1% 5%; width:90% ;background-color: white;">
			<!-- <div class="container ad-prop"> -->
			<div class="row">

				<!-- <div class="w3-row prop"> -->
											<div class="w3-col-lg-3 prop-img">
											<?php
													$res=$data['Image'];
													$display= explode(",", $res);
												?> 
											<!-- <img src="image/home-banner.jpg" alt="home" class="gallery-item"> -->
											<img src="images/<?= $display[0]?>" class="gallery-item"/>		 					 							 	 
												
											<!-- <img  src="images/flat2.jpg" style="width:100%;cursor:pointer"  class="w3-hover-shadow"/>		 					 							 	  -->
											</div>
											
									
											<div class="col-lg-6  prop-text" style="margin-top:0px;">
												<!-- this is address box -->
												<!-- <h5> </h5> -->
												<p><i class="fa-solid fa-location-pin"></i><big>3<?= $data['Description'];?></big> <?= $data['Address'];?>.</p>

												<!-- <p> <a href="#"><i class="fa-solid fa-location-arrow"></i></a> </p> -->
													
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
														<i class="fa-solid fa-house-chimney"></i></i><span>Property Type </span> <br>
														<big style="margin-left: 37px;font-size: 0.7em;"><?= $data['Type'];?></big>
													</div>
													
												</div>

											</div>
											<div class="prop-add ">
														<i class="fa-solid fa-house-chimney"></i><b><?= $data['Address'];?></b> <br>
														<!-- <span style="margin-left: 37px;font-size: 0.7em;"></span> -->
													</div>
										</div>
											<div class="col-lg-3  prop-rate">
											
											<br>
											<!-- prize box -->
											<i class="fa-solid fa-indian-rupee-sign" style="margin-top: 3.5%;"></i> <span><?= $data['Price'];?></span><br><br>
										
										
											<!-- <a href="#" class="btn-r" style="text-decoration: none;" id="btn-r">INTRESTED</a>
											<br>
											
											
											<a href="" class="btn-r" style="text-decoration:none;">Add To Cart</a> -->
											<a href="updateform.php?sid=<?php echo $data['id'];?> "> <input type="button" value="Edit" id="btn-r"><br> </a>

										</div>
									
											
										<br>
											
								 
								</div>
			 </div>
<?php
         }
         }
         }
?>
     		<!-- update section end -->


    </body>

    </html>