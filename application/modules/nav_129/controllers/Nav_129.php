<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_129 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_129/'); $this->load->model('nav_129_model'); }
    public function index() {
        $data = $this->nav_129_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_129/index', ['page'=>$data]);
    }
}
