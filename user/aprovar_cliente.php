<?php
    include_once("../config.inc.php");

    $id = $_REQUEST['id'];
    
    $busca = mysqli_query($conexao, "SELECT * FROM clientes_aprovacao WHERE ID = '$id'");

    if (mysqli_num_rows($busca) == 1){
        $dados = mysqli_fetch_assoc($busca);

        $razao = $dados["razao"];
        $nome = $dados["nome"];
        $cnpj = $dados["cnpj"];
        $inscricao = $dados["inscricao"];
        $endereco = $dados["endereco"];
        $bairro = $dados["bairro"];
        $numero = $dados["numero"];
        $cidade = $dados["cidade"];
        $estado = $dados["estado"];
        $cep = $dados["cep"];
        $email = $dados["email"];
        $ramo = $dados["ramo"]; 
        $telefone = $dados["telefone"];
        $senha = $dados["senha"];

        $realocando = "INSERT INTO clientes (razao,nome,cnpj,inscricao,endereco,bairro,
            numero,cidade,estado,cep,email,ramo,telefone,senha) 
            VALUES ('$razao','$nome','$cnpj','$inscricao','$endereco',
            '$bairro','$numero','$cidade','$estado','$cep','$email','$ramo','$telefone','$senha')";

        mysqli_query($conexao, $realocando);  
        
        $apagando = "DELETE FROM clientes_aprovacao WHERE ID = '$id'";

        mysqli_query($conexao, $apagando);

        echo "<h2>Cliente aprovado <br></h2>";
    }
    else{
        echo "<h2>Erro ao aprovar cliente.</h2>";
    }

    mysqli_close($conexao);
    echo "<a href=?pg=aprovar_cadastro_clientes> Voltar </a>";