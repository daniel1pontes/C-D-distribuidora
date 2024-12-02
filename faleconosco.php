<h1>fale conosco</h1>

<form action="" method="post">
    <input type="text" name="nome" placeholder="nome" required> <br>
    <input type="email" name="email" placeholder="email" required> <br>
    <input type="text" name="assunto" placeholder="assunto" required> <br>
    <textarea name="mensagem" placeholder="mensagem" required></textarea> <br>
    <input type="submit" value="Enviar">
</form>

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
    