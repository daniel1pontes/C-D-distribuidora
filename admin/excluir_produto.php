<?php

    include_once('../sessao.php');
    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM produtos WHERE ID = '$id'");

    mysqli_close($conexao);

    echo "<h2>Produto excluído</h2>";
    echo "<a href=?pg=lista_produtos> Voltar </a>";