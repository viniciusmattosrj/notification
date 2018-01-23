<?php

namespace Notification;
/* NOME: Vendor, Biblioteca, Método */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
	private $mail = \stdClass::class;

	public function __construct()
	{
		$this->mail = new PHPMailer(true);
	 	$this->mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $this->mail->isSMTP();                                      // Set mailer to use SMTP
	    $this->mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $this->mail->Username = 'email-remetente@gmail.com';                 // SMTP username
	    $this->mail->Password = 'senha-email';                           // SMTP password
	    $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $this->mail->Port = 587; 
	    $this->mail->Charset = 'utf-8';
	    $this->mail->setLanguage('br');
	    $this->mail->isHTML(true);
	    $this->mail->setFrom('email-destinatario@gmail.com','nome-destinatário');

	}

	public function sendMail($subject, $body, $replyEmail,$replyName, $addressEmail, $addressName)
	{
		$this->mail->Subject = (string)$subject;
		$this->mail->Body = $body;

		$this->mail->addReplyTo($replyEmail, $replyName);
		$this->mail->addAddress($addressEmail, $addressName);

		try
		{
			$this->mail->send();
		}
		catch(Exception $e)
		{
			echo "Erro ao enviar o e-mail {$this->mail->ErrorInfo} {$e->getMessage()}";
		}
	}	
}