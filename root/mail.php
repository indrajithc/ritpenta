<?php


require_once("classes/class.phpmailer.php");


function mainTo ($to, $subject , $body) {



	$to = 'indranspeaks@gmail.com';

	 // include the class name
	// $to = 'indranspeaks@gmail.com';
	
			$mail = new PHPMailer(); // create a new object
			$mail->IsSMTP(); // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465; // or 587 465 465
			$mail->IsHTML(true);
			$mail->Username = "ritpenta158@gmail.com";
			$mail->Password ="qwertypenta@158";
			$mail->SetFrom("ritpenta158@gmail.com");
			$mail->Subject =  $subject ;

			$mail->Body = $body;
			$mail->AddAddress($to);//here mailid is fetched from the database
			//$mail->AddAttachment($file_name);
			if($mail->Send()) {  

				return 1;

			}    else { 

				return 0;

			} 

		}


		?>