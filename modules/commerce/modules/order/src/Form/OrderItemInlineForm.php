<?php

namespace Drupal\commerce_order\Form;

use Drupal\commerce_order\Entity\OrderItemInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\inline_entity_form\Form\EntityInlineForm;
use Drupal\commerce_price\Price;

/**
 * Defines the inline form for order items.
 */
class OrderItemInlineForm extends EntityInlineForm {

  /**
   * {@inheritdoc}
   */
  public function getEntityTypeLabels() {
    $labels = [
      'singular' => t('order item'),
      'plural' => t('order items'),
    ];
    return $labels;
  }

  /**
   * {@inheritdoc}
   */
  public function getTableFields($bundles) {
    $fields = parent::getTableFields($bundles);
    $fields['unit_price'] = [
      'type' => 'field',
      'label' => t('Unit price'),
      'weight' => 2,
    ];
    $fields['quantity'] = [
      'type' => 'field',
      'label' => t('Quantity'),
      'weight' => 3,
    ];

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function entityForm(array $entity_form, FormStateInterface $form_state) {
    $entity_form = parent::entityForm($entity_form, $form_state);
    $entity_form['#entity_builders'][] = [get_class($this), 'populateTitle'];
    $entity_form['#entity_builders'][] = [get_class($this), 'populateUnitPrice'];

    return $entity_form;
  }

  /**
   * Entity builder: populates the order item title from the purchased entity.
   *
   * @param string $entity_type
   *   The entity type identifier.
   * @param \Drupal\commerce_order\Entity\OrderItemInterface $order_item
   *   The order item.
   * @param array $form
   *   The complete form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public static function populateTitle($entity_type, OrderItemInterface $order_item, array $form, FormStateInterface $form_state) {
    $purchased_entity = $order_item->getPurchasedEntity();
    if ($order_item->isNew() && $purchased_entity) {
      $order_item->setTitle($purchased_entity->getOrderItemTitle());
    }
  }

  /**
   * Entity builder: populates the order item unit price from the purchased entity
   *
   * @param string $entity_type
   *   The entity type identifier.
   * @param \Drupal\commerce_order\Entity\OrderItemInterface $order_item
   *   The order item.
   * @param array $form
   *   The complete form array.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public static function populateUnitPrice($entity_type, OrderItemInterface $order_item, array $form, FormStateInterface $form_state) {
    $purchased_entity = $order_item->getPurchasedEntity();
    if ($purchased_entity) {
      $values = $form_state->getValues();
      if (isset($values['order_items']['form']['inline_entity_form']['unit_price'][0]['override'])) {
        $override = $values['order_items']['form']['inline_entity_form']['unit_price'][0]['override'];

        if (!$override) {
          /** @var \Drupal\commerce_price\Price $unit_price */
          $unit_price = $purchased_entity->getPrice();

          $order_item->setUnitPrice($unit_price, $override);

          if ($form_state->hasAnyErrors()) {
            // We probably have an error about unit price being required.
            // We can clear the errors here because he have set a unit price.
            $form_state->clearErrors();
          }
        }
      }
    }
  }

}
