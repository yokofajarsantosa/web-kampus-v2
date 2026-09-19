<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_045 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_045/'); $this->load->model('nav_045_model'); }
    public function index() {
        $data = $this->nav_045_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_045/index', ['page'=>$data]);
    }
}
