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

<h1>Aprovar/Reprovar clientes</h1>
<?php
include_once("../config.inc.php");
include_once('../sessao.php');

$id = $_REQUEST['id'];

$busca = mysqli_query($conexao, "SELECT * FROM clientes_aprovacao WHERE ID = '$id'");

if (mysqli_num_rows($busca) == 1){
    $dados = mysqli_fetch_assoc($busca);

    $razao = $dados["razao"];
    $nome = $dados["nome"];
    $cnpj = $dados["cnpj"];
    $endereco = $dados["endereco"];
    $bairro = $dados["bairro"];
    $numero = $dados["numero"];
    $cidade = $dados["cidade"];
    $estado = $dados["estado"];
    $cep = $dados["cep"];
    $email = $dados["email"];
    $telefone = $dados["telefone"];
    $senha = $dados["senha"];

    $realocando = "INSERT INTO clientes (razao,nome,cnpj,endereco,bairro,
        numero,cidade,estado,cep,email,telefone,senha) 
        VALUES ('$razao','$nome','$cnpj','$endereco',
        '$bairro','$numero','$cidade','$estado','$cep','$email','$telefone','$senha')";

    mysqli_query($conexao, $realocando);  
    
    $apagando = "DELETE FROM clientes_aprovacao WHERE ID = '$id'";

    mysqli_query($conexao, $apagando);

    echo "<div class='aprovacao'><h2>Cliente aprovado.<br></h2></div>";
} else {
    echo "<div class='aprovacao'><h2>Erro ao aprovar cliente.</h2></div>";
}

mysqli_close($conexao);
echo "<a href=?pg=aprovar_cadastro_clientes class='button'>Voltar</a>";
?>
</body>
</html>
