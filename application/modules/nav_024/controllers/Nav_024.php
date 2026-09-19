<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_024 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_024/'); $this->load->model('nav_024_model'); }
    public function index() {
        $data = $this->nav_024_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_024/index', ['page'=>$data]);
    }
}
