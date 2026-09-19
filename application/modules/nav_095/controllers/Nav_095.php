<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_095 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_095/'); $this->load->model('nav_095_model'); }
    public function index() {
        $data = $this->nav_095_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_095/index', ['page'=>$data]);
    }
}
