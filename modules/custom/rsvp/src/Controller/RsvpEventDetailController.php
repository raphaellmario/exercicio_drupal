<?php

namespace Drupal\rsvp\Controller;

use Drupal\image\Entity\ImageStyle;
use Drupal\Core\Controller\ControllerBase;

/**
 * {@inheritdoc}
 */
class RsvpEventDetailController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function __construct() {
  }

  /**
   * {@inheritdoc}
   */
  public function indexController($id) {
    $theme = [
      '#theme' => 'event_detail_template',
      '#list' => [],
      '#data' => [],
    ];

    $theme['#data'] = [
    ];

    $node =  \Drupal\node\Entity\Node::load($id);
    $event["id"] = $node->get('nid')->value;
    $event["title"] = $node->get('title')->value;
    $event["image"] = ImageStyle::load('image_card')->buildUrl($node->field_image->entity->getFileUri());
    $event["description"] = $node->get('field_description')->value;
    $event["location"] = $node->get('field_location')->value;
    $strtotime = strtotime($node->get('field_date')->value);
    $day = date("d",$strtotime);
    $month = date("M",$strtotime);
    $event["date"] = "<div class=\"day\">{$day}</div><div class=\"month\">{$month}</div>";
    $event["button"] = $node->get('field_rsvp_button')->value;

    foreach ($node->field_attendees as $reference) {
      $event["attendees"][] = [
        'id' => $reference->target_id,
        'name' => $reference->entity->title->value,
      ];
    }
    $theme['#list'] = $event;

    // var_dump($theme);die();
    return $theme;
  }

}
