<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Client proprty update</title>
	<!--  CSS LINK -->
	<!-- <link rel="stylesheet" href="home-style.css"> -->
	<link rel="stylesheet" href="style.css">

	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Animation link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
</head>

<body style="background-image:url('image/action-bg.jpg');">
	<!-- Header Section Start -->
	<!-- <header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="logo">
					<img src="image/home-l.jpg" alt="home">
				</div>
				<div class="col-md-9 ">
					<ul class="nav nav-pills p-3" id="menu">
						<li class="nav-item m-1 active"><a href="#home" class="nav-link">Home</a></li>
						<li class="nav-item m-1"><a href="about.html" class="nav-link">About Us</a></li>
						<li class="nav-item m-1"><a href="rent.php" class="nav-link">Rent</a></li>
						<li class="nav-item m-1"><a href="flat.php" class="nav-link"> Flat</a></li>
						 <li class="nav-item m-1"><a href="#contact" class="nav-link">Contact</a></li> 
						<li class="nav-item m-1"><a href="admin.php" class="nav-link"><i class="fa-solid fa-user"></i></a></li>
						<a href="login.html"> <button type="button" class="btn btn-primary" id="btn">Get Started</button></a>
						<a href="log-out.php"> <button type="button" class="btn btn-primary" id="btn"><i class="fa-solid fa-right-to-bracket"></i>Log Out</button></a>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<div class="back">
			<a href="action.php" class="previous round">&#8249;</a>
			<a href="intrested.php" class="next round">&#8250;</a>
		</div> -->
		
	<!-- Header Section End -->
	<!-- Client Insert Section Start -->

	<div class="ad-form f-main">
		<div class="form-text">
			<div class="wel">
				<h1>WELCOME</h1>
			</div>
			<div class="welcome">
				<h3>Update Your Prpoerty Details</h3>

			</div>
		</div>
<?php

 
include('dbcon.php');
$sid=$_GET['sid'];
$sql ="SELECT * FROM `property` where id = $sid";
$run = mysqli_query($con,$sql);
if($run == true)
		{
			$data= mysqli_fetch_assoc($run);
}
?>
		<form action="updated.php?sid=<?php echo $data['id'];?>"method="POST" enctype="multipart/form-data">
		<?php
				 $res=$data['Image'];
				 $display= explode(",", $res);
					?> 
							 <div class="contain img-con">


			<?php
	 	$j=count($display);
	//  echo $j;
			for ($x = 0; $x <$j-1; $x++) {
			

			?>
           <div class="img-blk">
          
			 
			<img src="images/<?= $display[$x]?>"  alt="" id="<?php echo $x ;?>" />

            <div class="img-btn">
                <input onchange="file_changed(<?php echo $x;?>)" type=file id="input<?php echo $x ;?>" name="newimage<?php echo $x;?>" value="update">
            </div>         
      		  </div>
               
	 
			<?php	 					 
			}
			?>
      
    </div>
			<div class="group">
            
				<input type="file" class="field" name="Images[]"  value=<?php echo $data['Image'];?> multiple autofocus>
				<label for="file" class="label">Choose Your File</label>

			</div>
			<div class="group">
				<input type="text" class="field" placeholder="Property Type" name="Type" value= "<?php echo $data['Type'];?> " autofocus>
				<label for="Name" class="label">Property Type</label>
			</div>
			<div class="group">
				<input type="text" class="field" placeholder="Dimension" name="Dimension" value="<?php echo $data['Dimension'];?> " required autofocus>
				<label for="text" class="label">Dimension</label>
			</div>
			<div class="group">
				<input type="tel" class="field" placeholder="Prize" name="Prize" value=<?php echo $data['Price'];?> autofocus>
				<label for="mbl" class="label">Prize</label>
			</div>
			<div class="group">
				<input type="text" class="field" placeholder="Address" id="add" name="Address" value ="<?php echo $data['Address'];?> " autofocus>
				<label for="add" class="label">Address</label>
			</div>
			<div class="group">
				<input type="text" class="field" placeholder="Description" id="pass" name="Description" value= "<?php echo $data['Description'];?> " autofocus>
				<label for="pass" class="label">Description</label>
			</div>
			<div class="group">
				<input type="text" class="field" placeholder="Owner" id="pass" name="Owner" value="<?php echo $data['Owner'];?>" autofocus>
				<label for="pass" class="label">Owner</label>
			</div>
			<div class="group">
				<input type="text" class="field" placeholder="Facility" id="pass" name="Facility" value="<?php echo $data['Facility'];?>" autofocus>
				<label for="pass" class="label">Facility</label>
			</div>

			<div class="group">
				<input type="text" class="field" placeholder="Furnished" id="pass" name="Furnished"value="<?php echo $data['Furnished'];?>" autofocus>
				<label for="pass" class="label">Furnished</label>
			</div>
			<div class="btn-s">
				<input type="submit" name="submit" class="field" autofocus>

			</div>
		</form>
 
 
		 

		<!-- php code for insert -->
<!-- img change js fun -->
<script type="text/javascript" src="home-js.js"></script>

</body>

</html>
 