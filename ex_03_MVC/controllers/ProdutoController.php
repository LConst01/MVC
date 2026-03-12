<?php 
require_once 'models/Produto.php';

class ProdutoController { 
    public function listar() {
        $produtos = Produto::todos();

        include 'views/produto-lista.php';
    }

    public function visualizar($id){
        $produto = Produto::buscarPorId($id);

        if ($produto) {
            include 'views/produto-detalhe.php';
        } else {
            echo "Produto não encontrado!";
        }
    }
}

?>