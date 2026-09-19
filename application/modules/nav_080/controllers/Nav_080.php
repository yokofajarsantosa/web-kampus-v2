<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_080 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_080/'); $this->load->model('nav_080_model'); }
    public function index() {
        $data = $this->nav_080_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_080/index', ['page'=>$data]);
    }
}
