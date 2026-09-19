<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_100 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_100/'); $this->load->model('nav_100_model'); }
    public function index() {
        $data = $this->nav_100_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_100/index', ['page'=>$data]);
    }
}
