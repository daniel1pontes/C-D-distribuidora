<?php
    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM clientes WHERE ID = '$id'");

    mysqli_close($conexao);

    echo "<h2>Cliente excluído</h2>";
    echo "<a href=?pg=lista_clientes> Voltar </a>";