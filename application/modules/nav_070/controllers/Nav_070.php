<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_070 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_070/'); $this->load->model('nav_070_model'); }
    public function index() {
        $data = $this->nav_070_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_070/index', ['page'=>$data]);
    }
}
