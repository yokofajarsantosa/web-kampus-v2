<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_054 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_054/'); $this->load->model('nav_054_model'); }
    public function index() {
        $data = $this->nav_054_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_054/index', ['page'=>$data]);
    }
}
