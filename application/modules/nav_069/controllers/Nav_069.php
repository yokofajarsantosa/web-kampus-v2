<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_069 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_069/'); $this->load->model('nav_069_model'); }
    public function index() {
        $data = $this->nav_069_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_069/index', ['page'=>$data]);
    }
}
