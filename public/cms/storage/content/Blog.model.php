<?php
 return [
  'name' => 'Blog',
  'label' => 'ブログ',
  'info' => '',
  'type' => 'collection',
  'fields' => [
    0 => [
      'name' => 'Title',
      'type' => 'text',
      'label' => 'タイトル',
      'info' => '',
      'group' => '',
      'i18n' => false,
      'required' => true,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'multiline' => false,
        'showCount' => true,
        'readonly' => false,
        'placeholder' => NULL,
        'minlength' => NULL,
        'maxlength' => NULL,
        'list' => NULL,
      ],
    ],
    1 => [
      'name' => 'Body',
      'type' => 'wysiwyg',
      'label' => '本文',
      'info' => '',
      'group' => '',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
      ],
    ],
    2 => [
      'name' => 'Date',
      'type' => 'date',
      'label' => '日付',
      'info' => '',
      'group' => '',
      'i18n' => false,
      'required' => false,
      'multiple' => false,
      'meta' => [
      ],
      'opts' => [
        'readonly' => false,
        'placeholder' => NULL,
        'min' => NULL,
        'max' => NULL,
        'step' => NULL,
      ],
    ],
  ],
  'preview' => [
  ],
  'group' => '',
  'meta' => NULL,
  '_created' => 1758493134,
  '_modified' => 1758554999,
  'color' => NULL,
  'revisions' => false,
];