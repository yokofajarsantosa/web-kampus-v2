<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_051 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_051/'); $this->load->model('nav_051_model'); }
    public function index() {
        $data = $this->nav_051_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_051/index', ['page'=>$data]);
    }
}
