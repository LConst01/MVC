<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos da Loja</h1>
    <ul>
        <?php foreach ($produtos as $produto):?>
            <li>
                <?php echo $produto['nome'] ?> - 
                <a href="index.php?id=<?php echo $produto['id']?>">Ver detalehes</a>
            </li>
        
        <?php endforeach;?>
    
</body>
</html>