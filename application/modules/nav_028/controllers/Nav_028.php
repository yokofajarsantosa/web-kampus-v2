<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_028 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_028/'); $this->load->model('nav_028_model'); }
    public function index() {
        $data = $this->nav_028_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_028/index', ['page'=>$data]);
    }
}
