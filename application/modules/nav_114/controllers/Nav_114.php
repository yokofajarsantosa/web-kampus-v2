<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_114 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_114/'); $this->load->model('nav_114_model'); }
    public function index() {
        $data = $this->nav_114_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_114/index', ['page'=>$data]);
    }
}
