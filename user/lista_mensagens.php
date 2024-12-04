<!DOCTYPE html>
<html>
<head>
    <style> 
        body { font-family: Arial, sans-serif; margin: 0px; padding: 20px; background-color: #f4f4f4; } 
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        .cliente, .mensagem, .produto, .usuario, .aprovacao, .fornecedor { 
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            padding: 15px; 
            margin-bottom: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cliente b, .mensagem b, .produto b, .usuario b, .aprovacao b, .fornecedor b { color: #ff0000; }
        .cliente a, .mensagem a, .produto a, .usuario a, .aprovacao a, .fornecedor a { color: #007bff; text-decoration: none; margin-right: 10px; }
        .cliente a:hover, .mensagem a:hover, .produto a:hover, .usuario a:hover, .aprovacao a:hover, .fornecedor a:hover { text-decoration: underline; }
        .cliente div, .mensagem div, .produto div, .usuario div, .aprovacao div, .fornecedor div { margin-bottom: 8px; }
    </style>
</head>
<body>

<h1>Mensagem</h1>
<?php
include_once("../config.inc.php");
include_once('../sessao.php');

$sql = mysqli_query($conexao,"SELECT * FROM mensagens");

while($cliente = mysqli_fetch_array($sql)){
    echo "<div class='mensagem'>";
    echo "<div><strong>Nome:</strong> $cliente[nome]</div>";
    echo "<div><strong>Email:</strong> $cliente[email]</div>";
    echo "<div><strong>Assunto:</strong> $cliente[assunto]</div>";
    echo "<div><strong>Mensagem:</strong> $cliente[mensagem]</div>";
    echo "<a href=?pg=excluir_mensagem&id=$cliente[ID]> <b>[X] Excluir</b></a>";
    echo "</div>";
}

if(!$sql){
    echo "<div class='mensagem'><h2>Não foi possível ler as mensagens.</h2></div>";
}

mysqli_close($conexao);
?>
</body>
</html>
