<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_128 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_128/'); $this->load->model('nav_128_model'); }
    public function index() {
        $data = $this->nav_128_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_128/index', ['page'=>$data]);
    }
}
