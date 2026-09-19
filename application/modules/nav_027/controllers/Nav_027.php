<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_027 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_027/'); $this->load->model('nav_027_model'); }
    public function index() {
        $data = $this->nav_027_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_027/index', ['page'=>$data]);
    }
}
