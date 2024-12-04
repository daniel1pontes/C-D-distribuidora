<?php
    include_once("../config.inc.php");
    include_once('../sessao.php');
    $id = $_REQUEST['id'];
    
    $busca = mysqli_query($conexao, "SELECT * FROM fornecedores_aprovacao WHERE ID = '$id'");

    if (mysqli_num_rows($busca) == 1){
        $dados = mysqli_fetch_assoc($busca);

        $razao = $dados["razao"];
        $nome = $dados["nome"];
        $cnpj = $dados["cnpj"];
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

        $realocando = "INSERT INTO fornecedores (razao,nome,cnpj,endereco,bairro,
            numero,cidade,estado,cep,email,ramo,telefone,senha) 
            VALUES ('$razao','$nome','$cnpj','$endereco',
            '$bairro','$numero','$cidade','$estado','$cep','$email','$ramo','$telefone','$senha')";

        mysqli_query($conexao, $realocando);  
        
        $apagando = "DELETE FROM fornecedores_aprovacao WHERE ID = '$id'";

        mysqli_query($conexao, $apagando);

        echo "<h2>forncedor aprovado.<br></h2>";
    }
    else{
        echo "<h2>Erro ao aprovar fornecedor.</h2>";
    }

    mysqli_close($conexao);
    echo "<a href=?pg=aprovar_cadastro_fornecedores> Voltar </a>";