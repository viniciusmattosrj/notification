<?php

namespace Notification;
/* NOME: Vendor, Biblioteca, Método */
use PHPMailer\PHPMailer\PHPMailer;

class Email
{

	public function __contruct()
	{
		$email = new PHPMailer; 
	}

	public function sendMail()
	{
		echo "Email enviado";
	}	
}