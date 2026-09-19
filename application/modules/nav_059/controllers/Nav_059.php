<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_059 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_059/'); $this->load->model('nav_059_model'); }
    public function index() {
        $data = $this->nav_059_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_059/index', ['page'=>$data]);
    }
}
