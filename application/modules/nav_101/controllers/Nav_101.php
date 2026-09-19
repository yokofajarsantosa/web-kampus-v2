<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_101 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_101/'); $this->load->model('nav_101_model'); }
    public function index() {
        $data = $this->nav_101_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_101/index', ['page'=>$data]);
    }
}
