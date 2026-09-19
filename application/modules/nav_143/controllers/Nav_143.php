<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_143 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_143/'); $this->load->model('nav_143_model'); }
    public function index() {
        $data = $this->nav_143_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_143/index', ['page'=>$data]);
    }
}
