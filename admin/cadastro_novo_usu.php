<form action="" method="POST">
    <input type="text" name="nome" placeholder="Nome" required> <br>
    <input type="text" name="cpf" placeholder="CPF" required> <br>
    <input type="email" name="email" placeholder="Email" required> <br>
    <input type="password" name="senha" placeholder="Senha" required> <br>
    <input type="submit" value="Enviar">
</form>

<?php
    include_once('../config.inc.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_REQUEST["nome"];
        $cpf = $_REQUEST["cpf"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];

        if (empty($nome) || empty($cpf) || empty($email) || empty($senha)) {
            echo "Por favor, preencha todos os campos.";
        } 
        else{

            $sql = "INSERT INTO usuarios (nome,cpf,email,senha) VALUES ('$nome','$cpf','$email','$senha')";

            $query = mysqli_query($conexao,$sql);
            
            if ($sql){
                echo "Usuário cadastrado com sucesso.";
            } 
            else{
                echo "Erro ao cadastrar usuário: ";
            }
        }
    }
    mysqli_close($conexao);