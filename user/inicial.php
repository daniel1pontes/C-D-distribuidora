<?php
include_once('../sessao.php');
include_once('../sessao.php');
if (logado()) {
   
    echo "<p><h2>Bem-vindo $_SESSION[usuario]</b>!</p></h2></p>";
} else {
    header("Location: ../?pg=form_login_cliente");
    exit();
}