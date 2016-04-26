<?php

/**
 * @file
 * General setup FntsiteRegister module.
 */

/**
 * Class FntsiteRegister.
 *
 */
class FntsiteRegister {

  public $html_text;

  function __construct($html_text) {
    $this->html_text = $html_text;
  }


//  /**
//   * Create list of HTML IDs and placeholder text.
//   *
//   * @param $profile_name
//   * @param $field_placeholders
//   * @return array
//   */
//  function create_html_ids($profile_name, $field_placeholders){
//
//    $html_ids = array();
//
//    foreach($field_placeholders as $field_name => $placeholder_text){
//
//      $html_id =  $this->buildPlacholderHtmlId($profile_name, $field_name);
//      $html_ids[$html_id] = $placeholder_text;
//    }
//
//    return $html_ids;
//
//  }

  /**
   * Create HTML ID name from the Profile and Field.
   *
   * @param $profile
   * @param $field
   * @return string
   */
  function buildPlacholderHtmlId($profile, $field){

    $field = str_replace(" ", "-", $field);

    $profile_name = '';
    if (!empty($profile)){
      $profile = str_replace(" ", "-", $profile);
      $profile_name = '-profile-'.$profile;
    }

    $out = 'edit'.$profile_name.'-field-'.$field.'-und-0-value';

    return $out;

  }

  /**
   * Add Placeholder
   *
   * On the form "user_register_form" there is a documented issue with Drupal
   * not adding placeholder text.  This function is used to bypass the issue.
   */
  function addPlaceholder($html_id, $placeholder_text){

    $search = 'id="'.$html_id.'"';
    $replace = $search.' placeholder="'.$placeholder_text.'" ';
    $this->html_text = str_replace($search, $replace, $this->html_text);

    return $this;

  }

  function addPlaceholderToProfileField($profile_name, $field, $placeholder_text){

    $html_id = $this->buildPlacholderHtmlId($profile_name, $field);
    // e.g. edit-profile-health-professional-field-street-und-0-value

//    $this->html_text =
    $this->addPlaceholder($html_id, $placeholder_text);

    return $this;
  }

  function getHtml(){
    return $this->html_text;
  }
}

