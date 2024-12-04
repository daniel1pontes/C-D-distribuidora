<br><h1>Cadastro produtos</h1>
<form action="" method="post">
    <input type="text" name="marca" placeholder="Marca" required>
    <input type="text" name="descricao" placeholder="Descrição do Produto" required>
    <input type="text" name="tipo_embalagem" placeholder="Tipo de embalagem" required>
    <input type="text" name="quantidade" placeholder="Quantidade" required>
    <input type="text" name="codigo_unidade" placeholder="Código de barras unidade" required>
    <input type="text" name="codigo_caixa" placeholder="Código de barras caixa" required>
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
include_once('../config.inc.php');
include_once('../sessao.php');
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

        $sql = $sql = "INSERT INTO produtos (marca, descricao, tipo_embalagem, quantidade, codigo_unidade, codigo_caixa) 
        VALUES ('$marca', '$descricao', '$tipo_embalagem', '$quantidade', '$codigo_unidade', '$codigo_caixa')";

        $query = mysqli_query($conexao,$sql);
        
        if ($sql){
            echo "produto cadastrado com sucesso.";
        } 
        else{
            echo "Erro ao cadastrar produto.";
        }
    }
}
mysqli_close($conexao);
