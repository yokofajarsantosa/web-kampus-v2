<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_065 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_065/'); $this->load->model('nav_065_model'); }
    public function index() {
        $data = $this->nav_065_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_065/index', ['page'=>$data]);
    }
}
