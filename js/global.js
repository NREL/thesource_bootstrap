/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.thesource_bootstrap = {
    attach: function (context, settings) {
      $('button.accordion-button').addClass('collapsed');
    }
  };

})(jQuery, Drupal);
