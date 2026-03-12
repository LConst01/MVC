<?php 
require_once 'controllers/ProdutoController.php';

$controller = new ProdutoController();

if (isset($_GET['id'])){
    $controller-> visualizar($_GET['id']);
}else{
    $controller-> listar();
}
?>