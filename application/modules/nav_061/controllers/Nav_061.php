<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_061 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_061/'); $this->load->model('nav_061_model'); }
    public function index() {
        $data = $this->nav_061_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_061/index', ['page'=>$data]);
    }
}
