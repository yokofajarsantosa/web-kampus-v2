<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_031 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_031/'); $this->load->model('nav_031_model'); }
    public function index() {
        $data = $this->nav_031_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_031/index', ['page'=>$data]);
    }
}
