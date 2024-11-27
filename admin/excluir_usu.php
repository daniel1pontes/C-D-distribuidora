<?php
    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM usuarios WHERE ID = '$id'");

    mysqli_close($conexao);

    echo "<h2>Usuario excluído</h2>";
    echo "<a href=?pg=usuarios> Voltar </a>";