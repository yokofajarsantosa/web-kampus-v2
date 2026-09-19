<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Modules {
    public static function run($module, $params = array()) {
        return get_instance()->load->module($module, $params);
    }
}
