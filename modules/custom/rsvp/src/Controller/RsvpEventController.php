<?php

namespace Drupal\rsvp\Controller;

use Drupal\image\Entity\ImageStyle;
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
      'title' => 'Next Events',
    ];

    $nids = \Drupal::entityQuery('node')->condition('type', 'event')->execute();
    $list =  \Drupal\node\Entity\Node::loadMultiple($nids);
    foreach ($list as $node) {
      $event["id"] = $node->get('nid')->value;
      $event["title"] = substr($node->get('title')->value,0,100);
      $event["image"] = ImageStyle::load('image_card')->buildUrl($node->field_image->entity->getFileUri());
      $event["description"] = substr($node->get('field_description')->value,0,130) . " ...";
      $event["location"] = $node->get('field_location')->value;
      $strtotime = strtotime($node->get('field_date')->value);
      $day = date("d",$strtotime);
      $month = date("M",$strtotime);
      $event["date"] = "<div class=\"day\">{$day}</div><div class=\"month\">{$month}</div>";
      $event["attendees"] = $node->get('field_attendees')->value;
      $event["button"] = $node->get('field_rsvp_button')->value;
      $theme['#list'][] = $event;
    }
    // var_dump($theme);die();
    return $theme;
  }

}
