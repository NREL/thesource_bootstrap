<?php

define('THESOURCE_BOOTSTRAP_THEME_PATH', drupal_get_path('theme', 'thesource_bootstrap'));

/**
 * Implements hook_preprocess().
 */
function thesource_bootstrap_preprocess(&$vars, $hook) {
  switch ($hook) {
    case 'page':
      // Set the Content Last Updated timestamp
      $vars['last_updated'] = date("d M Y", (empty($vars['last_updated_timestamp']) ? time() : $vars['last_updated_timestamp']));
      break;
  }
}

/**
 * Theme function to output markup for the tablesort indicator.
 *
 * @ingroup themeable
 */
function thesource_bootstrap_tablesort_indicator($variables) {
  if (empty($variables['style']) || $variables['style'] == "desc") {
    return '&nbsp;<i class="fa fa-sort-asc"></i>';
  } else {
    return '&nbsp;<i class="fa fa-sort-desc"></i>';
  }
}

