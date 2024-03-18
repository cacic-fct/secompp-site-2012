<?php

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$mensagem = $_POST['mensagem'];

$to      = 'secompp@fct.unesp.br';
$subject = 'CONTATO - SITE - ' . $nome;
$message = $mensagem;
$headers = 'From: ' . $email .  "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);



?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
alert ("SECOMPP 2012  \nObrigado por seu interesse. Mensagem enviada com sucesso.\nPor favor, aguarde que em breve retornaremos.")
</SCRIPT>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
window.location="contato.php";
</SCRIPT>
