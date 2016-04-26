<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function galderma_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function galderma_preprocess_page(&$variables) {
//
//}

/**
 * Implements template_preprocess_node
 *
 */
//function galderma_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function galderma_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

function galderma_preprocess_views_view(&$variables) {

}

function galderma_preprocess_links__topbar_main_menu(&$variables){
  $variables['attributes']['class'][] = 'right';

}


function galderma_legal_accept_label($variables) {


  if ($variables['link']) {
    return t('<strong>Accept</strong> <a href="@terms">Terms & Conditions</a> of Use', array('@terms' => url('legal')));
  }
  else {
    return t('I have read and understood the <a href="../content/privacy-policy">Privacy Policy</a>');
  }
}


/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function galderma_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function galderma_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function galderma_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function galderma_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function galderma_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $classes = (is_array($form['actions']['submit']['#attributes']['class']))
//      ? $form['actions']['submit']['#attributes']['class']
//      : array();
//    $classes = array_merge($classes, array('secondary', 'button', 'radius'));
//    $form['actions']['submit']['#attributes']['class'] = $classes;
//  }
//}

/**
 * Implements hook_form_FORM_ID_alter()
 * Example of using foundation sexy buttons on comment form
 */
//function galderma_form_comment_form_alter(&$form, &$form_state) {
  // Sexy preview buttons
//  $classes = (is_array($form['actions']['preview']['#attributes']['class']))
//    ? $form['actions']['preview']['#attributes']['class']
//    : array();
//  $classes = array_merge($classes, array('secondary', 'button', 'radius'));
//  $form['actions']['preview']['#attributes']['class'] = $classes;
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements hook_css_alter().
 */
//function galderma_css_alter(&$css) {
//  // Always remove base theme CSS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($css as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($css[$path]);
//    }
//  }
//}

/**
 * Implements hook_js_alter().
 */
//function galderma_js_alter(&$js) {
//  // Always remove base theme JS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($js as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($js[$path]);
//    }
//  }
//}

/**
 * Override drupal core messages with zurb foundation alert-box messages.
 * Customize the colors within the _settings.scss file.
 *
 * http://foundation.zurb.com/docs/elements.php#panelEx
 */
function galderma_status_messages($variables) {
  $display = $variables['display'];
  $output = '';
  $status_heading = array(
    'error' => t('Error message'),
    'status' => t('Status message'),
    'warning' => t('Warning message'),
  );

  $status_mapping = array(
    'error' => 'alert',
    'status' => 'success',
    'warning' => 'secondary'
  );

  $morders = drupal_get_messages($display);

  if (isset($morders['status'][0])){
    if ($morders['status'][0] == 'Thank you for applying for an account. Your account is currently pending approval by the site administrator.<br />In the meantime, a welcome message with further instructions has been sent to your e-mail address.'){
      $morders['status'][0] = 'Thank you for registering. We’ll be in touch soon to confirm your login details';
    }
  }

//  if (isset($morders['error'][0])){
//    if ($morders['error'][0] == 'Thank you for applying for an account. Your account is currently pending approval by the site administrator.<br />In the meantime, a welcome message with further instructions has been sent to your e-mail address.'){
//      $morders['error'][0] = 'Thank you for registering. We’ll be in touch soon to confirm your login details';
//    }
//  }

  $path = current_path();

  if (($path == 'user/register') && (count($morders) > 0)) {

    $korders = array();
    $xorders = array();
    foreach ($morders['error'] as $key => $kessage) {
      switch ($kessage) {
        case 'Title field is required.':
          $korders[1] = $kessage;
          break;
        case 'First name field is required.':
          $korders[2] = $kessage;
          break;
        case 'Last name field is required.':
          $korders[3] = $kessage;
          break;
        case 'Profession field is required.':
          $korders[4] = $kessage;
          break;
        case 'Medical Body is required.':
          $korders[5] = $kessage;
          break;
        case 'PIN Number is required.':
          $korders[6] = $kessage;
          break;
        case 'Clinic Name field is required.':
          $korders[7] = $kessage;
          break;
        case 'Building Name / Number field is required.':
          $korders[8] = $kessage;
          break;
        case 'Street field is required.':
          $korders[9] = $kessage;
          break;
        case 'Town / City field is required.':
          $korders[10] = $kessage;
          break;
        case 'County field is required.':
          $korders[11] = $kessage;
          break;
        case 'Country field is required.':
          $korders[12] = $kessage;
          break;
        case 'Postcode field is required.':
          $korders[13] = $kessage;
          break;
        case 'Postcode is required.':
          $korders[13] = $kessage;
          break;
        case 'Website field is required.':
          $korders[14] = $kessage;
          break;
        case 'Username field is required.':
          $korders[15] = $kessage;
          break;
//        case 'E-mail address field is required.':
//          $korders[16] = $kessage;
//          break;
        case 'E-mail field is required.':
          $korders[16] = 'Email field is required.';
          break;
        case 'Your confirmation email does not match your email.':
          $korders[17] = $kessage;
          break;
        case 'E-mail confirmation field is required.':
          $korders[17] = 'Email confirmation field is required.';
          break;
        case 'I have read and understood the <a href="/content/terms-conditions">Terms &amp; Conditions</a> field is required.':
          $korders[18] = $kessage;
          break;
        case 'I have read and understood the <a href="../content/privacy-policy">Privacy Policy</a> field is required.':
          $korders[19] = $kessage;
          break;
        case 'I certify I am a Healthcare Professional field is required.':
          $korders[20] = $kessage;
          break;
        default:
          $xorders[] = $kessage;
      }
    }
    foreach ($xorders as $xorder) {
      $korders[] = $xorder;
    }
    ksort($korders);
    $morders['error'] = $korders;
  }

  foreach ($morders as $type => $messages) {
    if (isset($status_mapping[$type])) {
      $output .= "<div data-alert class=\"alert-box $status_mapping[$type]\">\n";
    }
    else {
      $output .= "<div data-alert class=\"alert-box\">\n";
    }

    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul class=\"no-bullet\">\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      foreach ($messages as $message) {
        $output .= $message;
      }
    }

    if (!theme_get_setting('zurb_foundation_messages_modal')) {
      $output .= '<a href="#" class="close">&times;</a>';
    }

    $output .= "</div>\n";
  }

  if ($output != '' && theme_get_setting('zurb_foundation_messages_modal')) {
    $output = '<div id="status-messages" class="reveal-modal" role="alertdialog">' . $output;
    $output .= '<a class="close-reveal-modal">&#215;</a>';
    $output .= "</div>";
  }

  return $output;
}
