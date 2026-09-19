<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_076 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_076/'); $this->load->model('nav_076_model'); }
    public function index() {
        $data = $this->nav_076_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_076/index', ['page'=>$data]);
    }
}
