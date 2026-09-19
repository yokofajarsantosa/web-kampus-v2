<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_131 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_131/'); $this->load->model('nav_131_model'); }
    public function index() {
        $data = $this->nav_131_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_131/index', ['page'=>$data]);
    }
}
