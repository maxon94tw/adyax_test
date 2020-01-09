<?php

namespace Drupal\moduletest\Controller;

use Drupal\node\NodeInterface;

/**
 * Class AdyaxNode.
 * @package Drupal\moduletest\Controller
 */

class AdyaxNode {

    /**
     * Return page
     * @param NodeInterface $node
     * @return array
     */

    public function getBody(NodeInterface $node) {
        $element = [
            '#markup' => $node->body->value,
        ];
        return $element;
    }

    /**
     * @param NodeInterface $node
     * @return string
     */

    public function getTitle(NodeInterface $node) {
        return $node->getTitle();
    }

}

