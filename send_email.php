<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "jefersonnochelli@hotmail.com";
    $subject = "Nova mensagem do site";
    $body = "Nome: $fullname\nEmail: $email\nMensagem:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Erro ao enviar o email. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Erro: Este script deve ser chamado via método POST.";
}
?>