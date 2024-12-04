<!DOCTYPE html>
<html>
<head>
    <style> 
        body { font-family: Arial, sans-serif; margin: 0px; padding: 0px; background-color: #f4f4f4; } 
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        .cliente, .mensagem, .produto { 
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            padding: 15px; 
            margin-bottom: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cliente b, .mensagem b, .produto b { color: #ff0000; }
        .cliente a, .mensagem a, .produto a { color: #007bff; text-decoration: none; }
        .cliente a:hover, .mensagem a:hover, .produto a:hover { text-decoration: underline; }
        .cliente div, .mensagem div, .produto div { margin-bottom: 8px; }
    </style>
</head>
<body>

<br><h1>Lista de produtos</h1>
<?php
include_once('../sessao.php');
include_once("../config.inc.php");

$sql = mysqli_query($conexao,"SELECT * FROM produtos");

while($produto = mysqli_fetch_array($sql)){
    echo "<div class='produto'>";
    echo "<div><strong>Marca:</strong> $produto[marca]</div>";
    echo "<div><strong>Descrição do produto:</strong> $produto[descricao]</div>";
    echo "<div><strong>Tipo de embalagem:</strong> $produto[tipo_embalagem]</div>";
    echo "<div><strong>Quantidade:</strong> $produto[quantidade]</div>";
    echo "<div><strong>Código de barras unidade:</strong> $produto[codigo_unidade]</div>";
    echo "<div><strong>Código de barras caixa:</strong> $produto[codigo_caixa]</div>";
    echo "<a href=?pg=excluir_produto&id=$produto[ID]> <b>[X] Excluir</b></a>";
    echo "</div>";
}

if(!$sql){
    echo "Não foi possível listar os produtos.";
}

mysqli_close($conexao);
?>
</body>
</html>
