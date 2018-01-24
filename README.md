# Biblioteca de Notificação via e-mail utilizando o phpMailer

Essa biblioteca tem por função enviar e-mail utilizando a biblioteca phpmailer. Fazer essa ação de forma descomplicada é essencial para qualquer sistema.

Para fazer a instalação da biblioteca, execute o seguinte comando:

```sh
composer require viniciusmattosrj/notification
```

Para fazer o uso da biblioteca, basta requerir o autoload do composer, invocar a classe e fazer a chamada do método:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note que toda a configuração do envio do e-mail está utilizando o método mágico construtor! Uma vez invocado o método construtor dentro da sua aplicação, seu sistema estar'á apto a efetuar os disparos.

### Developers
* [Vinicius Mattos] - Desenvolvedor desta biblioteca e tutor do curso Composer na Prática!
* [Fernanda Moreira] - CEO and Founder FM Coaching e DH
* [FM Coaching e DH] - Site oficial da sua escola de treinamento e desenvolvimento
* [phpMailer] - Lib to send E-mail

License
----

MIT

[//]:#
[Vinicius Mattos]: <mailto:vinimattos.rj@gmail.com>
[Fernanda Moreira]: <mailto:carreira@coachfernandamoreira.com.br>
[FM Coaching e DH]: <https://www.coachfernandamoreira.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>
