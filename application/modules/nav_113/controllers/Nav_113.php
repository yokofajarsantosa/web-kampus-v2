<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_113 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_113/'); $this->load->model('nav_113_model'); }
    public function index() {
        $data = $this->nav_113_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_113/index', ['page'=>$data]);
    }
}
