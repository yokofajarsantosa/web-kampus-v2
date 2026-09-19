<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->add_package_path(APPPATH.'modules/home/');
        $this->load->model('home_model');
    }
    public function index(){
        $data['site']          = $this->home_model->settings();
        $data['campuses']      = $this->home_model->campuses();
        $data['alumni']        = $this->home_model->alumni();
        $data['news']          = $this->home_model->news();
        $data['video']         = $this->home_model->video();
        $data['portal_sistem'] = $this->home_model->portal_sistem();
        $data['kerjasama']     = $this->home_model->kerjasama();
        $data['navigation']    = $this->home_model->navigation();
        $data['contents']      = $this->home_model->contents();
        $this->load->view('home/index', $data);
    }
}
