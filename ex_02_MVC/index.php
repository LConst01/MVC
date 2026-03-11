<?php 
require_once 'controllers/TarefaController.php';

$controller = new TarefaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller->criar();
}else{
    $controller->listar();
}
?>