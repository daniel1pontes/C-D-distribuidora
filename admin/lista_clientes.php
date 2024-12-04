<!DOCTYPE html>
<html>
<head>
    <style> 
        body { font-family: Arial, sans-serif; margin: 0px; padding: 0px; background-color: #f4f4f4; } 
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        .cliente { 
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            padding: 15px; 
            margin-bottom: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cliente b { color: #ff0000; }
        .cliente a { color: #007bff; text-decoration: none; }
        .cliente a:hover { text-decoration: underline; }
        .cliente div { margin-bottom: 8px; }
    </style>
</head>
<body>

<br><h1>Lista clientes</h1>
<?php
    include_once('../sessao.php');
    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM clientes");

    while($cliente = mysqli_fetch_array($sql)){
        echo "<div class='cliente'>";
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
        echo "<a href=?pg=excluir_clientes&id=$cliente[ID]> <b>[X] Excluir</b></a>";
        echo "</div>";
    }

    if(!$sql){
        echo "Não foi possível listar clientes.";
    }

    mysqli_close($conexao);
?>
</body>
</html>

