<?php 
require_once 'models/Produto.php';

class ProdutoController { 
    public function litar(){
        $produto = Produto::todos();

        include 'views/produto-lista.php'
    }

}

?>