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

<body>
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="logo">
					<img src="image/home-l.jpg" alt="home" height="50px" width="90px">
				</div>
				<div class="col-md-9 ">
					<ul class="nav nav-pills p-3" id="menu">
						<li class="nav-item m-1 active"><a href="home.php" class="nav-link">Home</a></li>
						<li class="nav-item m-1 "><a href="about.html" class="nav-link">About Us</a></li>
						<li class="nav-item m-1"><a href="home.php" class="nav-link">Rent</a></li>
						<li class="nav-item m-1"><a href="home.php" class="nav-link">Flat</a></li>
						<li class="nav-item m-1 "><a href="pg.php" class="nav-link">PG</a></li>
						<li class="nav-item m-1"><a href="home.php" class="nav-link">Contact</a></li>
						<li class="nav-item m-1"><a href="admin.php" class="nav-link"><i class="fa-solid fa-user"></i></a></li>
						<!-- <a href="login.html"> <button type="button" class="btn btn-primary" id="btn">Get Started</button></a> -->
					</ul>
				</div>
			</div>
		</div>
	</header>

	<!-- admin login section start -->
	<!-- Login Section Start -->
	<div class="container-fluid login">
		<div class="f-main">
			<div class="form-text">
				<div class="wel">
					<h1>WELCOME</h1>
				</div>
				<div class="welcome">
					<h3>Login To Continue</h3>
					<p>Log in with your data that you enterd during your registration</p>
				</div>
			</div>

			<form action="" method="POST">

				<div class="group">
					<input type="email" id="unameinput"class="field" placeholder="Last Name" id="mail" name="username" autofocus>
					<label for="email" class="label" onclick="enableinput('uname');" id="uname">Email</label>
				</div>

				<div class="group">
					<input type="password" id="passinput"class="field" placeholder="Password"   name="password">
					<label for="pass" class="label" onclick="enableinput('pass');" id="pass">Password</label>
				</div>

				<div class="btn" style="display:flex; justify-content:center;;">
					<input type="submit" class="field" placeholder="submit" name="submit">

				</div>
			</form>
		</div>
	</div>

<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	 						$username =$_POST['username'];
							$password =$_POST['password'];
							include('dbcon.php');

				            $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password` ='$password'";
				      
				            $result=mysqli_query($con,$qry);

				            if($result->num_rows < 1)
          						 {
						 						?>
								<script>
								alert('email and password not match');
								window.open('admin.php', '_self');
								</script>
								<?php
								}
								else
								{
								 header("Location:action.php");
								}

}

?>
<script>
	function enableinput(typeprop)
{
document.getElementById(typeprop).classList.add("removelabel");
document.getElementById(typeprop+"input").focus();

}
</script>

</body>

</html>