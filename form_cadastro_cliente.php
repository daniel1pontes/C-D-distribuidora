<br><h1>Cadastro cliente</h1>
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
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #483D8B;
        margin-bottom: 20px;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    form input[type="text"],
    form input[type="email"],
    form input[type="password"],
    form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    form textarea {
        resize: none;
        height: 100px;
    }

    form input[type="submit"] {
        background-color: #483D8B;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
        transition: background-color 0.3s;
    }

    form input[type="submit"]:hover {
        background-color: #FF7100;
    }

    form input::placeholder,
    form textarea::placeholder {
        color: #aaa;
    }

    form input:focus,
    form textarea:focus {
        outline: none;
        border-color: #483D8B;
        box-shadow: 0 0 5px rgba(72, 61, 139, 0.5);
    }
</style>
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
