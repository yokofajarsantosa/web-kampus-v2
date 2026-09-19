<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_043 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_043/'); $this->load->model('nav_043_model'); }
    public function index() {
        $data = $this->nav_043_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_043/index', ['page'=>$data]);
    }
}
