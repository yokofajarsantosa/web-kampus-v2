<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_104 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_104/'); $this->load->model('nav_104_model'); }
    public function index() {
        $data = $this->nav_104_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_104/index', ['page'=>$data]);
    }
}
