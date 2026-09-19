<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_056 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_056/'); $this->load->model('nav_056_model'); }
    public function index() {
        $data = $this->nav_056_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_056/index', ['page'=>$data]);
    }
}
