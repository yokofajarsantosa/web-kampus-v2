<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_055 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_055/'); $this->load->model('nav_055_model'); }
    public function index() {
        $data = $this->nav_055_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_055/index', ['page'=>$data]);
    }
}
