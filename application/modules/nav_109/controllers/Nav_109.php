<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_109 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_109/'); $this->load->model('nav_109_model'); }
    public function index() {
        $data = $this->nav_109_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_109/index', ['page'=>$data]);
    }
}
