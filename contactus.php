<?php
include('dbcon.php');
$msg="";
 
if(isset($_POST['emails']))
{
	 $email=mysqli_real_escape_string($con,$_POST['emails']);
 

 	mysqli_query($con,"insert into contact_us(id,email) values(NULL,'$email')");

     

	$msg="Thanks message";
	
	$html="<table><tr><td>Email</td><td>$email</td></tr></table>";
	
	include("smtp/PHPMailerAutoload.php");
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=25;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="ratantupte@gmail.com";
	$mail->Password="Tupter@10";
	$mail->SetFrom("ratantupte@gmail.com");
	$mail->addAddress("home.build.your.dream@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New message from  ".$email;
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
	?>	<div style="color: green;margin-left:34px;margin-top:4px; font-size:20px;">
			<?php echo "Mail send";?>
		</div>
<?php
	}else{
		echo "Error plz resend";
	}
	// <div sty>
	// echo $msg;
	// </div>
	
} 
