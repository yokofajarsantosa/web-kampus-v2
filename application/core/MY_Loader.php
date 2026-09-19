<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {
    public function module($module, $params = array()) {
        $module = trim($module, '/');
        $parts = explode('/', $module);
        $controller = array_pop($parts);
        $directory = implode('/', $parts);
        $file = APPPATH . 'modules/' . $directory . '/controllers/' . $controller . '.php';
        if (!is_file($file)) { show_error('HMVC module controller not found: ' . $module); }
        require_once $file;
        $class = ucfirst($controller);
        $instance = new $class();
        return call_user_func_array(array($instance, 'index'), $params);
    }
}
