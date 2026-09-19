<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_062 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_062/'); $this->load->model('nav_062_model'); }
    public function index() {
        $data = $this->nav_062_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_062/index', ['page'=>$data]);
    }
}
