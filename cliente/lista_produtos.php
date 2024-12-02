<h1>Lista de produtos</h1>
<?php
include_once('../sessao.php');
include_once("../config.inc.php");

$sql = mysqli_query($conexao,"SELECT * FROM produtos");

while($produto = mysqli_fetch_array($sql)){
    echo "Marca: $produto[marca] <br>";
    echo "Descrição do produto: $produto[descricao] <br>";
    echo "Tipo de embalagem: $produto[tipo_embalagem] <br>";
    echo "Quantidade: $produto[quantidade] <br>";
    echo "Código de barras unidade: $produto[codigo_unidade] <br>";
    echo "Código de barras caixa: $produto[codigo_caixa] <br>";
    echo "<hr>";
}

if(!$sql){
    echo "Não foi possível listar os produtos.";
}

mysqli_close($conexao);