<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_074 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_074/'); $this->load->model('nav_074_model'); }
    public function index() {
        $data = $this->nav_074_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_074/index', ['page'=>$data]);
    }
}
