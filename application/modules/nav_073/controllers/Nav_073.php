<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_073 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_073/'); $this->load->model('nav_073_model'); }
    public function index() {
        $data = $this->nav_073_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_073/index', ['page'=>$data]);
    }
}
