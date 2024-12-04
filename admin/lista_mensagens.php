<h1>Mensagens</h1>
<?php
include_once('../sessao.php');
include_once("../config.inc.php");

$sql = mysqli_query($conexao,"SELECT * FROM mensagens");

while($mensagem = mysqli_fetch_array($sql)){
    echo "Nome: $mensagem[nome] <br>";
    echo "Email: $mensagem[email] <br>";
    echo "Assunto: $mensagem[assunto] <br>";
    echo "Mensagem: $mensagem[mensagem] <br>";
    echo "<a href=?pg=excluir_mensagem&id=$mensagem[ID]> <b>[X] Excluir</b></a>";
    echo "<hr>";
}

if(!$sql){
    echo "Não foi possível listar as mensagens.";
}

mysqli_close($conexao);
