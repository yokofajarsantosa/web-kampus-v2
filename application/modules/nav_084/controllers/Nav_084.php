<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_084 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_084/'); $this->load->model('nav_084_model'); }
    public function index() {
        $data = $this->nav_084_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_084/index', ['page'=>$data]);
    }
}
