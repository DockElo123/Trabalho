<?php
require_once('dados.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Munchies Foods</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur:ital@1&family=Kanit&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <div class="container">
        <div class="top-bar-container">
            <div class="top-bar-fixed">
                <div class="top-bar-content"></div>
                <div class="top-bar-color">
                    <a href="index.php"><img id="logo1" src="image/logo1.png" href="index.php"></a>
                </div>
            </div>
        </div>
    </div>
    </header>

    <nav class="banner">
    </nav>

    <div class="mid-bot-banner">
        <h3>OFERTAS DA SEMANA!!</h3>
    </div>

    </section>

    <?php foreach ($produtos as $indice => $produto): ?>
        <section class="products1">
        <div class = "produtos">
            <table>
            <tr>
            <td><h2><a id="nome_produto" href="detalhes.php?indice=<?= $indice ?>"><?= $produto['nome'] ?></a></h2>
            <p class="legenda"><?= $produto['descricao'] ?></p>
            <div id="preco"><p class="legenda" id="style_preco">R$<?= number_format($produto['preco'], 2, ',', '.') ?></p></div>
            <td><img id="foto" src='<?= $produto['imagem']?>'>
            </tr>
            </table>
        </div>    
        </section>
        <div class="product-bottom"></div>
    <?php endforeach; ?>
</body>
</html>
