<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_003 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_003/');
        $this->load->model('nav_003_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_003_model->settings();
        $data['navigation'] = $this->nav_003_model->navigation();
        $data['contents']   = $this->nav_003_model->contents();
        
        $pageData = $this->nav_003_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_003/index', $data);
    }
}
