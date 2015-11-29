<?php


require_once 'mail/PHPMailerAutoload.php';

class Modelo_Mail{

	private $mail;
	
	public function __construct() {
        
		$this->mail = new PHPMailer;
		$this->mail->IsSMTP();
		$this->mail->Port = 587;
		$this->mail->CharSet="UTF-8";
		$this->mail->SMTPSecure = 'tls';
		$this->mail->Host = 'smtp.gmail.com';
		$this->mail->Port = 587;
		$this->mail->Username = 'arcangel6191@gmail.com';
		$this->mail->Password = 'fullmetala';
		$this->mail->SMTPAuth = true;

    }

    public function sendMail($variables){

    	$this->mail->setFrom($variables['e-mail']);
		//Set an alternative reply-to address
		$this->mail->addReplyTo($variables['e-mail']);
		//Set who the message is to be sent to
		$this->mail->addAddress('arcangel6191@gmail.com');
		//Set the subject line
		$this->mail->Subject = 'Contacto desde pagina web';
		//convert HTML into a basic plain-text alternative body
		$this->mail->msgHTML($variables['informacion'], dirname(__FILE__));

		//send the message, check for errors
		if (!$this->mail->send()) {
		    return "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    return "Message sent!";
		}
    }
}

?>