<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_126 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_126/'); $this->load->model('nav_126_model'); }
    public function index() {
        $data = $this->nav_126_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_126/index', ['page'=>$data]);
    }
}
