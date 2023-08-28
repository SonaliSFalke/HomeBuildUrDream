<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Styling</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="home-style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Animation link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
    <style class="admin-body">
        .table-body {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            height: 80vh;
            padding-top:0 px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
            
            /* background: linear-gradient(147deg, #f1335c 0%,#5636e9 74%); */
        }
        
        .table {
            overflow:scroll;
            position: absolute;
            height: auto;
            width: 89%;
            max-width: 1516px;
            margin: auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0px 0px 5px rgba(80, 79, 79, 0.7);
            /* border: 1px black solid; */
        }
        
        .table-body h2 {
            text-align: center;
            padding: 5px;
            font-weight:900;
            font-size:35px;
        }
        
        .table-body thead {
            font-size: 20px;
        }
        
        /* .table-body input[type=button] */
        #send {
            display: inline-block;
            width: 100%;
            /* max-width: 250px; */
            box-sizing: border-box;
            background-color: #f7c438;
            outline: none;
            border: none;
            border-radius: 20px;
            color: #fff;
            padding:5px 16px;
             text-align: center;
            text-decoration: none;
        }
        #delete {
            display: inline-block;
            width: 100%;
            /* max-width: 250px; */
            box-sizing: border-box;
            background-color: #f7c438;
            outline: none;
            border: none;
            border-radius: 20px;
            color: #fff;
            padding:5px 16px;
             text-align: center;
            text-decoration: none;
        }
    </style>
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
						<li class="nav-item m-1"><a href="FLAT.PHO" class="nav-link">Flat </a></li>
						<!-- <li class="nav-item m-1"><a href="#contact" class="nav-link">Contact</a></li> 
						<li class="nav-item m-1"><a href="admin.PHP" class="nav-link"><i class="fa-solid fa-user"></i></a></li>
						<a href="login.html"> <button type="button" class="btn btn-primary" id="btn">Get Started</button></a>
					</ul>
				</div>
			</div>
		</div>
	</header> -->
<!-- <div class="back">
			<a href="action.php" class="previous round intrested" style="padding-bottom: 0px;">&#8249;</a>
			<!-- <a href="intrested.php" class="next round">&#8250;</a> 
		</div> -->
        <form method="POST" action="" >

<div class="con container">
                <input type="text"  name="pid" placeholder="Enter Product Id">
                <button type="submit" name="search"  class="btn submit" id="submit" >search</button>
                        <!-- <button type="submit" name="submit" class="btn" id="con">Search</button> -->

            </div>
            </form>	
            
    <div class="search-display">
                <?php
                include('dbcon.php');
                if(isset($_POST['search']))
                {
                    $productid=$_POST['pid'];
                    $qry="SELECT * FROM `Property` WHERE `id`= $productid";
                    $run=mysqli_query($con,$qry);
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
                <!-- Property Display conainer -->
                
                <div class="container-md property" style="background:white;">
		<div class="w3-row prop">
				<div class="w3-col-lg-3 prop-img">
                <?php
						$res=$data['Image'];
						$display= explode(",", $res);
					?> 
                <!-- <img src="image/home-banner.jpg" alt="home" class="gallery-item"> -->
				<img src="images/<?= $display[0]?>" class="gallery-item"/>		 					 							 	 
					 
				<!-- <img  src="images/flat2.jpg" style="width:100%;cursor:pointer"  class="w3-hover-shadow"/>		 					 							 	  -->
				</div>
				 
		 
				<div class="col-lg-6  prop-text" style="margin-top: 0px;">
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
			</div>
        </div>
		</div>
        <?php
         }
         }
         }
?>
</div>
    <div class="table-body">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" colspan="7">
                        <h2>Intrested Customer</h2>
                    </th>
                </tr>
            </thead>
            <?php  
            include("dbcon.php");
            $qry="SELECT * FROM `intrested`";
            $run=mysqli_query($con,$qry);
            $i= mysqli_num_rows($run);
             
            ?>
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email-Id</th>
                        <th scope="col">Address</th>
                        <th scope="col">Property</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count=0;
                    while($row=mysqli_fetch_assoc($run))
                        {
                            $count++;
                        ?>                         
                        <tr>
                        <th scope="row"><?php echo $count;?></th>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['address'];?> </td>
                        <td><?php echo $row['product_id'];?></td>
                        <td><a href="adminmailform.php?id=<?php echo $row['id'];?>" id="send">send</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id'];?>" id="delete">Delete</a></td>
                    </tr>
                    <?php 
                        }
                    ?>
                    
                </tbody>
        </table>
    </div>
     
        <!--  -->
</body>

</html>