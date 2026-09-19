<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_110 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_110/'); $this->load->model('nav_110_model'); }
    public function index() {
        $data = $this->nav_110_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_110/index', ['page'=>$data]);
    }
}
