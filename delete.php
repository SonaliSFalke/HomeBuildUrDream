<?php
include("dbcon.php");
if(isset($_GET['id']))
		{
				$cid=$_GET['id'];
$qry="DELETE FROM `intrested` WHERE id=$cid";
$result=mysqli_query($con,$qry);
        }
  
  if($result==false)
  {
  ?>
		<script>
		alert('not delte');
		window.open('intrested.php', '_self');
		</script>
		<?php
  }

  else
  {       
   ?><script>
		alert('data successfully deleted ');
		window.open('intrested.php', '_self');
		 
		</script>
		<?php
}


?>