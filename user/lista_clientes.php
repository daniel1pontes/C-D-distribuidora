<h1>Lista clientes</h1>
<?php
    include_once("../config.inc.php");
    include_once('../sessao.php');
    $sql = mysqli_query($conexao,"SELECT * FROM clientes");

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
        echo "<a href=?pg=excluir_cliente&id=$cliente[ID]> <b>[X] Excluir</b></a>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Não foi possível listar os clientes.";
    }

    mysqli_close($conexao);
