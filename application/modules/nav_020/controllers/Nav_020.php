<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_020 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_020/'); $this->load->model('nav_020_model'); }
    public function index() {
        $data = $this->nav_020_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_020/index', ['page'=>$data]);
    }
}
