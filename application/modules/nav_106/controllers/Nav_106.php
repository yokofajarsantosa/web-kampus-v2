<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_106 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_106/'); $this->load->model('nav_106_model'); }
    public function index() {
        $data = $this->nav_106_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_106/index', ['page'=>$data]);
    }
}
