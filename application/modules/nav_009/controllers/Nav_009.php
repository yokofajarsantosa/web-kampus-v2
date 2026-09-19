<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_009 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_009/');
        $this->load->model('nav_009_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_009_model->settings();
        $data['navigation'] = $this->nav_009_model->navigation();
        $data['contents']   = $this->nav_009_model->contents();
        
        $pageData = $this->nav_009_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_009/index', $data);
    }
}
