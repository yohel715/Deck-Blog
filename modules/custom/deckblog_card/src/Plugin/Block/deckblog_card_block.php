<?php

//ruta de la clase
namespace Drupal\drupal_block\Plugin\Block;

//importa la clase que usa drupal para generar los bloques
use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "Card Block",
 *   admin_label = @translation("Card Block"),
 *   category = @translation("Card Block"),
 * )
 */


class CardBlock extends BlockBase{

    /**
     * {@inheritdoc }
     */
    
    
    /**
    * Metodo que genera el bloque y 
    * devuelve el contenido a renderizar 
    */
    public function build()
    {
        return [
            '#markup' => $this->getCard(), //función que trae las cartas
            '#cache' => [
                'max-age' => 0,
            ]
        ];
    }
    private function getCard()
    {
        /**
         * variable
         * $card
         */
        $card = [
            'Hola, que tal',
            'Otras vez por aquí?',
            'Nos vemos pronto!!!'
        ];
        return $card[array_rand($card)]; //se devuelve mediante un array_rand(RANDOM)
    }
}
