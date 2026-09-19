<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_121 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_121/'); $this->load->model('nav_121_model'); }
    public function index() {
        $data = $this->nav_121_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_121/index', ['page'=>$data]);
    }
}
