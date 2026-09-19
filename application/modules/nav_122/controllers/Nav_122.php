<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_122 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_122/'); $this->load->model('nav_122_model'); }
    public function index() {
        $data = $this->nav_122_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_122/index', ['page'=>$data]);
    }
}
