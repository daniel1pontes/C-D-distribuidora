<h1>Lista Fornecedores</h1>
<?php
    include_once("../config.inc.php");
    include_once('../sessao.php');
    $sql = mysqli_query($conexao,"SELECT * FROM fornecedores");

    while($fornecedor = mysqli_fetch_array($sql)){
        echo "Razão social: $fornecedor[razao] <br>";
        echo "Nome fantasia: $fornecedor[nome] <br>";
        echo "cnpj: $fornecedor[cnpj] <br>";
        echo "Endereço: $fornecedor[endereco] <br>";
        echo "Bairro: $fornecedor[bairro] <br>";
        echo "Número: $fornecedor[numero] <br>";
        echo "Cidade: $fornecedor[cidade] <br>";
        echo "Estado: $fornecedor[estado] <br>";
        echo "CEP: $fornecedor[cep] <br>";
        echo "Ramo: $fornecedor[ramo] <br>";
        echo "Email: $fornecedor[email] <br>";
        echo "Telefone: $fornecedor[telefone] <br>";
        echo "<a href=?pg=excluir_fornecedor&id=$fornecedor[ID]> <b>[X] Excluir</b></a>";
        echo "<hr>";
    }

    if(!$sql){
        echo "Não foi possível listar os fornecedores";
    }

    mysqli_close($conexao);
