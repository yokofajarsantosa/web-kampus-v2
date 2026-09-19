<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_066 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_066/'); $this->load->model('nav_066_model'); }
    public function index() {
        $data = $this->nav_066_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_066/index', ['page'=>$data]);
    }
}
