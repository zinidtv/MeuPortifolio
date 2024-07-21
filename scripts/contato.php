<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $msg = addslashes($_POST['msg']);

    $destinatario = "zinidgames@gmail.com";
    $assunto = "Prospecção de cliente - Agência DNZ";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$msg;
    $cabecalho = "From: alexandrehdinizjev@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion()

    if(mail($destinatario,$assunto,$corpo,$cabecalho)) {
        echo("Email enviado com sucesso!");
    } else {
        echo("[ERRO] Sua mensagem não foi enviada, verifique os dados e tente novamente!");
    }
?>