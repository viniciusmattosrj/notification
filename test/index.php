<?php

require __DIR__ .'/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2,"smtp.gmail.com","e-mail-disparo","#senha","tls","587","e-mail-destinatario","Nome Ser exibido");
$novoEmail->sendMail("Assunto Teste","<p>Esse é um e-mail de <b>teste</b>!</p>","email-remetentej@gmail.com","Nome Remetente","email.destinatario@gmail.com", "Nome Destinatário"););


var_dump($novoEmail);