<?php

namespace Drupal\commerce_amazon_lpa;

interface CurrentMerchantAccountInterface {

  /**
   * Resolves the current Amazon Pay merchant account information.
   *
   * This is based on the currently resolved store.
   *
   * @return mixed
   *   The merchant account configuration.
   */
  public function resolve();

}
