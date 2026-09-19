<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MX_Loader extends CI_Loader
{
    public function view($view, $vars = array(), $return = FALSE)
    {
        return parent::view($view, $vars, $return);
    }
}
