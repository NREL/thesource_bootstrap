/*
 *  moakley
 *  Set site-level variables (required)
 */
(function ($, Drupal) { 'use strict';
   $(document).ready( function(){

      window.nrel = $.extend({}, window.nrel); // Merge in page level variables if they are set
      window.nrel.pagevars = $.extend({}, window.nrel.pagevars); // (in case window.nrel isn't defined)

      window.nrel.pagevars.sitename = 'source';
      window.nrel.pagevars.topnav   = 'source';
  });
})(jQuery, Drupal);

