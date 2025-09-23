<?php
 return [
  'version' => '2.12.0',
  'env' => '/var/www/Cockpit',
  'dirs' => [
    '/var/www/Cockpit/modules' => [
      0 => '/var/www/Cockpit/modules/Finder',
      1 => '/var/www/Cockpit/modules/Identi',
      2 => '/var/www/Cockpit/modules/System',
      3 => '/var/www/Cockpit/modules/App',
      4 => '/var/www/Cockpit/modules/Updater',
      5 => '/var/www/Cockpit/modules/Assets',
      6 => '/var/www/Cockpit/modules/Content',
    ],
    '/var/www/Cockpit/addons' => [
    ],
  ],
  'autoload' => true,
];