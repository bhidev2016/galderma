<?php

/**
 * @file
 * General setup base Class for FntsiteMail module.
 */

/**
 * Class FntsiteMail.
 *
 * Provides a base Class setup for the the workings of FntsiteMail series of
 * Classes.
 *
 * Design pattern: Active Record.
 */
class FntsiteMail {

  protected $default;

  /**
   * The constuctor for FntsiteMail class.
   */
  public function __construct() {
//    $this->setDefaults();
  }

  /**
   * Get Template
   *
   * Get a template according to a Template Reference.
   *
   * @param $fntsite_template_ref
   * @return bool|mixed
   */
  public static function getTemplate($fntsite_template_ref){

    $node = FALSE;

    $query = new EntityFieldQuery();

    $query->entityCondition('entity_type', 'node')
      ->entityCondition('bundle', 'fntsite_template')
      ->fieldCondition('field_template_ref', 'value', $fntsite_template_ref, '=')
      ->addMetaData('account', user_load(1)); // Run the query as user 1.

    $result = $query->execute();

    if (isset($result['node'])) {
      $nids = array_keys($result['node']);
      foreach ($nids as $nid){
        $node = node_load($nid);
        // There should only be one result.
        break;
      }
    }

    return $node;

  }


}