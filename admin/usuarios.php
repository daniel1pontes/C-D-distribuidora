<!DOCTYPE html>
<html>
<head>
    <style> 
        body { font-family: Arial, sans-serif; margin: 0px; padding: 0px; background-color: #f4f4f4; } 
        h1 { color: #333; text-align: center; margin-bottom: 20px; }
        .cliente, .mensagem, .produto, .usuario { 
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            padding: 15px; 
            margin-bottom: 15px; 
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .cliente b, .mensagem b, .produto b, .usuario b { color: #ff0000; }
        .cliente a, .mensagem a, .produto a, .usuario a { color: #007bff; text-decoration: none; }
        .cliente a:hover, .mensagem a:hover, .produto a:hover, .usuario a:hover { text-decoration: underline; }
        .cliente div, .mensagem div, .produto div, .usuario div { margin-bottom: 8px; }
    </style>
</head>
<body>

<br><h1>Lista de usuário/equipe</h1>
<p><a href="?pg=cadastro_novo_usu" class="button">Cadastrar Novo Usuário</a></p><br>

<?php
include_once('../sessao.php');
include_once("../config.inc.php");

$sql = mysqli_query($conexao,"SELECT * FROM usuarios");

while($usuario = mysqli_fetch_array($sql)){
    echo "<div class='usuario'>";
    echo "<div><strong>Nome:</strong> $usuario[nome]</div>";
    echo "<div><strong>CPF:</strong> $usuario[cpf]</div>";
    echo "<div><strong>Email:</strong> $usuario[email]</div>";
    echo "<a href=?pg=excluir_usu&id=$usuario[ID]> <b>[X] Excluir</b></a>";
    echo "</div>";
}

mysqli_close($conexao);
?>
</body>
</html>
