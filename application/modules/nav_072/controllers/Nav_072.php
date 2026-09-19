<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_072 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_072/'); $this->load->model('nav_072_model'); }
    public function index() {
        $data = $this->nav_072_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_072/index', ['page'=>$data]);
    }
}
