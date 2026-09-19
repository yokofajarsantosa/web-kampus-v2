<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_033 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_033/'); $this->load->model('nav_033_model'); }
    public function index() {
        $data = $this->nav_033_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_033/index', ['page'=>$data]);
    }
}
