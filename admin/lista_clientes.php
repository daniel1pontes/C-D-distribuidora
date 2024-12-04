<h1>Lista clientes</h1>
<style> body { font-family: Arial, sans-serif; margin: 20px; } 
h1 { color: #333; }
.cliente { border-bottom: 1px solid #ddd; padding: 10px 0; }
.cliente b { color: #ff0000; }
.cliente a { color: #007bff; text-decoration: none; }
.cliente a:hover { text-decoration: underline; }
</style>
<?php
    include_once('../sessao.php');
    include_once("../config.inc.php");

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
        echo "<a href=?pg=excluir_clientes&id=$cliente[ID]> <b>[X] Excluir</b></a>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Não foi possível listar clientes.";
    }

    mysqli_close($conexao);
