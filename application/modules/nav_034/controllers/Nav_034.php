<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_034 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_034/'); $this->load->model('nav_034_model'); }
    public function index() {
        $data = $this->nav_034_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_034/index', ['page'=>$data]);
    }
}
