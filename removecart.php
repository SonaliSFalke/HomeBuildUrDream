<?php
session_start();
include("dbcon.php");
if(isset($_GET['pid']))
		{
				$cid=$_GET['pid'];
$qry="DELETE FROM  ".$_SESSION['name']."_cartproperty WHERE id=$cid";
$result=mysqli_query($con,$qry);
        }
  
  if($result==true)
  {
  ?>
		<script>
		alert('successfully deleted');
		window.open('add2caert.php', '_self');
		</script>
		<?php
  }

//   else
//   {       
//    ?><script>
// 		alert('data successfully deleted ');
// 		window.open('add2caert.php', '_self');
		 
// 		</script>
		<?php
// }


?>