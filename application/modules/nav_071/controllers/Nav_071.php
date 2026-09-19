<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_071 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_071/'); $this->load->model('nav_071_model'); }
    public function index() {
        $data = $this->nav_071_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_071/index', ['page'=>$data]);
    }
}
