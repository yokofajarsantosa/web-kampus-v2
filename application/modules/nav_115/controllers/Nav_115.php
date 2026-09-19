<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_115 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_115/'); $this->load->model('nav_115_model'); }
    public function index() {
        $data = $this->nav_115_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_115/index', ['page'=>$data]);
    }
}
