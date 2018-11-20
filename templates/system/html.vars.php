<?php
/**
 * @file
 * Stub file for "html" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "html" theme hook.
 *
 * See template for list of available variables.
 *
 * @see html.tpl.php
 *
 * @ingroup theme_preprocess
 */
function thesource_bootstrap_preprocess_html(&$vars) {
  // Add Droid Serif and Roboto 200 and 400. These fonts/weights are not
  // appearing in the list of fontyourface Google fonts, so the
  // fonts[google_fonts_api] setting in the theme .info file is failing.
  // However, theSource site is able to pull this font in from
  // fonts.googleapis.com using a link ref, so we add that here.
  $element = array(
    '#type' => 'html_tag',
    '#tag' => 'link',
    '#attributes' => array(
      'href' => "//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700",
      'rel' => "stylesheet",
      'type' => 'text/css',
    ),
  );
  drupal_add_html_head($element, 'thesource_bootstrap_fonts');
  $element['#attributes']['href'] = "//fonts.googleapis.com/css?family=Roboto:200,400";
  drupal_add_html_head($element, 'thesource_bootstrap_fonts');
}

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function thesource_bootstrap_preprocess_page(&$vars) {
  // Add last-updated meta tag.
  $element = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'http-equiv' => "last-modified",
      'content' => date("D, j M Y H:i:s e", (empty($vars['last_updated_timestamp']) ? time() : $vars['last_updated_timestamp'])),
    ),
  );
  drupal_add_html_head($element, 'thesource_meta_last_updated');
}