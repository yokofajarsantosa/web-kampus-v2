<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_094 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_094/'); $this->load->model('nav_094_model'); }
    public function index() {
        $data = $this->nav_094_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_094/index', ['page'=>$data]);
    }
}
