<!DOCTYPE html>
<html>
<head>
    <style> 
        body { font-family: Arial, sans-serif; margin: 0px; padding: 0px; background-color: #f4f4f4; } 
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        .cliente, .mensagem { 
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            padding: 15px; 
            margin-bottom: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cliente b, .mensagem b { color: #ff0000; }
        .cliente a, .mensagem a { color: #007bff; text-decoration: none; }
        .cliente a:hover, .mensagem a:hover { text-decoration: underline; }
        .cliente div, .mensagem div { margin-bottom: 8px; }
    </style>
</head>
<body>

<br><h1>Mensagens</h1>
<?php
include_once('../sessao.php');
include_once("../config.inc.php");

$sql = mysqli_query($conexao,"SELECT * FROM mensagens");

while($mensagem = mysqli_fetch_array($sql)){
    echo "<div class='mensagem'>";
    echo "<div><strong>Nome:</strong> $mensagem[nome]</div>";
    echo "<div><strong>Email:</strong> $mensagem[email]</div>";
    echo "<div><strong>Assunto:</strong> $mensagem[assunto]</div>";
    echo "<div><strong>Mensagem:</strong> $mensagem[mensagem]</div>";
    echo "<a href=?pg=excluir_mensagem&id=$mensagem[ID]> <b>[X] Excluir</b></a>";
    echo "</div>";
}

if(!$sql){
    echo "Não foi possível listar as mensagens.";
}

mysqli_close($conexao);
?>
</body>
</html>
