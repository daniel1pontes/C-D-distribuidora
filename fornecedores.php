<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logomarca Fornecedores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .gallery-container {
            max-width: 2300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f9;
        }

        .gallery-container .gallery {
            display: flex;
            flex-wrap: nowrap; /* Impede quebra de linha */
            gap: 50px; /* Espaço entre imagens */
            justify-content: flex-start; /* Alinha à esquerda */
            overflow-x: auto; /* Rolagem horizontal, se necessário */
            white-space: nowrap; /* Garante que as imagens não quebrem linha */
        }

        .gallery-container .gallery img {
            width: 200px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .gallery-container .gallery img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="gallery-container">
        <br><h1>Logomarca Fornecedores</h1>
        <div class="gallery">
            <?php
                // Diretório onde estão armazenadas as imagens
                $imageDir = "./fornimg";

                // Scaneia o diretório para buscar arquivos de imagem
                $images = array_diff(scandir($imageDir), array('.', '..'));

                // Exibe cada imagem encontrada
                foreach ($images as $image) {
                    // Apenas exibe arquivos de imagem válidos
                    $filePath = $imageDir . '/' . $image;
                    $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                    if (in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                        echo "<img src='$filePath' alt='Imagem'>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>

