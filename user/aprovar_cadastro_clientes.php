<h1>Aprovar/Reprovar clientes</h1>
<?php
include_once("../config.inc.php");
include_once('../sessao.php');
$sql = mysqli_query($conexao,"SELECT * FROM clientes_aprovacao");

while($cliente = mysqli_fetch_array($sql)){
    echo "Razão social: $cliente[razao] <br>";
    echo "Nome fantasia: $cliente[nome] <br>";
    echo "cnpj: $cliente[cnpj] <br>";
    echo "Endereço: $cliente[endereco] <br>";
    echo "Bairro: $cliente[bairro] <br>";
    echo "Número: $cliente[numero] <br>";
    echo "Cidade: $cliente[cidade] <br>";
    echo "Estado: $cliente[estado] <br>";
    echo "CEP: $cliente[cep] <br>";
    echo "Email: $cliente[email] <br>";
    echo "Telefone: $cliente[telefone] <br>";
    echo "<a href=?pg=reprovar_cliente&id=$cliente[ID]> <b>[X] Reprovar</b></a>";
    echo "<a href=?pg=aprovar_cliente&id=$cliente[ID]> <b>[X] Aprovar</b></a>";
    echo "<hr>";
}

if(!$sql){
    echo "Não foi possível listar os clientes.";
}

mysqli_close($conexao);
