<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to insure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * If there is a local settings file, then include it
 */
$local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

/**
* Private file path:
*
* A local file system path where private files will be stored. This directory
* must be absolute, outside of the Drupal installation directory and not
* accessible over the web.
*
* Note: Caches need to be cleared when this value is changed to make the
* private:// stream wrapper available to the system.
*
* See https://www.drupal.org/documentation/modules/file for more information
* about securing private files.
*/
$settings['file_private_path'] = '../private';