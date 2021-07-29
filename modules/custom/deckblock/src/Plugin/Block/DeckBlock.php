<?php

namespace  Drupal\deckblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "Deck Block",
 *   admin_label = @translation("Deck Block"),
 *   category = @translation("Deck Block"),
 * )
 */


class DeckBlock extends BlockBase{

  /**
   * {@inheritdoc }
   */

  public function build(){
    return [
      '#markup' => $this->getId(),
      '#cache' => [
        'max-age' => 0,
      ]
    ];
  }
  
   private function getFrases(){
    $frase = [
      1,
      2,
      3,
    ];

    return $frase[array_rand($frase)];
   }

   private function getId(){

    $id =$this -> getFrases();

    $ids = [
      'Este es el id 1',
      'Este es el id 2',
      'Este es el id 3',
    ];

    return $ids[$id];

  }


}