<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_049 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_049/'); $this->load->model('nav_049_model'); }
    public function index() {
        $data = $this->nav_049_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_049/index', ['page'=>$data]);
    }
}
