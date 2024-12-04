<?php
    include_once("../config.inc.php");
    include_once('../sessao.php');
    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao,"DELETE FROM fornecedores_aprovacao WHERE ID = '$id'");

    mysqli_close($conexao);

    echo "<h2>Fornecedor reprovado</h2>";
    echo "<a href=?pg=aprovar_cadastro_fornecedores> Voltar </a>";