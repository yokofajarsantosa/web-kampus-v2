<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_040 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_040/'); $this->load->model('nav_040_model'); }
    public function index() {
        $data = $this->nav_040_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_040/index', ['page'=>$data]);
    }
}
