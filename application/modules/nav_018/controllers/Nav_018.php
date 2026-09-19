<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_018 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_018/'); $this->load->model('nav_018_model'); }
    public function index() {
        $data = $this->nav_018_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_018/index', ['page'=>$data]);
    }
}
