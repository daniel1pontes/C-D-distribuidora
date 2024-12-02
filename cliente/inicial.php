<?php
include_once('../sessao.php');
include_once('../sessao.php');
if (logado()) {
   
    echo "<p><h2>Bem-vindo $_SESSION[nome]</b>!</p></h2></p>";
} else {
    echo "<p><h2>Erro ao acessar a sessão!</h2></p>";
    echo "<a href= ../?pg=form_login_cliente> <h3>Voltar</h3>";
    exit();
}
