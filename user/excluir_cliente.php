<?php
    include_once("../config.inc.php");
    include_once('../sessao.php');
    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM clientes_aprovacao WHERE ID = '$id'");

    mysqli_close($conexao);

    echo "<h2>Cliente excluído</h2>";
    echo "<a href=?pg=lista_clientes> Voltar </a>";