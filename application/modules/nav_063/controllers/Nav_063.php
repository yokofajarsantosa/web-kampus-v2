<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_063 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_063/'); $this->load->model('nav_063_model'); }
    public function index() {
        $data = $this->nav_063_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_063/index', ['page'=>$data]);
    }
}
