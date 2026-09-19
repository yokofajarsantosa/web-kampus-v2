<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_048 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_048/'); $this->load->model('nav_048_model'); }
    public function index() {
        $data = $this->nav_048_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_048/index', ['page'=>$data]);
    }
}
