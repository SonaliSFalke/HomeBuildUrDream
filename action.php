<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin</title>
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="style.css">

	<link rel="stylesheet" href="style.css">
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
	<style>
		.left-list li{
			list-style-type: none;
			padding: 10px 10px;
		}
		a{
			color: #000;
		}
		ul{
			padding-left: 0 !important;
		}
		.left-list{
			padding-top: 2%;
		}
		.left-list li:hover{
			background-color: #f7c438;
			color: white;
		}
	</style>
</head>

<body>
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="logo">
					<!-- <img src="image/home.png" alt="home" height="50px" width="90px"> -->
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
						<a href="login.html"> <button type="button" class="btn btn-primary" id="btn" style="width:162px !important;"><i class="fa-solid fa-right-to-bracket"></i>Get Started</button></a>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<!-- <div class="btn-s opt" style=" display: flex;
align-items: center;
justify-content: center;">
		<a href="update.php"><input type="submit" class="field" id="pass" name="pass" value="update"></a>
		<a href="insert.php"><input type="submit" class="field" id="pass" name="pass" value="Insert"></a>
		<a href="intrested.php"><input type="submit" class="field" id="pass" name="pass" value="Intrested_Client"></a>

	</div> -->
	<div class="container-fluid">
		<div class="action-container">
			<div class="left-list ">
				<ul> 
					<a href="update.php" target="show"><li><img src="image/h4.svg" alt=""> Update Property</li></a> 
					<a href="insert.php" target="show"><li><img src="image/h3.svg" alt=""> Insert Property</li></a>
					<a href="intrested.php" target="show"><li><img src="image/h2.svg" alt=""> Intrested Customer</li></a> 
				 
					 

			</ul>
			</div>
			<div class="right-container border" style="background-image:url('image/action-bg.jpg');">
			 
			<iframe src="actionheder.php" frameborder="1" name="show" ></iframe>
			</div>
		</div>
	</div>

 

</body>

</html>