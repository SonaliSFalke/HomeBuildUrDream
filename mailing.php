<?php

 include('dbcon.php');
$msg="";
if(isset($_POST['subject']) && isset($_POST['email'])  && isset($_POST['Body'])){
	 
	 $email=$_POST['email'];
	 $subject=$_POST['subject'];
	 $body=$_POST['Body'];
	
	include("smtp/PHPMailerAutoload.php");
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=25;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="home.build.your.dream@gmail.com";
	$mail->Password="p@ssw123";
	$mail->SetFrom("home.build.your.dream@gmail.com");
	// $mail->Username="ratantupte@gmail.com";
	// $mail->Password="Tupter@10";
	// $mail->SetFrom("ratantupte@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject=$subject;
	$mail->Body=$body;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	 
}
?>