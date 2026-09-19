<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_120 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_120/'); $this->load->model('nav_120_model'); }
    public function index() {
        $data = $this->nav_120_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_120/index', ['page'=>$data]);
    }
}
