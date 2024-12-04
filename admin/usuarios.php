<h1>Lista de usuário/equipe</h1>

<p><a href="?pg=cadastro_novo_usu">Cadastrar Novo Usuário</a></p>

<?php
    include_once('../sessao.php');
    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM usuarios");

    while($usuario = mysqli_fetch_array($sql)){
        echo "Nome: $usuario[nome] <br>";
        echo "CPF: $usuario[cpf] <br>";
        echo "Email: $usuario[email] <br>";
        echo "<a href=?pg=excluir_usu&id=$usuario[ID]> <b>[X] Excluir</b></a>";
        echo "<hr>";
    }

    mysqli_close($conexao);