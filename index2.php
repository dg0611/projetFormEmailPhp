<?php


if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['message']);

    $to = "diego.goncalves1106@hotmail.com";
    $subject = "Contato Formulário";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "Mensagem: ".$mensagem;

    $header = "from:diego@prog.com"."\r\n"."reply-to:".$email."\e\n". // tenque ser o mesmo from que exista no dominio 
                "x=Mailer:PHP/".phpversion();


    if (mail($to,$subject,$body,$header)){
        echo("Email enviado com sucesso!!");
    }else{
        echo("Não foi possível enviar o email!!");
    }
}





?>