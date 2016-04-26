<?php

/**
 * @file
 * General setup base Class for FntsiteMail module.
 */

/**
 * Class FntsiteMail.
 *
 * Provides a send class FntsiteMail series of Classes.
 *
 * Design pattern: None (logic), it uses the other Classes to create a solution.
 */
class FntsiteMailSend extends FntsiteMail {

  protected $template;
  protected $user;
  protected $user2;

  function __construct($user, $template){

    $this->user = $user;
    $this->template = $template;

  }

  public function addUser2($user2){

      $this->user2 = $user2;

  }

  public function sendMail() {

    $user = new FntsiteDecoratorUser($this->user);
    $to = $user->getUserEmailAddress();

    $template = new FntsiteDecoratorTemplate($this->template);
    $subject = $template->getTemplateSubject();
    $message = $template->getTemplateBody();

    $vars = array();
    $vars['@title'] = $user->getUserTitle();
    $vars['@first_name'] = $user->getUserFirstName();
    $vars['@surname'] = $user->getUserSurname();

    if (is_object($this->user2)) {
      $user2 = new FntsiteDecoratorUser($this->user2);
      $vars['@user2_title'] = $user2->getUserTitle();
      $vars['@user2_first_name'] = $user2->getUserFirstName();
      $vars['@user2_surname'] = $user2->getUserSurname();
      $vars['@user2_email'] = $user2->getUserEmailAddress();
      $vars['@user2_edit_link'] = $user2->getUserEditUrl();
    }

    $params = array(
      'subject' => $subject,
      'message' => t($message, $vars),
    );

    drupal_mail('fntsite_mail', 'fntsite_mail', $to, language_default(), $params);
  }

}