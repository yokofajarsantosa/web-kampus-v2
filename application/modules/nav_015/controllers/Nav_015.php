<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_015 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_015/'); $this->load->model('nav_015_model'); }
    public function index() {
        $data = $this->nav_015_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_015/index', ['page'=>$data]);
    }
}
