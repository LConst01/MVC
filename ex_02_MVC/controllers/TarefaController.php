<?php
require_once 'models/Tarefa.php';

class TarefaController {
    public function listar() {
        $tarefas = Tarefa::todos();

        include 'views/tarefa-lista.php';
    }
    public function criar() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = $_POST['tarefa'];

            Tarefa::salvar($nome);

            header('Location: index.php');
            exit;
        }
    }
}
?>
