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
      '#markup' => $this->getFrases(),
      '#cache' => [
        'max-age' => 0,
      ]
    ];
  }
  
   private function getFrases(){
    $frase = [
      'Hola, que tal',
      'Otras vez por aquí?',
      'Nos vemos pronto!!!'
    ];

    $card = [
      'Hola, que tal',
      'Otras vez por aquí?',
      'Nos vemos pronto!!!'
    ];

    return $frase[array_rand($frase, $card)];
   }

}