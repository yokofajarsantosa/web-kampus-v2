<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_014 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_014/'); $this->load->model('nav_014_model'); }
    public function index() {
        $data = $this->nav_014_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_014/index', ['page'=>$data]);
    }
}
