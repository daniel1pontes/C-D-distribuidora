<?php
    include_once('./config.inc.php');

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO mensagens (nome,email,assunto,mensagem) VALUES ('$nome','$email','$assunto','$mensagem')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Mensagem enviada com sucesso.</h2>";
    }else{
        echo "<h2>Erro ao enviar mensagem.</h2>";
    }

    mysqli_close($conexao);