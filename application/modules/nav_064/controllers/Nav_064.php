<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_064 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_064/'); $this->load->model('nav_064_model'); }
    public function index() {
        $data = $this->nav_064_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_064/index', ['page'=>$data]);
    }
}
