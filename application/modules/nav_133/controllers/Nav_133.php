<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_133 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_133/'); $this->load->model('nav_133_model'); }
    public function index() {
        $data = $this->nav_133_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_133/index', ['page'=>$data]);
    }
}
