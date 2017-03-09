<?php
/**
 * @file Fproject DB settings.
 */

$databases['default']['default'] = array(
  'database' => '__PUT_YOUR_DB_NAME__',
  'username' => '__PUT_YOUR_DB_USER__',
  'password' => '__PUT_YOUR_DB_PASS__',
  'prefix' => '',
  'host' => 'mariadb',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

