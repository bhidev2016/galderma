<?php

/**
 * @file
 * Class for FntsiteMailNotify a generic sender for the FntsiteMail module.
 */

/**
 * Class FntsiteNotify.
 *
 * An OOD pattern Adapter class for the sending of Notifications.
 * The Class adapts existing class FntsiteMailSend to make it slightly more
 * developer friendly to create, whilst still allowing FntsiteMailSend to have
 * full dependency injection.
 *
 * Design pattern: Adapter
 */
class FntsiteMailNotify {

  protected $user2;

  public function addUser2($user2){

    $this->user2 = $user2;

  }

  /**
   * Send Mail.
   *
   * Send a mail notification.
   *
   * @param $to_user
   * @param $template_ref
   */
  public function sendMail($to_user, $template_ref) {

    // Get the $template object using the Factory pattern.
    $template = FntsiteMail::getTemplate($template_ref);

    // Use the $template & $user objects with dependency injection.
    $mail = new FntsiteMailSend($to_user, $template);
    $mail->addUser2($this->user2);
    $mail->sendMail();

  }

}