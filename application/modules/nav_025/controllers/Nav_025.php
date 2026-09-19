<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_025 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_025/'); $this->load->model('nav_025_model'); }
    public function index() {
        $data = $this->nav_025_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_025/index', ['page'=>$data]);
    }
}
