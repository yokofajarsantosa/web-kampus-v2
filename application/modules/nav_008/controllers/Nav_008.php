<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_008 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_008/');
        $this->load->model('nav_008_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_008_model->settings();
        $data['navigation'] = $this->nav_008_model->navigation();
        $data['contents']   = $this->nav_008_model->contents();
        
        $pageData = $this->nav_008_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_008/index', $data);
    }
}
