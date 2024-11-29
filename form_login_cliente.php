<h1>login cliente</h1>
<form action="./cliente/conferelogin_cliente.php" metod="post">
    <input type="text" name="usuario" placeholder="CNPJ ou Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="submit" value="Entrar">
</form>
<a href="?pg=form_login_fornecedor">login fornecedor</a> <br> 
<a href="?pg=form_login_adm">login adm</a> <br> 
<a href="?pg=form_login_usu">login usuário interno</a>

<?php
