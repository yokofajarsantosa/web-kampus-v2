<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_146 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->add_package_path(APPPATH . 'modules/nav_146/');
        $this->load->model('nav_146_model');
    }

    public function index()
    {
        $data = $this->nav_146_model->page();

        if (!$data) {
            show_404();
            return;
        }

        redirect($data->url);
    }
}
