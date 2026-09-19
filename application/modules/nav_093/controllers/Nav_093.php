<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_093 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_093/'); $this->load->model('nav_093_model'); }
    public function index() {
        $data = $this->nav_093_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_093/index', ['page'=>$data]);
    }
}
