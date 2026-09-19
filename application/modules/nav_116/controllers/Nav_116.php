<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_116 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_116/'); $this->load->model('nav_116_model'); }
    public function index() {
        $data = $this->nav_116_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_116/index', ['page'=>$data]);
    }
}
