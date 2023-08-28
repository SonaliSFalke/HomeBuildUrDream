<?php
    include('dbcon.php');
    $id=$_GET['sid'];
  
  if(isset($_POST['submit']))

{

  $qry="SELECT * FROM `property` WHERE id=$id";
  $run=mysqli_query($con,$qry);
  $data= mysqli_fetch_assoc($run);
  $oldimg=$data['Image'];
  $oldimages= explode(",", $oldimg);
  $j=count($oldimages);
  
 $file='';
  $file_tmp='';
  $destination="images/";
  $newimg='';

             for($i=0;$i<$j-1;$i++)
             {
              $file= $_FILES['newimage'.$i]['name']; 
              if($file)
              {
              $oldimages[$i]=$file;
              $file_tmp= $_FILES['newimage'.$i]['tmp_name']; 
               move_uploaded_file($file_tmp,$destination.$file);
              
              }
              
             }
             for($i=0;$i<$j-1;$i++)
             {
                $newimg .= $oldimages[$i].",";

             }
   
  $Type=$_POST['Type'];
  $Dimension=$_POST['Dimension'];
  $Prize=$_POST['Prize'];
  $Address=$_POST['Address'];
  $Description=$_POST['Description'];
  $Owner=$_POST['Owner'];
  $Facility =$_POST['Facility'];
  $Furnished=$_POST['Furnished'];
   
 
   include('dbcon.php');

  $qry="UPDATE `property` SET `Image`='$newimg' ,`Type`='$Type',`Dimension`='$Dimension',`Price`='$Prize',`Address`='$Address',`Description`='$Description',`Owner`='$Owner',`Facility`='$Facility',`Furnished`='$Furnished' WHERE `property`.`id`='$id'";
   $result=mysqli_query($con,$qry);
  
    
if($result==true)
{
?>
  <script>
  alert(' UPDATED SUCCESSFULLY');
  window.open('updateform.php?sid=<?php echo $id;?>', '_self');
  </script>
  <?php
}

else
{       
 ?><script>
  alert(' Failed');
   
  </script>
  <?php
}


 }

?>
		 
