<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_111 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_111/'); $this->load->model('nav_111_model'); }
    public function index() {
        $data = $this->nav_111_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_111/index', ['page'=>$data]);
    }
}
