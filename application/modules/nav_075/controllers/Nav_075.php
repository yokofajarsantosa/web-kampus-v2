<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_075 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_075/'); $this->load->model('nav_075_model'); }
    public function index() {
        $data = $this->nav_075_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_075/index', ['page'=>$data]);
    }
}
