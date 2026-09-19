<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_029 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_029/'); $this->load->model('nav_029_model'); }
    public function index() {
        $data = $this->nav_029_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_029/index', ['page'=>$data]);
    }
}
