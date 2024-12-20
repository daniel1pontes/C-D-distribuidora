<h1>Cadastro cliente</h1>
<form action="" method="post">
    <input type="text" name="razao" placeholder="Razão Social" required>
    <input type="text" name="nome" placeholder="Nome Fantasia" required>
    <input type="text" name="cnpj" placeholder="CNPJ" required>
    <input type="text" name="endereco" placeholder="Endereço" required>
    <input type="text" name="bairro" placeholder="Bairro" required>
    <input type="text" name="numero" placeholder="Número" required>
    <input type="text" name="cidade" placeholder="Cidade" required>
    <input type="text" name="estado" placeholder="Estado" required>
    <input type="text" name="cep" placeholder="CEP" required>
    <input type="text" name="telefone" placeholder="Número para contato" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Crie sua senha" required>
    <input type="submit" value="Enviar">
</form>

<?php
include_once('./config.inc.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $razao = $_REQUEST["razao"];
    $nome = $_REQUEST["nome"];
    $cnpj = $_REQUEST["cnpj"];
    $endereco = $_REQUEST["endereco"];
    $bairro = $_REQUEST["bairro"];
    $numero = $_REQUEST["numero"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    $cep = $_REQUEST["cep"];
    $email = $_REQUEST["email"];
    $telefone = $_REQUEST["telefone"];
    $senha = $_REQUEST["senha"];

    
    if(empty($razao) || empty($nome) || empty($cnpj) || empty($endereco) || empty($bairro) || 
        empty($numero) || empty($cidade)|| empty($estado)|| empty($cep)|| empty($email) || empty($telefone) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
    } 
    else{

        $sql = "INSERT INTO clientes_aprovacao (razao,nome,cnpj,endereco,bairro,numero,cidade,estado,cep,email,telefone,senha) 
            VALUES ('$razao','$nome','$cnpj','$endereco','$bairro','$numero','$cidade','$estado','$cep','$email','$telefone','$senha')";

        $query = mysqli_query($conexao,$sql);
        
        if ($sql){
            echo "<h2>Seu cadastro foi enviado e aguarda aprovação.</h2>";
        } 
        else{
            echo "<h2>Erro ao cadastrar cliente.</h2>";
        }
    }
}
mysqli_close($conexao);
