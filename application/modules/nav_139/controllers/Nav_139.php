<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_139 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_139/'); $this->load->model('nav_139_model'); }
    public function index() {
        $data = $this->nav_139_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_139/index', ['page'=>$data]);
    }
}
