<?php
include_once('./templates/menu.php');
include_once('../sessao.php');

if(empty($_SERVER['QUERY_STRING'])){
    $var = "inicial.php";
    include_once($var);
}else{
    $pg = $_GET['pg'];
    include_once("$pg.php");
}

include_once('./templates/rodape.php');