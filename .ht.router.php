<?php
/**
 * @file
 * Routing-script for the built-in PHP web server.
 *
 * This script provides basic support for clean URLs by faking the "q" query
 * parameter as the main .htaccess would do.
 *
 * The built-in webserver should _only_ be used for development and test as it
 * has a number of limitations that makes running Drupal on it highly insecure
 * and somewhat limited.
 *
 * In particular be aware that:
 *   - The server is single-threaded, any requests made during the execution of
 *     the main request will hang until the main request has been completed.
 *   - The webserver does not enforce any of the settings in .htacccess in
 *     particular a remote user will be able to download files that normally
 *     would be protected from direct access such as .module files.
 *
 * Usage:
 * php -S localhost:8888 .ht.router.php
 *
 * @see http://php.net/manual/en/features.commandline.webserver.php
 */

$url = parse_url($_SERVER["REQUEST_URI"]);
if (file_exists('.' . $url['path'])) {
  // Serve the requested resource as-is.
  return FALSE;
}

// Populate the "q" query key with the path, skip the leading slash.
$_GET['q'] = $_REQUEST['q'] = substr($url['path'], 1);

// Include the main index.php and let core take over.
include 'index.php';
