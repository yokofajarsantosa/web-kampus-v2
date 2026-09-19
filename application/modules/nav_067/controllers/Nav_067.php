<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_067 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_067/'); $this->load->model('nav_067_model'); }
    public function index() {
        $data = $this->nav_067_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_067/index', ['page'=>$data]);
    }
}
