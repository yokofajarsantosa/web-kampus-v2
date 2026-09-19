<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_046 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_046/'); $this->load->model('nav_046_model'); }
    public function index() {
        $data = $this->nav_046_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_046/index', ['page'=>$data]);
    }
}
