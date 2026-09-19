<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_047 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_047/'); $this->load->model('nav_047_model'); }
    public function index() {
        $data = $this->nav_047_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_047/index', ['page'=>$data]);
    }
}
