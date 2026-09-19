<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_017 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_017/'); $this->load->model('nav_017_model'); }
    public function index() {
        $data = $this->nav_017_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_017/index', ['page'=>$data]);
    }
}
