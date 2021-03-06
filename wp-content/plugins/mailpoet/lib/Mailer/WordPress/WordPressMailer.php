<?php

namespace MailPoet\Mailer\WordPress;

if (!defined('ABSPATH')) exit;


use Html2Text\Html2Text;
use MailPoet\Mailer\Mailer;
use MailPoet\Mailer\MetaInfo;

if (!class_exists('PHPMailer')) {
  require_once ABSPATH . WPINC . '/class-phpmailer.php';
}

class WordPressMailer extends \PHPMailer {

  /** @var Mailer */
  private $mailer;

  /** @var MetaInfo */
  private $mailerMetaInfo;

  function __construct(Mailer $mailer, MetaInfo $mailerMetaInfo) {
    parent::__construct(true);
    $this->mailer = $mailer;
    $this->mailerMetaInfo = $mailerMetaInfo;
  }

  function send() {
    // We need this so that the \PHPMailer class will correctly prepare all the headers.
    $this->Mailer = 'mail';

    // Prepare everything (including the message) for sending.
    $this->preSend();

    try {
      $extra_params = [
        'meta' => $this->mailerMetaInfo->getWordPressTransactionalMetaInfo(),
      ];
      $result = $this->mailer->send($this->getEmail(), $this->formatAddress($this->getToAddresses()), $extra_params);
    } catch (\Exception $e) {
      throw new \phpmailerException($e->getMessage(), $e->getCode(), $e);
    }

    if ($result['response']) {
      return true;
    } else {
      throw new \phpmailerException($result['error']->getMessage());
    }
  }

  private function getEmail() {
    $email = [
      'subject' => $this->Subject,
      'body' => [],
    ];

    if ($this->ContentType === 'text/plain') {
      $email['body']['text'] = $this->Body;
    } elseif ($this->ContentType === 'text/html') {
      $text = @Html2Text::convert(strtolower($this->CharSet) === 'utf-8' ? $this->Body : utf8_encode($this->Body));
      $email['body']['text'] = $text;
      $email['body']['html'] = $this->Body;
    } else {
      throw new \phpmailerException('Unsupported email content type has been used. Please use only text or HTML emails.');
    }
    return $email;
  }

  private function formatAddress($wordpress_address) {
    $data = $wordpress_address[0];
    $result = [
      'address' => $data[0],
    ];
    if (!empty($data[1])) {
      $result['full_name'] = $data[1];
    }
    return $result;
  }

}
