<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_130 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_130/'); $this->load->model('nav_130_model'); }
    public function index() {
        $data = $this->nav_130_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_130/index', ['page'=>$data]);
    }
}
