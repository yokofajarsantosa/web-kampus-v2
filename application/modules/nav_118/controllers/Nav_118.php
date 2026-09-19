<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_118 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_118/'); $this->load->model('nav_118_model'); }
    public function index() {
        $data = $this->nav_118_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_118/index', ['page'=>$data]);
    }
}
