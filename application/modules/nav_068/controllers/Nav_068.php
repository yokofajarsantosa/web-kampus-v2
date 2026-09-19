<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_068 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_068/'); $this->load->model('nav_068_model'); }
    public function index() {
        $data = $this->nav_068_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_068/index', ['page'=>$data]);
    }
}
