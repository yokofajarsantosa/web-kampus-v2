<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_010 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_010/');
        $this->load->model('nav_010_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_010_model->settings();
        $data['navigation'] = $this->nav_010_model->navigation();
        $data['contents']   = $this->nav_010_model->contents();
        
        $pageData = $this->nav_010_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_010/index', $data);
    }
}
