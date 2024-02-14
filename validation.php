<?php
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, "telefone", FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_STRING);

#variaveis para enviar um email
$to = "lucassilvardgs12@gmail.com";
$subject = "Novo contato pelo site";
$message = "Nome : $nome
            Telefone : $telefone
            Mensagem : $msg";
$headers = "sendmail_from : lucassilvardgs12@gmail.com";
#Enviando para o email

try{
    mail($to, $subject, $message, $headers);
    echo "Obrigado, em breve entramos em contato";
}catch(Exception $error){
    echo "Erro ao enviar o seu contato, tente novamente mais tarde";
}