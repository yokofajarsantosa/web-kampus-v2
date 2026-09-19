<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_088 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_088/'); $this->load->model('nav_088_model'); }
    public function index() {
        $data = $this->nav_088_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_088/index', ['page'=>$data]);
    }
}
