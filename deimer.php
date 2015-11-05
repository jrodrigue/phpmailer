<?php
      // important to include the library phpmailer 
      // to include use include_once('path/phpmailer');
      
      
      $mail = new \PHPMailer();

			$mail->isSMTP();                                   
			$mail->Host = 'smtp.gmail.com';  
			$mail->SMTPAuth = true;                               
			$mail->Username = 'your-email@gmail.com';                  
			$mail->Password = 'you_pass';                           
			$mail->SMTPSecure = 'ssl';                            
			$mail->Port = 465;                                   

			$mail->From = 'your-email@gmail.com';
			$mail->FromName = 'Sender name';
			$mail->addAddress('email@domain', 'name of the recipient');

			$mail->Subject = 'Email Subject';
			$mail->Body    = 'content email';

			if(!$mail->send()) {
			    echo 'Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'email success';
			}
			
			?>
