<?php

namespace Drupal\deckblog_card\Controller;

use Drupal\Core\Controller\ControllerBase;

class DeckBlogCardController extends ControllerBase{
    public function index($card){
        return [
            '#markup' => $this->t("DeckBlog Card, $card"),
        ];
    }

    public function cardimage($card, $image){
        return [
            '#markup' => $this->t("DeckBlog Card, $card, $image"),
        ];
    }
}