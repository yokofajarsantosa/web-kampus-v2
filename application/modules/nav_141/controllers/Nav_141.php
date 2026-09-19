<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_141 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_141/'); $this->load->model('nav_141_model'); }
    public function index() {
        $data = $this->nav_141_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_141/index', ['page'=>$data]);
    }
}
