<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_013 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_013/');
        $this->load->model('nav_013_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_013_model->settings();
        $data['navigation'] = $this->nav_013_model->navigation();
        $data['contents']   = $this->nav_013_model->contents();
        
        $pageData = $this->nav_013_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_013/index', $data);
    }
}
