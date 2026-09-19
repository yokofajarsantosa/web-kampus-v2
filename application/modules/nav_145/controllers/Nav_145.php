<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_145 extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->add_package_path(APPPATH . 'modules/nav_145/');
        $this->load->model('nav_145_model');
    }

    public function index()
    {
        $data = $this->nav_145_model->page();

        if (!$data) {
            show_404();
            return;
        }

        redirect($data->url);
    }
}
