<?php

namespace MailPoet\Cron\Workers;

if (!defined('ABSPATH')) exit;


use Carbon\Carbon;
use MailPoet\Cron\CronHelper;
use MailPoet\Models\Newsletter;
use MailPoet\Models\ScheduledTask;
use MailPoet\Models\Subscriber;
use MailPoet\Util\Security;
use MailPoet\WP\Functions as WPFunctions;

class UnsubscribeTokens extends SimpleWorker {
  const TASK_TYPE = 'unsubscribe_tokens';
  const BATCH_SIZE = 1000;
  const AUTOMATIC_SCHEDULING = false;

  function processTaskStrategy(ScheduledTask $task) {
    $meta = $task->getMeta();
    do {
      CronHelper::enforceExecutionLimit($this->timer);
      $subscribers_count = $this->addTokens(Subscriber::class, $meta['last_subscriber_id']);
      $task->meta = $meta;
      $task->save();
    } while ($subscribers_count === self::BATCH_SIZE);
    do {
      CronHelper::enforceExecutionLimit($this->timer);
      $newsletters_count = $this->addTokens(Newsletter::class, $meta['last_newsletter_id']);
      $task->meta = $meta;
      $task->save();
    } while ($newsletters_count === self::BATCH_SIZE);
    if ($subscribers_count > 0 || $newsletters_count > 0) {
      return false;
    }
    return true;
  }

  private function addTokens($model, &$last_processed_id = 0) {
    $instances = $model::whereNull('unsubscribe_token')
      ->whereGt('id', (int)$last_processed_id)
      ->orderByAsc('id')
      ->limit(self::BATCH_SIZE)
      ->findMany();
    foreach ($instances as $instance) {
      $last_processed_id = $instance->id;
      $instance->set('unsubscribe_token', Security::generateUnsubscribeToken($model));
      $instance->save();
    }
    return count($instances);
  }

  static function getNextRunDate() {
    $wp = new WPFunctions;
    return Carbon::createFromTimestamp($wp->currentTime('timestamp'));
  }
}
