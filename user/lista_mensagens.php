<h1>Mensagem</h1>
<?php
include_once("../config.inc.php");
include_once('../sessao.php');
$sql = mysqli_query($conexao,"SELECT * FROM mensagens");

while($cliente = mysqli_fetch_array($sql)){
    echo "Nome: $cliente[nome] <br>";
    echo "Email: $cliente[email] <br>";
    echo "Assunto: $cliente[assunto] <br>";
    echo "Mensagem: $cliente[mensagem] <br>";
    echo "<a href=?pg=excluir_mensagem&id=$cliente[ID]> <b>[X] Excluir</b></a>";
    echo "<hr>";
}

if(!$sql){
    echo "Não foi possível ler as mensagens.";
}

mysqli_close($conexao);
