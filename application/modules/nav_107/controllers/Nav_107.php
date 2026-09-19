<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_107 extends MY_Controller {
    public function __construct() { parent::__construct(); $this->load->add_package_path(APPPATH.'modules/nav_107/'); $this->load->model('nav_107_model'); }
    public function index() {
        $data = $this->nav_107_model->page();
        if (!$data) { show_404(); return; }
        $this->load->view('nav_107/index', ['page'=>$data]);
    }
}
