	<!--- Header Section Start --->
	<!-- <link rel="stylesheet" href="update-sunday.css"> -->

	<?php
	session_start(); 
?>
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2" id="logo">
					<img src="image/home-l.jpg" alt="home"  height="50px" width="90px">
				</div>
				<div class="col-md-9 ">
					 
						<ul class="nav nav-pills p-3" id="menu">
						<li class="nav-item m-1 active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item m-1 "><a href="about.php" class="nav-link">About Us</a></li>
						<li class="nav-item m-1"><a href="rent.php" class="nav-link">Rent</a></li>
						<li class="nav-item m-1"><a href="flat.php" class="nav-link">Flat</a></li>
						<li class="nav-item m-1"><a href="pg.php" class="nav-link">PG</a></li>
						<li class="nav-item m-1"><a href="#contact" class="nav-link">Contact</a></li>

				<!-- <li class="nav-item m-1"><a href="admin.php" class="nav-link"><i class="fa-solid fa-user"></i></a></li> -->
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
						 
						  
					</ul>
				</div>
			</div>
		</div>
	</header>