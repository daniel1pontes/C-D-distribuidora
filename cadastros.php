<?php
    include_once('./config.inc.php');

    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $sql = "INSERT INTO usuarios (nome,cpf,email,senha) VALUES ('$nome','$cpf','$email','$senha')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h3>Cadastro realizado</h3>";
    }else{
        echo "<h3>Tente novamente</h3>";
    }

    mysqli_close($conexao);