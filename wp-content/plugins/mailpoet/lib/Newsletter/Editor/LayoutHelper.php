<?php

namespace MailPoet\Newsletter\Editor;

if (!defined('ABSPATH')) exit;


class LayoutHelper {
  static function row($blocks) {
    return [
      'type' => 'container',
      'orientation' => 'horizontal',
      'styles' => [
        'block' => [
          'backgroundColor' => 'transparent',
        ],
      ],
      'blocks' => $blocks,
    ];
  }

  static function col($blocks) {
    return [
      'type' => 'container',
      'orientation' => 'vertical',
      'styles' => [
        'block' => [
          'backgroundColor' => 'transparent',
        ],
      ],
      'blocks' => $blocks,
    ];
  }
}