<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_026 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_026/'); $this->load->model('nav_026_model'); }
    public function index() {
        $data = $this->nav_026_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_026/index', ['page'=>$data]);
    }
}
