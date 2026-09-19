<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_099 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_099/'); $this->load->model('nav_099_model'); }
    public function index() {
        $data = $this->nav_099_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_099/index', ['page'=>$data]);
    }
}
