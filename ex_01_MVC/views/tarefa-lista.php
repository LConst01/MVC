<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarefas a Cumprir</h1>
    <ul>
        <?php foreach ($tarefas as $tarefa): ?>
            <li><?php echo $tarefa['nome']?> - <?php echo $tarefa['status']; ?></li>

        <?php endforeach;?>
    </ul>
</body>
</html>

