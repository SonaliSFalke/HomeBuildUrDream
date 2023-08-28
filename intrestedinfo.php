<?php 
			// if(isset($_POST['submit']))
			// {
				session_start();
					include("dbcon.php");
			  
					$uname=$_SESSION['name'];
					$useremail=$_SESSION['email'];
					$useradd=$_SESSION['uaddress'];
					$pid=$_GET['pid'];
					include("dbcon.php");
					$qry="INSERT INTO `intrested`(`id`, `name`, `email`, `address`, `product_id`) VALUES (NULL,'$uname','$useremail','$useradd','$pid')";
  					$result=mysqli_query($con,$qry);
					  if($result==false)
					  {
					  ?>
							<script>
							alert('plz log in first and try agian ');
							// window.open('insert.php', '_self');
							</script>
							<?php
					  }
					
					  else
					  {       
					   ?><script>
							alert('thank you for showing intrest');
							 
							</script>
							<?php
					}			
                     
		// }          
		
?>