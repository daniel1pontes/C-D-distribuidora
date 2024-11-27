<h1>Cadastrar clientes</h1>
<form action="" method="post">
    <input type="text" name="razao" placeholder="Razão Social" required>
    <input type="text" name="nome" placeholder="Nome Fantasia" required>
    <input type="text" name="cnpj" placeholder="CNPJ" required>
    <input type="text" name="inscricao" placeholder="Inscrição Estadual" required>
    <input type="text" name="endereco" placeholder="Endereço" required>
    <input type="text" name="bairro" placeholder="Bairro" required>
    <input type="text" name="numero" placeholder="Número" required>
    <input type="text" name="cidade" placeholder="Cidade" required>
    <input type="text" name="estado" placeholder="Estado" required>
    <input type="text" name="cep" placeholder="CEP" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="ramo" placeholder="Ramo de Atividade" required>
    <input type="text" name="telefone" placeholder="Número para contato" required>
    <input type="submit" value="Enviar">
</form>

<?php
include_once('../config.inc.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $razao = $_REQUEST["razao"];
    $nome = $_REQUEST["nome"];
    $cnpj = $_REQUEST["cnpj"];
    $inscricao = $_REQUEST["inscricao"];
    $endereco = $_REQUEST["endereco"];
    $bairro = $_REQUEST["bairro"];
    $numero = $_REQUEST["numero"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    $cep = $_REQUEST["cep"];
    $email = $_REQUEST["email"];
    $ramo = $_REQUEST["ramo"]; 
    $telefone = $_REQUEST["telefone"];
    
    if(empty($razao) || empty($nome) || empty($cnpj) || empty($inscricao) || empty($endereco) || empty($bairro) || 
        empty($numero) || empty($cidade)|| empty($estado)|| empty($cep)|| empty($email)|| empty($ramo)|| empty($telefone)) {
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
