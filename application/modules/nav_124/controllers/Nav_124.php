<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_124 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_124/'); $this->load->model('nav_124_model'); }
    public function index() {
        $data = $this->nav_124_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_124/index', ['page'=>$data]);
    }
}
