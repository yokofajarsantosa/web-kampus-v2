<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_052 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_052/'); $this->load->model('nav_052_model'); }
    public function index() {
        $data = $this->nav_052_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_052/index', ['page'=>$data]);
    }
}
