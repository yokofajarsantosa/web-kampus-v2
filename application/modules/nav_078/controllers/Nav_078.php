<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_078 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_078/'); $this->load->model('nav_078_model'); }
    public function index() {
        $data = $this->nav_078_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_078/index', ['page'=>$data]);
    }
}
