<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_098 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_098/'); $this->load->model('nav_098_model'); }
    public function index() {
        $data = $this->nav_098_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_098/index', ['page'=>$data]);
    }
}
