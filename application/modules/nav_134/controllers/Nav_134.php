<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_134 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_134/'); $this->load->model('nav_134_model'); }
    public function index() {
        $data = $this->nav_134_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_134/index', ['page'=>$data]);
    }
}
