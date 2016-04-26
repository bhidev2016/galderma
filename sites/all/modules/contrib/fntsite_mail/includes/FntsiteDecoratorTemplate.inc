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
class FntsiteDecoratorTemplate {

  protected $template;

  function __construct($template){

    $this->template = $template;

  }

  public function getTemplateSubject(){
    return $this->template->field_subject[LANGUAGE_NONE][0]['value'];
  }

  public function getTemplateBody(){
    return $this->template->body[LANGUAGE_NONE][0]['value'];
  }

}
