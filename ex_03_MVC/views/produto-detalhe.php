<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalhes do produto</h1>
      
    <p><strong>ID:</strong> <?php echo $produto['id'];?></p>
    <p><strong>Nome:</strong> <?php echo $produto['nome'];?></p>
    <p><strong>Preço:</strong> R$ <?php echo number_format( $produto['preço'], 2, ',','.');?></p>
    
    <a href="index.php">Voltar para a lsita</a>
</body>
</html>