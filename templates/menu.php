<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/a11f461a5a.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><img src="./img/cddist.jpg"></div>
            <div class="menu">
                <nav>
                    <a href="?pg=inicial">Inicio</a>
                    <a href="?pg=fornecedores">Fornecedores</a>
                    <a href="?pg=faleconosco">Fale Conosoco</a>
                    <a href="?pg=form_cadastro_cliente">Cadastro Clientes</a>
                    <a href="?pg=form_cadastro_fornecedor">Cadastro fornecedor</a>
                    <a href="?pg=form_login_cliente">Login</a>
                </nav>
            </div>
            <style>
                .logo img {
                  width: 100%; /* Ajusta a largura da imagem para preencher o contêiner */
                  max-width: 200px; /* Define um tamanho máximo para a largura */
                  height: auto; /* Mantém a proporção da imagem */
                  display: block; /* Remove o espaçamento inferior do elemento inline */
                  margin: 0 auto; /* Centraliza a imagem, se necessário */
                }
                .logo {
                  text-align: center; /* Alinha a imagem dentro do contêiner, se necessário */
                }

                @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Titillium Web", sans-serif;
}

.container{
    max-width: 2300px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

header{
    background-color: #d3d3d3;
    width: 100%;
    padding: 10px;
}

.logo,.sociais{
    width: 15%;
}

.logo img{
    width: 200 px;
    cursor: pointer;
}

.menu{
    width: 70%;
}

.menu nav a{
    color: #483D8B;
    text-decoration: none;
    padding-right: 50px;
    font-size: 18px;
    position: relative;
    
}

.menu nav a::after{
    content: " ";
    width: 0px;
    height: 4px;
    background-image: linear-gradient(45deg, #FF2500, #FF7100);
    position: absolute;
    top: 25px;
    left: 0;
    transition: width 0.5s;
}

.menu nav a:hover::after{
    width: 30px;
}

.sociais button{
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 8px;
    cursor: pointer;

}

.sociais button i{
    font-size: 25px;
}
              </style>
            <div class="sociais">
                <button><i class="fa-brands fa-instagram"></i></button>
                <button><i class="fa-brands fa-facebook"></i></button>
                <button><i class="fa-brands fa-linkedin"></i></button>
            </div>
        </div>
    </header>
</body>
</html>
