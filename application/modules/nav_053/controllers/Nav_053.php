<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_053 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_053/'); $this->load->model('nav_053_model'); }
    public function index() {
        $data = $this->nav_053_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_053/index', ['page'=>$data]);
    }
}
