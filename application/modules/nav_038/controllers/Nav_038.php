<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_038 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_038/'); $this->load->model('nav_038_model'); }
    public function index() {
        $data = $this->nav_038_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_038/index', ['page'=>$data]);
    }
}
