<?php

/**
 * @file
 * Contains \Drupal\moduletest\Controller\AdyaxTest.
 */

namespace Drupal\moduletest\Controller;

/**
 * Provides route for our custom module
 */

class AdyaxTest {

    /**
     * Displays adyax test
     */
    public function content(){
        return array(
            '#markup' => 'Hello, Adyax Test!'
        );
    }
}