<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Client proprty update</title>
	<!--  CSS LINK -->
	<link rel="stylesheet" href="home-style.css">
	<!--  JS File Link -->
	<script src="home-js.js"></script>
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
					<img src="image/home.png" alt="home">
				</div>
				<div class="col-md-9 ">
					<ul class="nav nav-pills p-3" id="menu">
						<li class="nav-item m-1 active"><a href="home.php" class="nav-link">Home</a></li>
						<li class="nav-item m-1"><a href="rent.php" class="nav-link">Rent</a></li>
						<li class="nav-item m-1"><a href="flat.php" class="nav-link">flat	</a></li>
						<!-- <li class="nav-item m-1"><a href="#contact" class="nav-link">Contact</a></li> 
						<li class="nav-item m-1"><a href="admin.php" class="nav-link"><i class="fa-solid fa-user"></i></a></li>
						<a href="login.html"> <button type="button" class="btn btn-primary" id="btn">Get Started</button></a>
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

	<div class="f-main" style="width: 70% !important;">
		<div class="form-text">
			<div class="wel">
				<h1>WELCOME</h1>
			</div>
			<div class="welcome">
				<h3>Insert Your Prpoerty Details</h3>

			</div>
		</div>

		<form action="" method="POST" enctype="multipart/form-data">
			<div class="group">
				<input type="file" class="field" name="Images[]" multiple autofocus>
				<label for="file" class="label">Choose Your File</label>

			</div>
			<div class="group">
				<input type="text"  id="typepropInput" class="field" placeholder="Property Type" name="Type" autofocus>
				<label onclick="enableinput('typeprop');" id="typeprop" for="Name" class="label">Property Type</label>
			</div>
			<div class="group">
				<input type="text" id="DimensionInput"class="field" placeholder="Dimension" name="Dimension" required autofocus>
				<label onclick="enableinput('Dimension');" id="Dimension"for="text" class="label">Dimension</label>
			</div>
			<div class="group">
				<input type="tel" id="PriceInput"class="field" placeholder="Prize" name="Price" autofocus>
				<label onclick="enableinput('Price');" id="Price" for="mbl" class="label">Price</label>
			</div>
			<div class="group">
				<input type="text"id="AddressInput" class="field" placeholder="Address" id="add" name="Address" autofocus>
				<label  onclick="enableinput('Address');" id="Address"for="add" class="label">Address</label>
			</div>
			<div class="group">
				<input type="text"id="DescriptionInput" class="field" placeholder="Description" id="pass" name="Description" autofocus>
				<label onclick="enableinput('Description');" id="Description"for="pass" class="label">Description</label>
			</div>
			<div class="group">
				<input type="text" id="OwnerInput"class="field" placeholder="Owner" id="pass" name="Owner" autofocus>
				<label onclick="enableinput('Owner');" id="Owner"for="pass" class="label">Owner</label>
			</div>
			<div class="group">
				<input type="text"id="FacilityInput" class="field" placeholder="Facility" id="pass" name="Facility" autofocus>
				<label onclick="enableinput('Facility');" id="Facility"for="pass" class="label">Facility</label>
			</div>

			<div class="group">
				<input type="text" id="FurnishedInput"class="field" placeholder="Furnished" id="pass" name="Furnished" autofocus>
				<label onclick="enableinput('Furnished');" id="Furnished"for="pass" class="label">Furnished</label>
			</div>
			<div class="btn-s">
				<input type="submit" name="submit" class="field" autofocus>

			</div>
		</form>


		<?php
    include('dbcon.php');

  if(isset($_POST['submit']))

{
  $file='';
  $file_tmp='';
  $destination="images/";
  $img='';
       foreach ($_FILES['Images']['name'] as $key=> $value) 
            {
               $file= $_FILES['Images']['name'][$key]; 
               $file_tmp= $_FILES['Images']['tmp_name'][$key]; 
               move_uploaded_file($file_tmp,$destination.$file);
               $img .=$file.",";
              
            }
          
  $Type=$_POST['Type'];
  $Dimension=$_POST['Dimension'];
  $Price=$_POST['Price'];
  $Address=$_POST['Address'];
  $Description=$_POST['Description'];
  $Owner=$_POST['Owner'];
  $Facility =$_POST['Facility'];
  $Furnished=$_POST['Furnished'];
   

   include('dbcon.php');

  $qry="INSERT INTO `property`(`id`, `Image`, `Type`, `Dimension`, `Price`, `Address`, `Description`, `Owner`, `Facility`, `Furnished`) VALUES (NULL,'$img','$Type','$Dimension','  $Price', '$Address','$Description','$Owner','$Facility','$Furnished')";

  $result=mysqli_query($con,$qry);
  
  
  if($result==false)
  {
  ?>
		<script>
		alert('data not insert');
		window.open('insert.php', '_self');
		</script>
		<?php
  }

  else
  {       
   ?><script>
		alert('data insert');
		 
		</script>
		<?php
}
}

?>
		 

		<!-- php code for insert -->

</body>

</html>
 