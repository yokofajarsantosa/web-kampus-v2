<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_102 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_102/'); $this->load->model('nav_102_model'); }
    public function index() {
        $data = $this->nav_102_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_102/index', ['page'=>$data]);
    }
}
