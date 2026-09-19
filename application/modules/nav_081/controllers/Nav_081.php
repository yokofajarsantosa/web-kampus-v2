<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_081 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_081/'); $this->load->model('nav_081_model'); }
    public function index() {
        $data = $this->nav_081_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_081/index', ['page'=>$data]);
    }
}
