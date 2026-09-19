<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_135 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_135/'); $this->load->model('nav_135_model'); }
    public function index() {
        $data = $this->nav_135_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_135/index', ['page'=>$data]);
    }
}
