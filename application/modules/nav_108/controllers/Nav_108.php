<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_108 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_108/'); $this->load->model('nav_108_model'); }
    public function index() {
        $data = $this->nav_108_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_108/index', ['page'=>$data]);
    }
}
