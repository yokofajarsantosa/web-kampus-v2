<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_085 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_085/'); $this->load->model('nav_085_model'); }
    public function index() {
        $data = $this->nav_085_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_085/index', ['page'=>$data]);
    }
}
