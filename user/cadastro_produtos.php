<h1>Cadastro produtos</h1>
<form action="" method="post">
    <input type="text" name="marca" placeholder="Marca" required>
    <input type="text" name="descricao" placeholder="Descrição do Produto" required>
    <input type="text" name="tipo_embalagem" placeholder="Tipo de embalagem" required>
    <input type="text" name="quantidade" placeholder="Quantidade" required>
    <input type="text" name="codigo_unidade" placeholder="Código de barras unidade" required>
    <input type="text" name="codigo_caixa" placeholder="Código de barras caixa" required>
    <input type="submit" value="Enviar">
</form>

<?php 
include_once('../config.inc.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $marca = $_REQUEST["marca"];
    $descricao = $_REQUEST["descricao"];
    $tipo_embalagem = $_REQUEST["tipo_embalagem"];
    $quantidade = $_REQUEST["quantidade"];
    $codigo_unidade = $_REQUEST["codigo_unidade"];
    $codigo_caixa = $_REQUEST["codigo_caixa"];
    
    if(empty($marca) || empty($descricao) || empty($tipo_embalagem) || empty($quantidade) ||empty($codigo_unidade) || empty($codigo_caixa)){
        echo "Por favor, preencha todos os campos.";
    } 
    else{

        $sql = "INSERT INTO clientes (razao,nome,cnpj,inscricao,endereco,bairro,numero,cidade,estado,cep,email,ramo,telefone) 
            VALUES ('$razao','$nome','$cnpj','$inscricao','$endereco','$bairro','$numero','$cidade','$estado','$cep','$email','$ramo','$telefone')";

        $query = mysqli_query($conexao,$sql);
        
        if ($sql){
            echo "Cliente cadastrado com sucesso.";
        } 
        else{
            echo "Erro ao cadastrar cliente.";
        }
    }
}
mysqli_close($conexao);
