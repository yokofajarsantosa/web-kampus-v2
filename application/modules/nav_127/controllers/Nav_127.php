<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_127 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_127/'); $this->load->model('nav_127_model'); }
    public function index() {
        $data = $this->nav_127_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_127/index', ['page'=>$data]);
    }
}
