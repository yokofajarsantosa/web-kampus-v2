<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_035 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_035/'); $this->load->model('nav_035_model'); }
    public function index() {
        $data = $this->nav_035_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_035/index', ['page'=>$data]);
    }
}
