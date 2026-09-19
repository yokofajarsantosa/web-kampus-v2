<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_057 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_057/'); $this->load->model('nav_057_model'); }
    public function index() {
        $data = $this->nav_057_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_057/index', ['page'=>$data]);
    }
}
