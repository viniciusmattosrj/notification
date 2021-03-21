[![pipeline status](https://github.com/viniciusmattosrj/notification/badges/releaseCandidate/pipeline.svg)](https://github.com/viniciusmattosrj/notification/commits/releaseCandidate)

## Requerimentos

- Install <a href="https://docs.docker.com/install/">Docker</a>
- Install <a href="https://docs.docker.com/compose/install/">docker-compose</a>
- Composer
- PHP &ge; 7.3.22

### Sobre

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

Note que toda a configuração do envio do e-mail está utilizando o método mágico construtor! Uma vez invocado o método construtor dentro da sua aplicação, seu sistema estará apto a efetuar os disparos.

### Developers

- [Vinicius Mattos] - Desenvolvedor desta biblioteca
- [Fernanda Moreira] - CEO and Founder FM Coaching e DH
- [FM Coaching e DH] - Site oficial da sua escola de treinamento e desenvolvimento
- [phpMailer] - Lib to send E-mail

### Instalação

Veja `.env.example` as [instruções](docs/installation.md) sobre as variáveis de ambiente.

Para instalação verifique **[installation documentation](docs/installation.md)**.

### Contribuições

Caso identifique pontos que possam ser aprimorados, será um prazer analisar o seu PR. ;-)

### License

[//]: #
[vinicius mattos]: mailto:vinimattos.rj@gmail.com
[fernanda moreira]: mailto:carreira@coachfernandamoreira.com.br
[fm coaching e dh]: https://www.coachfernandamoreira.com.br
[phpmailer]: https://github.com/PHPMailer/PHPMailer

[MIT](https://choosealicense.com/licenses/mit/)
