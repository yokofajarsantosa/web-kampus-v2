<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_138 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_138/'); $this->load->model('nav_138_model'); }
    public function index() {
        $data = $this->nav_138_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_138/index', ['page'=>$data]);
    }
}
