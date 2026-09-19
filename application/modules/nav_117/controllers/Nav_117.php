<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_117 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_117/'); $this->load->model('nav_117_model'); }
    public function index() {
        $data = $this->nav_117_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_117/index', ['page'=>$data]);
    }
}
