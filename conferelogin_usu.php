<?php
    include_once('./config.inc.php');

    $usuario = $_REQUEST['usuario'];
    $senha = $_REQUEST['senha'];

    $sql = "SELECT * FROM usuarios WHERE (cpf = '$usuario' OR email = '$usuario') AND senha = '$senha'";

    $resultado = mysqli_query($conexao,$sql);
    
    if (mysqli_num_rows($resultado) == 1){
        $dados = mysqli_fetch_array($resultado);
        
            $_SESSION['user_id'] = $dados['id'];
            $_SESSION['usuario'] = $dados['usuario'];
    
            header("Location: ./user/?pg=index");
    }
    else{
        header("Location: ./?pg=form_login_usu");
    }
    
    mysqli_close($conexao);