<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_083 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_083/'); $this->load->model('nav_083_model'); }
    public function index() {
        $data = $this->nav_083_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_083/index', ['page'=>$data]);
    }
}
