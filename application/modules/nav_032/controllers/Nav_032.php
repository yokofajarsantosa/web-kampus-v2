<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_032 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_032/'); $this->load->model('nav_032_model'); }
    public function index() {
        $data = $this->nav_032_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_032/index', ['page'=>$data]);
    }
}
