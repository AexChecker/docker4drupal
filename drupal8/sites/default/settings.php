<?php
/**
 * @file
 * Main settings file for Drupal 8.
 */

require_once __DIR__ . '/settings.db.php';

$config_directories[CONFIG_SYNC_DIRECTORY] = 'sites/default/config';

// !! THIS HASH MUST BE REGENERATED BEFORE EACH DEPLOY.
// Please use $uuidgen -r | perl -pe 's/-/0/g'
$settings['hash_salt'] = 'e48133f90355c04ea90b20f042dba343008f';
if (file_exists(__DIR__ . '/hash_salt.txt')) {
  // Special construction for regular CI/CD with the same code base.
  $settings['hash_salt'] = @trim(@file_get_contents(__DIR__ . '/hash_salt.txt'));
}

// General Project Settings.
$settings['install_profile'] = 'standard';
$settings['update_free_access'] = FALSE;
#$settings['deployment_identifier'] = @trim(@file_get_contents(DRUPAL_ROOT . './deployment-identifier.txt'));
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;
# $settings['file_public_base_url'] = 'http://downloads.example.com/files';
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = 'sites/default/private';
#$settings['maintenance_theme'] = 'starter';
$settings['container_yamls'][] = __DIR__ . '/services.yml';

$settings['trusted_host_patterns'][] = '^localhost$';

#$config['system.theme']['default'] = 'starter';
$config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
$config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
#$config['system.performance']['fast_404']['html'] = @file_get_contents(__DIR__ . './error-404.html');

$config['system.performance']['css']['preprocess'] = TRUE;
$config['system.performance']['js']['preprocess'] = TRUE;

$config['environment_indicator.indicator']['bg_color'] = 'red';
$config['environment_indicator.indicator']['fg_color'] = 'wight';
$config['environment_indicator.indicator']['name'] = 'Default';

if (isset($_SERVER['SERVER_NAME'])) {
  if ($_SERVER['SERVER_NAME'] == '__PUT_YOUR_PROD_DOMAIN_NAME__') {
    $config['environment_indicator.indicator']['bg_color'] = '#5A0032';
    $config['environment_indicator.indicator']['fg_color'] = '#FFFFFF';
    $config['environment_indicator.indicator']['name'] = 'Production';
  }
  if ($_SERVER['SERVER_NAME'] == '__PUT_YOUR_STAGE_DOMAIN_NAME__') {
    $config['environment_indicator.indicator']['bg_color'] = '#FF7CC3';
    $config['environment_indicator.indicator']['fg_color'] = '#000000';
    $config['environment_indicator.indicator']['name'] = 'Staging';
  }
  elseif ($_SERVER['SERVER_NAME'] == 'localhost') {
    $config['environment_indicator.indicator']['bg_color'] = '#6F0000';
    $config['environment_indicator.indicator']['fg_color'] = '#FFFFFF';
    $config['environment_indicator.indicator']['name'] = 'Localhost';
  }
}

if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}

