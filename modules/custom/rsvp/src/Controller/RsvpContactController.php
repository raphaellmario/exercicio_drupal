<?php

namespace Drupal\rsvp\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * {@inheritdoc}
 */
class RsvpContactController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function __construct() {
  }

  /**
   * {@inheritdoc}
   */
  public function indexController() {
    $theme = [
      '#theme' => 'contact_template',
      '#list' => [],
      '#data' => [],
    ];

    // var_dump($theme);die();
    return $theme;
  }

}
