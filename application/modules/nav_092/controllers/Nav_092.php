<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_092 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_092/'); $this->load->model('nav_092_model'); }
    public function index() {
        $data = $this->nav_092_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_092/index', ['page'=>$data]);
    }
}
