<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarefas a Cumprir</h1>
    <form action="index.php" method="POST">
        <input type="text" name="tarefa" placeholder="Digite a nova tarefa" required>
        <button type="submit">Adicionar</button>

    </form>
    <ul>
        <?php foreach ($tarefas as $tarefa): ?>
            <li><?php echo $tarefa['nome']?> - <?php echo $tarefa['status']; ?></li>

        <?php endforeach;?>

    </ul>
</body>
</html>

