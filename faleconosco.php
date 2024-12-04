<br><br><br><h1>Fale conosco</h1>

<form action="" method="post">
    <input type="text" name="nome" placeholder="nome" required> <br>
    <input type="email" name="email" placeholder="email" required> <br>
    <input type="text" name="assunto" placeholder="assunto" required> <br>
    <textarea name="mensagem" placeholder="mensagem" required></textarea> <br>
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
        background-color: #033b85;
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
        $nome = $_REQUEST['nome'];
        $email = $_REQUEST['email'];
        $assunto = $_REQUEST['assunto'];
        $mensagem = $_REQUEST['mensagem'];
        
        if(empty($nome) || empty($email) || empty($assunto) || empty($mensagem)){
            echo "Por favor, preencha todos os campos.";
        } 
        else{
    
            $sql = "INSERT INTO mensagens (nome,email,assunto,mensagem) VALUES ('$nome','$email','$assunto','$mensagem')";
    
            $query = mysqli_query($conexao,$sql);
            
            if ($sql){
                echo "<h2>Mensagem enviada com sucesso.</h2>";
            } 
            else{
                echo "<h2>Erro ao enviar mensagem.</h2>";
            }
        }
    }
    mysqli_close($conexao);
    