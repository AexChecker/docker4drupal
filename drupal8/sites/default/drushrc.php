<?php
/**
 * @file Drush Run-time Configuration.
 */

/**
 * List of tables whose *data* is skipped by the 'sql-dump' and 'sql-sync'
 * commands when the "--structure-tables-key=common" option is provided.
 * You may add specific tables to the existing array or add a new element.
 */
$options['structure-tables']['common'] = [
  'batch',
  'cache',
  'cache_*',
  'history',
  'search_dataset',
  'search_index',
  'search_total',
  'sessions',
  'watchdog',
  'field_deleted_data_*',
  'field_deleted_revision_*',
  'xmlsitemap',
];

$options['structure-tables']['search'] = [
  'batch',
  'cache',
  'cache_*',
  'history',
  'sessions',
  'watchdog',
  'field_deleted_data_*',
  'field_deleted_revision_*',
  'xmlsitemap',
];

$options['structure-tables']['watchdog'] = [
  'batch',
  'cache',
  'cache_*',
  'history',
  'sessions',
  'field_deleted_data_*',
  'field_deleted_revision_*',
  'xmlsitemap',
];

$options['structure-tables']['full'] = [
  'batch',
  'cache',
  'cache_*',
  'history',
  'sessions',
  'field_deleted_data_*',
  'field_deleted_revision_*',
];

/**
 * List of tables to be omitted entirely from SQL dumps made by the 'sql-dump'
 * and 'sql-sync' commands when the "--skip-tables-key=common" option is
 * provided on the command line.  This is useful if your database contains
 * non-Drupal tables used by some other application or during a migration for
 * example.  You may add new tables to the existing array or add a new element.
 */
$options['skip-tables']['common'] = [
  'field_deleted_*',
  'migration_*',
];

/**
 * Use Drupal version specific CLI history instead of per site.
 */
$command_specific['core-cli'] = [
  'version-history' => TRUE,
];

if (file_exists(__DIR__ . '/drushrc.local.php')) {
  include_once __DIR__ . '/drushrc.local.php';
}

