<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_060 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_060/'); $this->load->model('nav_060_model'); }
    public function index() {
        $data = $this->nav_060_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_060/index', ['page'=>$data]);
    }
}
