<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign Up Form</title>
	<!--  CSS LINK -->
	<link rel="stylesheet" href="style.css" />
	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css" />
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
	
<style>
.error {color: #FF0000;}
</style>
</head>

<body>
	 
	<!--- Header Section Start --->
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="logo">
					<!-- <img src="image/home.png" alt="home" height="50px" width="90px" /> -->
					<img src="image/home-l.jpg" alt="home">
				</div>
				<div class="col-md-7">

						<ul class="nav nav-pills p-3" id="menu">
						<li class="nav-item m-1 active"><a href="home.php" class="nav-link">Home</a></li>
						<li class="nav-item m-1 "><a href="about.html" class="nav-link">About Us</a></li>
						<li class="nav-item m-1"><a href="rent.php" class="nav-link">Rent</a></li>
						<li class="nav-item m-1"><a href="flat.php" class="nav-link">Flat</a></li>
						<li class="nav-item m-1"><a href="pg.php" class="nav-link">PG</a></li>
						<li class="nav-item m-1"><a href="#contact" class="nav-link">Contact</a></li>
						<li class="nav-item m-1">
						<a href="login.php"><button type="button" class="btn btn-primary" id="btn">
								Login
							</button></a>
							</li>
						

					</ul>
				</div>
			</div>
		</div>
	</header>
	<!--- Header Section End --->

	<!-- Sign Up Section Start -->
	<div class="container-fluid login1">
		<div class="f-main">
			<div class="form-text">
				<div class="wel">
					<h1>WELCOME</h1>
				</div>
				<div class="welcome">
					<h3>Create Account</h3>
					<p>get in touch with us for latest updates and news</p>
				</div>
			</div>
			<!-- <?php
		// 	$contacterr = $emailErr = " ";
		//  $Email = $contactno   = "";
 		?> -->
			<form action="sign-up.php" method="POST">
				<div class="group">
					<input type="text" id="Nameinput" class="field" placeholder="First Name"  name="Name" autofocus />
					<label  onclick="enableinput('Name');" id="Name" class="label" for="Name" >Enter Name</label>
					<span class="error" id="nameerr"> </span>
				</div>
			 
				<div class="group">
					<input type="email" class="field" placeholder="Email" id="emailinput" name="Email"  autofocus />

					<label  onclick="enableinput('email');" id="email"  for="email" class="label" >Email</label>
				 
					<span class="error" id="emailerr">  </span>
				</div>


				<div class="group">
					<input type="password" class="field" placeholder="Password" id="passinput" name="password"  autofocus />
					<label for="pass" onclick="enableinput('pass');" id="pass"  class="label">Password</label>
					<span class="error" id="passworderr"> </span>
				</div>
				<div class="group">
					<input type="password" class="field" placeholder="Confirm Password" id="cpassinput" name="conformpassword"   autofocus />
					<label for="cpass" onclick="enableinput('cpass');" id="cpass" class="label ">Confirm Pass</label>
				 

				 
					<span class="error" id="conformpassworderr"> </span>
				</div>
				<div class="group">
					<input type="text" class="field" placeholder="Address" id="addinput" name="Address" autofocus />
					<label for="add" onclick="enableinput('add');" id="add" class="label">Address</label>
					<span class="error"id="Addresserr">	</span>
				</div>
				<div class="group">
					<input type="tel" class="field" placeholder="Mobile Number" id="mblinput" name="contactno" autofocus />				
					<label for="mbl" onclick="enableinput('mbl');" id="mbl"  class="label" >Mobile Number</label>
					<span class="error"id="contacterr"></span>
				</div>
				<div class="btn-s">
					<input type="submit" class="field"  name="submit" />
				</div>
			</form>
		</div>


		<script>
	function enableinput(typeprop)
{
document.getElementById(typeprop).classList.add("removelabel");
document.getElementById(typeprop+"input").focus();

}
</script>

	</div>
	<!-- Sign Up Section End -->

	 
<?php 
		 $count=0;

		if(isset($_POST['submit']))
		{
		 include('dbcon.php');
		 $Name =$_POST['Name'];
		 $Email =$_POST['Email'];
		 $password =$_POST['password'];
		 $conformpassword =$_POST['conformpassword'];
		 $Address =$_POST['Address'];
		 $contactno =$_POST['contactno'];
		 function insert()
		{
			include('dbcon.php');

			$Name =$_POST['Name'];
			$Email =$_POST['Email'];
			$password =$_POST['password'];
			$conformpassword =$_POST['conformpassword'];
			$Address =$_POST['Address'];
			 $contactno =$_POST['contactno'];
		
			$qry="INSERT INTO `user`(`id`, `Name`, `Email`, `password`, `conformpassword`, `Address`, `contactno`) VALUES ('null','$Name','$Email','$password','$conformpassword','$Address','$contactno')";

			$sql = "CREATE TABLE ".$Name."_cartproperty (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				`Image` varchar(500) NOT NULL,
				`Type` varchar(255) NOT NULL,
				`Dimension` varchar(255) NOT NULL,
				`Prize` varchar(255) NOT NULL,
				`Address` varchar(255) NOT NULL,
				`Description` varchar(255) NOT NULL,
				`Owner` varchar(255) NOT NULL,
				`Facility` varchar(255) NOT NULL,
				`Furnished` varchar(255) NOT NULL,
				`cartid` varchar(255) NOT NULL
				 )";
			if ($password == $conformpassword)
			{
				$result=mysqli_query($con,$qry);
				if($result==true)
				{
					$run=mysqli_query($con,$sql);
					if($run==true)
				{
					?>
					<script>
				// alert('database created');
				alert('sucessfully registered');
				window.open('login.php', '_self');
				 
				</script>
					<?php
				}
				else{
					?>
				 
					<?php
				}
				}
			

				
                ?>
				<script>
				// alert('sucessfully registered');
				// window.open('login.php', '_self');
				</script>
				<?php

			}
			else
			{
				$result=true;
				?>
				<script>
				alert('password  must be 	match');
				</script>
				<?php

			}
		 
			 if($result==false)
			{
		 
					?>
			<script>
			alert('not inserted');
			</script>
			<?php
			}
			 
				
		}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	  }
	  
		 function validate_number($phone_number,$num)
		 {
			if(preg_match('/^[0-9]{10}$/', $phone_number)){
				if($num==0)
				{
				 $GLOBALS['num']=1 ;
				}    
		   }   else{
			 // return false;
			 $GLOBALS['num']=2;
		 
		 
			  }
		   } 

		 validate_number($_POST["contactno"],$flag=0);
		
		 if (empty($_POST["contactno"])) {
			?>
			<script>
			document.getElementById("contacterr").innerHTML="contact no is required";

			</script>
		<?php
			$count++;
		  } else if($num==1) 
		  {
			$contactno = test_input($_POST["contactno"]);
		 
		  } else if($num==2){
			 
			$count++;
			?>
			<script>
			document.getElementById("contacterr").innerHTML="contact no is inavlid ";

			</script>
		<?php
			
		  }

		  if (empty($_POST["Email"])) {
			?>
			<script>
			document.getElementById("emailerr").innerHTML="Email is required";

			</script>
		<?php
			$count++;
		
		  } else {
			 $Email = test_input($_POST["Email"]);
			// check if e-mail address is well-formed
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				?>
				<script>
				document.getElementById("emailerr").innerHTML="email invalid form";

				</script>
			<?php
			$count++;
		
			}
		  }  
		  
		  if (empty($_POST["password"])) {
			?>
			<script>
			document.getElementById("passworderr").innerHTML="password is required";

			</script>
		<?php
			$count++;
		
		  } else {
			 $password = test_input($_POST["password"]);
			}

			if (empty($_POST["conformpassword"])) {
				?>
				<script>
				document.getElementById("conformpassworderr").innerHTML="conformpasswor is required ";

				</script>
			<?php
				$count++;
			
			  } else {
				 $conformpassword = test_input($_POST["conformpassword"]);
				
				}

			 if (empty($_POST["Name"])) {
				 
				?>
				<script>
				document.getElementById("nameerr").innerHTML="Name is required";

				</script>
			<?php

				$count++;
			
			  } else {
				 $Name = test_input($_POST["Name"]);
				}

				if (empty($_POST["Address"])) {
					?>
					<script>
					document.getElementById("Addresserr").innerHTML="Address is required";
	
					</script>
				<?php
					$count++;
				
				  } else {
					 $Address = test_input($_POST["Address"]);
					}	 

		  if($count==0)
		  {
			insert();
		 }else if ($count>0) {
		
		# code...
		?>

		<script>
			document.getElementById("Nameinput").value="<?php echo $Name?>";
			document.getElementById("emailinput").value="<?php echo $Email?>";
			document.getElementById("passinput").value="<?php echo $password?>";
			document.getElementById("cpassinput").value="<?php echo $conformpassword?>";
			document.getElementById("addinput").value="<?php echo $Address?>";
			document.getElementById("mblinput").value="<?php echo $contactno?>";

		</script>
		<?php
			 
		 }
  
	}
		?>

	<!---------end php code for registeration ------->


	<!------end of php ------------->
</body>

</html>