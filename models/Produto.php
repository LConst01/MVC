<?php
//DEFINE O QUE O SISTEMA É !
///Model é responsável pelos dados
class Produtos {
    public static function todos() {
        return [
            ['nome' => 'Teclado Mecânico', 'preco' => 250],
            ['nome' => 'Mouse Gamer', 'preco' => 150],
            ['nome' => 'Monitor 144hz', 'preco' => 1200]
        ];
    }
}

?>