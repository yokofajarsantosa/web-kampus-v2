<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_041 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_041/'); $this->load->model('nav_041_model'); }
    public function index() {
        $data = $this->nav_041_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_041/index', ['page'=>$data]);
    }
}
