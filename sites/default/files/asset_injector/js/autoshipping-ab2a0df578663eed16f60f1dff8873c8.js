(function ($, Drupal, drupalSettings) {
  'use strict';

  /**
   * Checks to see if we can recalculate shipping rates.
   */
  Drupal.commerceCheckShippingRecalculation = function () {
    var shippingSettings = drupalSettings.commerceShipping;
    var recalculate = true;
    $(shippingSettings.wrapper + ' :input.required').filter(':not(.chosen-container)').each(function () {
      if (!$(this).val()) {
        recalculate = false;
      }
    });

    if (recalculate) {
      return setTimeout(function () {
        // Trigger the mousedown event on the shipping recalculation button.
        $(shippingSettings.wrapper).find(shippingSettings.recalculateButtonSelector).trigger('mousedown');
      }, 100);
    }
  };

  /**
   * Attaches the shipping recalculate behavior.
   *
   * @type {Drupal~behavior}
   *
  * @prop {Drupal~behaviorAttach} attach
   */
  Drupal.behaviors.commerceShippingRecalculate = {
    attach: function (context) {
      if (context === document) {
        Drupal.commerceCheckShippingRecalculation();
      }
      $(drupalSettings.commerceShipping.wrapper + ' :input.required')
        .once('calculate-shipping')
        .on('change', Drupal.commerceCheckShippingRecalculation);
    }
  };

})(jQuery, Drupal, drupalSettings);