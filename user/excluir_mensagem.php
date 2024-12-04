<?php
    include_once("../config.inc.php");
    include_once('../sessao.php');
    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM mensagens WHERE ID = '$id'");

    mysqli_close($conexao);

    echo "<h2>Mensagem excluída</h2>";
    echo "<a href=?pg=lista_mensagens> Voltar </a>";