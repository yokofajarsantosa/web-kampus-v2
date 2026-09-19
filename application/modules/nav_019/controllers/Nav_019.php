<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_019 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_019/'); $this->load->model('nav_019_model'); }
    public function index() {
        $data = $this->nav_019_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_019/index', ['page'=>$data]);
    }
}
