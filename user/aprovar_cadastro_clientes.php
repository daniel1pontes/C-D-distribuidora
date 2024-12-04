<!DOCTYPE html>
<html>
<head>
    <style> 
        body { font-family: Arial, sans-serif; margin: 0px; padding: 20px; background-color: #f4f4f4; } 
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        .cliente, .mensagem, .produto, .usuario, .aprovacao { 
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            padding: 15px; 
            margin-bottom: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cliente b, .mensagem b, .produto b, .usuario b, .aprovacao b { color: #ff0000; }
        .cliente a, .mensagem a, .produto a, .usuario a, .aprovacao a { color: #007bff; text-decoration: none; margin-right: 10px; }
        .cliente a:hover, .mensagem a:hover, .produto a:hover, .usuario a:hover, .aprovacao a:hover { text-decoration: underline; }
        .cliente div, .mensagem div, .produto div, .usuario div, .aprovacao div { margin-bottom: 8px; }
    </style>
</head>
<body>

<br><h1>Aprovar/Reprovar clientes</h1>
<?php
include_once("../config.inc.php");
include_once('../sessao.php');

$sql = mysqli_query($conexao,"SELECT * FROM clientes_aprovacao");

while($cliente = mysqli_fetch_array($sql)){
    echo "<div class='aprovacao'>";
    echo "<div><strong>Razão social:</strong> $cliente[razao]</div>";
    echo "<div><strong>Nome fantasia:</strong> $cliente[nome]</div>";
    echo "<div><strong>CNPJ:</strong> $cliente[cnpj]</div>";
    echo "<div><strong>Endereço:</strong> $cliente[endereco]</div>";
    echo "<div><strong>Bairro:</strong> $cliente[bairro]</div>";
    echo "<div><strong>Número:</strong> $cliente[numero]</div>";
    echo "<div><strong>Cidade:</strong> $cliente[cidade]</div>";
    echo "<div><strong>Estado:</strong> $cliente[estado]</div>";
    echo "<div><strong>CEP:</strong> $cliente[cep]</div>";
    echo "<div><strong>Email:</strong> $cliente[email]</div>";
    echo "<div><strong>Telefone:</strong> $cliente[telefone]</div>";
    echo "<a href=?pg=reprovar_cliente&id=$cliente[ID]> <b>[X] Reprovar</b></a>";
    echo "<a href=?pg=aprovar_cliente&id=$cliente[ID]> <b>[X] Aprovar</b></a>";
    echo "</div>";
}

if(!$sql){
    echo "Não foi possível listar os clientes.";
}

mysqli_close($conexao);
?>
</body>
</html>

