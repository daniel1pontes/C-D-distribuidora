<br><h1>Login Fornecedor</h1>
<form action="./fornecedor/conferelogin_fornecedor.php" metod="post">
    <input type="text" name="usuario" placeholder="CNPJ ou Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="submit" value="Entrar">
</form>

<a href="?pg=form_login_cliente">login Cliente</a> <br> 
<a href="?pg=form_login_adm">Login Adm</a> <br> 
<a href="?pg=form_login_usu">Login Usuário Interno</a>

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