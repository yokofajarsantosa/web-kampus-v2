<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_119 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_119/'); $this->load->model('nav_119_model'); }
    public function index() {
        $data = $this->nav_119_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_119/index', ['page'=>$data]);
    }
}
