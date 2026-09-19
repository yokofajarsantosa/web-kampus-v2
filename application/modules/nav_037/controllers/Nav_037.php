<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_037 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_037/'); $this->load->model('nav_037_model'); }
    public function index() {
        $data = $this->nav_037_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_037/index', ['page'=>$data]);
    }
}
