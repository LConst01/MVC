<?php
require_once 'models/Tarefa.php';

class TarefaController {
    public function listar() {
        $tarefas = Tarefa::todos();

        include 'views/tarefa-lista.php';
    }
}
?>
