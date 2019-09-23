<?php

namespace Drupal\commerce_amazon_lpa\Element;

use Drupal\Core\Render\Annotation\RenderElement;
use Drupal\Core\Render\Markup;
use Drupal\Core\Template\Attribute;

/**
 * @RenderElement("amazon_wallet")
 */
class Wallet extends AmazonElementBase {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $class = get_class($this);
    return [
      '#html_id' => 'AmazonWallet',
      '#title' => t('Login with Amazon'),
      '#display_mode' => 'edit',
      '#pre_render' => [
        [$class, 'preRender'],
        [$class, 'attachLibrary']
      ],
    ];
  }

  public static function preRender($element) {
    $attributes = new Attribute();
    $attributes
      ->setAttribute('id', $element['#html_id'])
      ->setAttribute('data-amazon-widget', 'wallet')
      ->setAttribute('data-display-mode', $element['#display_mode'])
      // @todo suppport modifying the appearance https://www.drupal.org/node/2909309
      ->setAttribute('style', 'max-width: 100%; width: 100%; height: 250px; display: inline-block');

    $element['#markup'] = Markup::create(sprintf('<div %s></div>', $attributes));
    return $element;
  }

}
