<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_042 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_042/'); $this->load->model('nav_042_model'); }
    public function index() {
        $data = $this->nav_042_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_042/index', ['page'=>$data]);
    }
}
