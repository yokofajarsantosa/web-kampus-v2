<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_112 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_112/'); $this->load->model('nav_112_model'); }
    public function index() {
        $data = $this->nav_112_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_112/index', ['page'=>$data]);
    }
}
