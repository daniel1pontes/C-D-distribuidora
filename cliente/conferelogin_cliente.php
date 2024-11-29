<?php
    include_once('../config.inc.php');

    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];

    $sql = "SELECT * FROM clientes WHERE (cnpj= '$usuario' OR email = '$usuario') AND senha = '$senha'";

    $resultado = mysqli_query($conexao,$sql);
    
    if (mysqli_num_rows($resultado) == 1){
        $dados = mysqli_fetch_array($resultado);
        if($senha == $dados['senha']) {

            session_start();
            $_SESSION['user_id'] = $dados['ID'];
            $_SESSION['usuario'] = $dados['cnpj'];
            $_SESSION['nome'] = $dados['nome'];

            header("Location: ./?pg=inicial");
        }
        else{
            header("Location: ../?pg=form_login_cliente");
        }  
    }
    else{
        echo "CNPJ/email ou senha incorretos.";
        echo "<a href= ../?pg=form_login_cliente> <h3>Voltar</h3>";
    }
    
    mysqli_close($conexao);