<?php 
class Tarefa {
    public static function todos() {

        if(session_status() === PHP_SESSION_NONE){
            session_start();
        }

        if(!isset($_SESSION['tarefas'])){
            $_SESSION['tarefas'] = [
                ['nome' => 'Varrer a casa', 'status' => 'pendente'],
                ['nome' => 'Ler um livro', 'status' => 'cocluído'],
                ['nome' => 'Lavar louça', 'status' => 'concluído'],
            ];
        }
        return $_SESSION['tarefas'];
    }

    public static function salvar($nome) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $novaTarefa =[
            'nome' => $nome,
            'status' => 'pendente'
        ];

        $_SESSION['tarefas'][] = $novaTarefa;
    

    }
}

?>