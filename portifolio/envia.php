<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "leo.ooosla@gmail.com";
$assunto = "Coleta de dados";

$corpo = "Nome: " . $nome . "\n";
$corpo .= "E-mail: " . $email . "\n";
$corpo .= "Telefone: " . $telefone . "\n";

$cabeca = "From: xxxxxartigo157xxxxxx@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer: PHP/".phpversion();

// Agora, você pode enviar o e-mail usando a função mail() do PHP:
if (mail($para, $assunto, $corpo, $cabeca)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Erro ao enviar o e-mail.";
}
?>
