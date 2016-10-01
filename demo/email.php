<?php
	
/*
	$email = $_REQUEST['email'] ;
	$message = $_REQUEST['message'] ;
*/
	
	$email = "dustin@theoht.com";
	$message = "This is a test message from PHP Mailer on the hostgator server.  TAKE 2.";
	

	require_once("PHPMailer-master/PHPMailerAutoload.php");
	
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	
	$mail -> SMTPDebug = 1;
	
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl';
	   
	$mail->Username = "nicolai@theoht.com";
	$mail->Password = "Darkstarx7";
	
	
	// $mail->setFrom = $email;
	
	$mail->FromName = "Your Father";

	$mail->AddReplyTo("nicolai@theoht.com", "Tu Papa");

	$mail->addAddress($email, 'Dustin');
	
	$mail->Subject = "PHP Mailer Test";
	$mail->WordWrap = 50;
	
	$mail->IsHTML(true);
	
	$mail->Subject = "PHP Mailer Test";
	
	$mail->Body = $message; 
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	$mail->AltBody = $message;
	
	if(!$mail->Send())
	{
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	}
	
	echo "Message has been sent";
?>
