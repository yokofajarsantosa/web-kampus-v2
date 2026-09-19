<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Local Laragon configuration.
 * Works both with:
 *   http://localhost/ci3-hmvc/
 * and a Laragon virtual host such as:
 *   http://ci3-hmvc.test/
 */
$https = (!empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off');
$protocol = $https ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$scriptName = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '/index.php';
$basePath = rtrim(str_replace('\\', '/', dirname($scriptName)), '/');

$config['base_url'] = $protocol . '://' . $host . ($basePath ? $basePath . '/' : '/');
$config['index_page'] = '';
$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['encryption_key'] = 'stifar-ci3-local-development-key-change-me';

$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'stifar_session';
$config['sess_save_path'] = APPPATH . 'cache/sessions/';
$config['log_threshold'] = 1;
$config['log_path'] = APPPATH . 'logs/';
$config['csrf_protection'] = TRUE;
$config['enable_hooks'] = FALSE;
$config['composer_autoload'] = FALSE;
$config['subclass_prefix'] = 'MY_';
