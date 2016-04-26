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
 * Design pattern: Decorator.
 */
class FntsiteDecoratorUser {

  protected $user;
  protected $profile;

  function __construct($user){

    $this->user = $user;
    $this->profiles = profile2_load_by_user($this->user);

  }

  public function getUserEmailAddress(){
    return $this->user->mail;
  }

  public function getUserTitle(){

    $value = '';
    if (isset($this->profiles['health_professional']->field_title[LANGUAGE_NONE][0]['tid'])){
      $tid = $this->profiles['health_professional']->field_title[LANGUAGE_NONE][0]['tid'];
      $term = taxonomy_term_load($tid);
      $value = $term->name;
    }
    return $value;
  }

  public function getUserFirstName(){

    $value = '';
    if (isset($this->profiles['health_professional']->field_first_name[LANGUAGE_NONE][0]['value'])){
      $value = $this->profiles['health_professional']->field_first_name[LANGUAGE_NONE][0]['value'];
    }
    return $value;
  }

  public function getUserSurname(){
    $value = '';
    if (isset($this->profiles['health_professional']->field_surname[LANGUAGE_NONE][0]['value'])){
      $value = $this->profiles['health_professional']->field_surname[LANGUAGE_NONE][0]['value'];
    }
    return $value;
  }

  public function getUserEditUrl(){
    $value = '';
    if (isset($this->user->uid)){
      global $base_url;
      $value = "{$base_url}/user/{$this->user->uid}/edit";
    }
    return $value;
  }

}
