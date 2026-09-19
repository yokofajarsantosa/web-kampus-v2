<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_050 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_050/'); $this->load->model('nav_050_model'); }
    public function index() {
        $data = $this->nav_050_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_050/index', ['page'=>$data]);
    }
}
