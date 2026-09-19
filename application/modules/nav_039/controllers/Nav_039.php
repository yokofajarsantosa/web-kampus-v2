<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_039 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_039/'); $this->load->model('nav_039_model'); }
    public function index() {
        $data = $this->nav_039_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_039/index', ['page'=>$data]);
    }
}
