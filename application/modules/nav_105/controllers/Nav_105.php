<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_105 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_105/'); $this->load->model('nav_105_model'); }
    public function index() {
        $data = $this->nav_105_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_105/index', ['page'=>$data]);
    }
}
