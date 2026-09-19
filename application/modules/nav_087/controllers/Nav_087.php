<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_087 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_087/'); $this->load->model('nav_087_model'); }
    public function index() {
        $data = $this->nav_087_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_087/index', ['page'=>$data]);
    }
}
