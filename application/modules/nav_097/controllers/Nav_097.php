<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_097 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_097/'); $this->load->model('nav_097_model'); }
    public function index() {
        $data = $this->nav_097_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_097/index', ['page'=>$data]);
    }
}
