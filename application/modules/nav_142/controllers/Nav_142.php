<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_142 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_142/'); $this->load->model('nav_142_model'); }
    public function index() {
        $data = $this->nav_142_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_142/index', ['page'=>$data]);
    }
}
