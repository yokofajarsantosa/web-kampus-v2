<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_021 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_021/'); $this->load->model('nav_021_model'); }
    public function index() {
        $data = $this->nav_021_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_021/index', ['page'=>$data]);
    }
}
