<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_086 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_086/'); $this->load->model('nav_086_model'); }
    public function index() {
        $data = $this->nav_086_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_086/index', ['page'=>$data]);
    }
}
