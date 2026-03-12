<?php 
class Produto {
    public static function todos() {

        return[

            ['id' => 1, 'nome' => 'Teclado Mecânico', 'preço' => 259,99],
            ['id' => 2, 'nome' => 'Mouse Gamer', 'preço' => 200,00],
            ['id' => 3, 'nome' => 'Fone Gamer', 'preço' => 110,90],
            ['id' => 4, 'nome' => 'Mouse Pad Grande', 'preço' => 55,90],
            ['id' => 5, 'nome' => 'Microfone Gamer', 'preço' => 125,90],
        ];
    }
    public static function buscarPorId($id){
        $produtos = self::todos();
        foreach ($produtos as $produto) {
            if ($produto['id'] == $id){
                return $produto;
            }
        }
        return null;
    }

}
?>