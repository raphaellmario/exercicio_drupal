<?php

namespace Drupal\rsvp\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * {@inheritdoc}
 */
class RsvpEventController extends ControllerBase {

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
      '#theme' => 'events_template',
      '#list' => [],
      '#data' => [],
    ];

    $theme['#data'] = [
      'title' => 'The main events are comming',
      'subtitle' => 'check the upcoming events in the upcoming days',
    ];

    $theme['#list'] = [
      0 => [
        'title' => 'USP - Congresso nacional de robótica no estado de São Paulo',
        'description' => 'Morbi mattis ullamcorper velit. Praesent venenatis metus at tortor pulvinar varius. Phasellus magna.',
        'date' => '09/10',
      ],
      1 => [
        'title' => 'UFES - Congresso nacional de robótica no estado de São Paulo',
        'description' => 'Morbi mattis ullamcorper velit. Praesent venenatis metus at tortor pulvinar varius. Phasellus magna.',
        'date' => '09/11',
      ],
      2 => [
        'title' => 'UFMG - Congresso nacional de robótica no estado de São Paulo',
        'description' => 'Morbi mattis ullamcorper velit. Praesent venenatis metus at tortor pulvinar varius. Phasellus magna.',
        'date' => '09/12',
      ],
      3 => [
        'title' => 'UFMG - Congresso nacional de robótica no estado de São Paulo',
        'description' => 'Morbi mattis ullamcorper velit. Praesent venenatis metus at tortor pulvinar varius. Phasellus magna.',
        'date' => '09/12',
      ],
      4 => [
        'title' => 'UFMG - Congresso nacional de robótica no estado de São Paulo',
        'description' => 'Morbi mattis ullamcorper velit. Praesent venenatis metus at tortor pulvinar varius. Phasellus magna.',
        'date' => '09/12',
      ],
    ];

    return $theme;
  }

}
