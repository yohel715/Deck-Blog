<?php

namespace Drupal\random_card\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Random Card' block.
 *
 * @Block(
 *  id = "random_card",
 *  admin_label = @Translation("Random Card"),
 * )
 */
class RandomCard extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    
    $build['random_card'] = [
      '#theme' => 'random_card',
      '#attached' => [
        'library' => [
          'random_card/random_card.demo'
        ]
      ]
    ];

    return $build;
  }

}
