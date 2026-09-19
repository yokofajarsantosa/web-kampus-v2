<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_022 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_022/'); $this->load->model('nav_022_model'); }
    public function index() {
        $data = $this->nav_022_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_022/index', ['page'=>$data]);
    }
}
