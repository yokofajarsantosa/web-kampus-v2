<?php
/** CodeIgniter 3 HMVC front controller. */
// CI3 emits E_DEPRECATED notices on PHP 8.2+ for legacy dynamic properties.
// Keep warnings and fatal errors visible while hiding compatibility noise locally.
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
$system_path = 'system';
$application_folder = 'application';
$view_folder = '';

define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

if (defined('STDIN')) {
    chdir(__DIR__);
}

if (($_temp = realpath($system_path)) !== false) {
    $system_path = $_temp;
} else {
    $system_path = rtrim($system_path, '/\\');
}

define('BASEPATH', $system_path . DIRECTORY_SEPARATOR);

define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

define('SYSDIR', basename(BASEPATH));

if (is_dir($application_folder)) {
    $application_folder = realpath($application_folder);
} elseif (is_dir(BASEPATH . $application_folder . DIRECTORY_SEPARATOR)) {
    $application_folder = BASEPATH . trim($application_folder, '/\\');
} else {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your application folder path does not appear to be set correctly.';
    exit(3);
}

define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);

if (!empty($view_folder) && is_dir($view_folder)) {
    $view_folder = realpath($view_folder);
} elseif (is_dir(APPPATH . 'views' . DIRECTORY_SEPARATOR)) {
    $view_folder = APPPATH . 'views';
} else {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your view folder path does not appear to be set correctly.';
    exit(3);
}

define('VIEWPATH', rtrim($view_folder, '/\\') . DIRECTORY_SEPARATOR);

require_once BASEPATH . 'core/CodeIgniter.php';
