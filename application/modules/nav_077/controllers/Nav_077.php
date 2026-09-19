<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_077 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_077/'); $this->load->model('nav_077_model'); }
    public function index() {
        $data = $this->nav_077_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_077/index', ['page'=>$data]);
    }
}
