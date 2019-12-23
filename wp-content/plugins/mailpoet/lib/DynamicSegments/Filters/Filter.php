<?php

namespace MailPoet\DynamicSegments\Filters;

if (!defined('ABSPATH')) exit;


interface Filter {

  function toSql(\ORM $orm);

  function toArray();

}
