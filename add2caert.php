<?php
// session_start();
// if($_SESSION['name']==false)

// {
// echo "<script> window.open('login.php')</script>";
// }
// else{



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add 2 cart</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="home-style.css">
    <script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
    <script src="jquery/jquery.js" type="text/javascript"></script>
<script src="jquery/jquery.cycle.all.js" type="text/javascript"></script>
<!--  CSS LINK -->
<link rel="stylesheet" href="home-style.css">
	<!-- w3 link for modal -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Animation link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
	<!-- mail links -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="script.js"></script>
</head>
<body style="background: #f0f0f0;">

<!-- eror model -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">No property found</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>	
                    <div class="modal-body">
						<a href="home.php">home</a>
					</div>		
					</div>
				</div> 
				</div>


<?php  
include('header.php');
  ?>   

        <?php
            session_start();
			include('dbcon.php');
            $id= $_GET['pid'];
	$msg="";	     

    $checkduplicate="SELECT * FROM ".$_SESSION['name']."_cartproperty";

    $checkrun=mysqli_query($con,$checkduplicate);
    $check=0;  
    if ($checkrun)
    {
             
     while($data=mysqli_fetch_assoc($checkrun))
     {
    if ($id==$data['cartid'])
     {
        $check++;
        break;
    }
    
    }
            if($check==0)
            {
                $id= $_GET['pid'];
                $sql="SELECT * FROM `property`  WHERE `id`= $id" ;
        
                $run=mysqli_query($con,$sql);
              if($data=mysqli_fetch_assoc($run))
              {
                  $count=0;        # code...
               
               while($data=mysqli_fetch_assoc($run))
               {
                  $cartid=$data['id']; 
                  $image=$data['Image'];
                  $Type=$data['Type'];
                  $Dimension=$data['Dimension'];
                  $Price=$data['Price'];
                  $Address=$data['Address'];
                  $Description=$data['Description'];
                  $Owner=$data['Owner'];
                  $Facility =$data['Facility'];
                  $Furnished=$data['Furnished'];
               
              }
              
              $insql="INSERT INTO  ".$_SESSION['name']."_cartproperty(`id`, `Image`, `Type`, `Dimension`, `Prize`, `Address`, `Description`, `Owner`, `Facility`, `Furnished`,`cartid`) VALUES(NULL,'$image','$Type','$Dimension','  $Price', '$Address','$Description','$Owner','$Facility','$Furnished','$cartid')";
               
              $hit=mysqli_query($con,$insql);
                
             
          }
            }
            else{

                $msg= "already exist";
             }
   
   ?>
            <script>
                var msg="<?php echo $msg;?>";
                alert("msg");
            </script>
             
   
   <?php
   
            }        

    
     $csql="SELECT * FROM ".$_SESSION['name']."_cartproperty";
                 $view=mysqli_query($con,$csql);
                	
    //  if(mysqli_num_rows($view)<1)
     if($view->num_rows <1)

     {
        ?>
        <script>
        // alert('first add property');
        $("#exampleModal").modal("show");

        </script>
        <?php
     }
 else{
     $count=0;
  while($data=mysqli_fetch_assoc($view))
  {
				$count++;

?>
   <div class="container cart border">
      <div class="cart-head">
               <div class="cart-1">
                   <p><i class="fa-solid fa-cart-shopping"></i>My Cart</p>
               </div>
               <div class="cart-2">
               <img src="image/dustbin.png" alt="dust" height="35px" width="35px"><buttton  onclick="remove(<?php echo $id;?>);" >Remove</buttton>
               </div>
            </div>   
               <div class="cart-info">
                  <div class="cart-img">

                  <?php
						$res=$data['Image'];
						$display= explode(",", $res);
						$j=count($display);

					?> 
					 
				  <img  src="images/<?= $display[0]?>" style="cursor:pointer"onclick="openModal(<?php echo $count;?>);currentDiv(1,<?php echo $count;?>)"/>		
                      <!-- <img src="images/flat2.jpg" alt=""> -->
                  </div>
                  <div class="cart-dis">
                      <p class="dis1">
                          <!-- Property detail-flat/rent/pg...and address -->
                          <?= $data['Address'];?>
                      </p>
                      <p class="dis2">
                          <!-- Property discription -Why client choose thise  property -->
                          <?= $data['Description'];?>
                      </p>
                      <b>Owner:</b> <?= $data['Owner'];?> <br>
                      <big><i class="fa-solid fa-indian-rupee-sign" style="margin-top: 3.5%;"></i> <?= $data['Prize'];?></big>
                  </div> 
               </div>
           
       
  </div>
<!-- model start -->
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




   </div>

<?php
}
 }

// }
?>
<script src="script.js"></script>

<script>
function remove(id) {
  if(confirm( "are you shoure youy want to delete"))
  {
    window.location.href='removecart.php?pid='+id+''; 
return true; }
}
</script>

</body>
</html>