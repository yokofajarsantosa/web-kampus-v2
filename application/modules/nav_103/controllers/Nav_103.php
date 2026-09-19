<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_103 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_103/'); $this->load->model('nav_103_model'); }
    public function index() {
        $data = $this->nav_103_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_103/index', ['page'=>$data]);
    }
}
