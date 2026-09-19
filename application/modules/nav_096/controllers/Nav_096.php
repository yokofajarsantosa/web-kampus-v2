<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_096 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_096/'); $this->load->model('nav_096_model'); }
    public function index() {
        $data = $this->nav_096_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_096/index', ['page'=>$data]);
    }
}
