<?php
//DEFINE O QUE O SISTEMA É !
///Model é responsável pelos dados
class Produto {
    public static function todos() {
        //public static - permite chamar o método todos diretamente na classe
        //static: se precisa criar objeto para usar na classe ou não

        return [
            ['nome' => 'Teclado Mecânico', 'preco' => 250], // "=>" operador de atribuição de array
            ['nome' => 'Mouse Gamer', 'preco' => 150],  
            ['nome' => 'Monitor 144hz', 'preco' => 1200]
        ];
    }
}
// private 
// protected
// public

?>