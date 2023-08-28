<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<!-- JS  FIle Link -->
	<script src="home-js.js"></script>
	<!--  CSS LINK -->
	<link rel="stylesheet" href="home-style.css">
	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
	<style>
.error {color: #FF0000;}
</style>
</head>

<body>
	<!--- Header Section Start --->
	 
	<?php
	include('header.php');
	
	?>
	<!--- Header Section End --->
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
					<input type="email"  id="emailinput" class="field" placeholder="Last Name"  name="Email" autofocus >
					<label onclick="enableinput('email');"  id="email" for="email" class="label" >Email</label>
					<span class="error"id="emailerr"></span>

				</div>

				<div class="group">
					<input type="password"  id="passwordinput"class="field" placeholder="Password" name="password"  autofocus>
					<label for="Password" class="label" onclick="enableinput('password');" id="password">Password</label>

					<span class="error"id="passerr"></span>

				</div>

				<div class="btn" style="display:flex;justify-content:center;">
					<input type="submit" class="field" id="pass" name="submit">

				</div>
			</form>
		</div>
	</div>
	 
 

	<!-----------php for login -------------->

	<?php
		session_start(); 
		 $count=0;
         
         include('dbcon.php');
		if(isset($_POST['submit']))
		{
			$Email =$_POST['Email'];
			$password =$_POST['password'];

			function login(){

							
			include('dbcon.php');

				     		 $Email =$_POST['Email'];
							$password =$_POST['password'];

				            $qry="SELECT * FROM `user` WHERE `Email`='$Email' AND `password` ='$password'";
				      
				            $result=mysqli_query($con,$qry);

				            if($result->num_rows < 1)
          						 {
						 						?>
						<script>
						alert('email and password not match');
						window.open('login.php', '_self');
						</script>
						<?php
									}
								
									else
									{				
										$row = mysqli_fetch_assoc($result);
										
											$name=$row['Name'];
											$useradd=$row['Address'];
											$useremail=$row['Email'];
										?>
										<script>
											alert("hiii ");
										</script>
										<?php
											session_start(); 
											 $_SESSION['name']=$name;
											 $_SESSION['uaddress']=$useradd;
											 $_SESSION['email']=$useremail;

											 
										 header("Location:home.php");
										 
									}
		}
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
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
			document.getElementById("passerr").innerHTML="password is required";

			</script>
		<?php
			$count++;
		
		  } else {
			 $password = test_input($_POST["password"]);
			}  


			if($count==0)
			{
			  login();
		   }else if ($count>0) {
		  
		  # code...
		  ?>
  
		  <script>
		 
			  document.getElementById("mail").value="<?php echo $Email?>";
			  document.getElementById("pass").value="<?php echo $password?>";
			 
  
		  </script>



		  <?php
			   
		   }

	}
         
        ?>
       

	<!-- ---------php end ------------ -->

	<script>
	function enableinput(typeprop)
{
document.getElementById(typeprop).classList.add("removelabel");
document.getElementById(typeprop+"input").focus();

}
</script>
</body>

</html>