<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_023 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_023/'); $this->load->model('nav_023_model'); }
    public function index() {
        $data = $this->nav_023_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_023/index', ['page'=>$data]);
    }
}
