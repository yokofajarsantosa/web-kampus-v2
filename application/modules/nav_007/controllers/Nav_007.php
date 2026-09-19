<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_007 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_007/');
        $this->load->model('nav_007_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_007_model->settings();
        $data['navigation'] = $this->nav_007_model->navigation();
        $data['contents']   = $this->nav_007_model->contents();
        
        $pageData = $this->nav_007_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_007/index', $data);
    }
}
