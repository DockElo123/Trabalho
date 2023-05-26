<?php
require_once('dados.php');

if (isset($_GET['indice'])) {
    $indice = $_GET['indice'];

    if (array_key_exists($indice, $produtos)) {

        $produto = $produtos[$indice];
    } else {

        die('Índice inválido!');
    }
} else {

    die('Índice não enviado!');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $produto['nome'] ?> - Munchies Foods</title>
    <link rel="stylesheet" href="estilo2.css">
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


    
    <div id = "descricao">
        
        <h1><?= $produto['nome'] ?></h1>
        <h3>Preço: R$<?= number_format($produto['preco'], 2, ',', '.') ?></h3>
        <h3>Descrição: <?= $produto['descricao'] ?></h3>
    </div> 

    
</body>
<style>
    body{
        background-image: url('<?=$produto['imagem']?>');
        
    }
</style>
</html>

<?php

?>