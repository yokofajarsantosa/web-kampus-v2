<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_144 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->add_package_path(APPPATH . 'modules/nav_144/');
        $this->load->model('nav_144_model');
    }
    public function index()
    {
        $data['site'] = $this->nav_144_model->settings();
        $data['navigation'] = $this->nav_144_model->navigation();
        $data['contents']   = $this->nav_144_model->contents();
        
        $pageData = $this->nav_144_model->page();
        if (!$pageData) {
            show_404();
            return;
        }
        
        $data['page'] = $pageData;
        $this->load->view('nav_144/index', $data);
    }
}
