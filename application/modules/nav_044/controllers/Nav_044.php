<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_044 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_044/'); $this->load->model('nav_044_model'); }
    public function index() {
        $data = $this->nav_044_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_044/index', ['page'=>$data]);
    }
}
