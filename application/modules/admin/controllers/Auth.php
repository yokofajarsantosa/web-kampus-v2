<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends MY_Controller {
    public function __construct(){parent::__construct();$this->load->add_package_path(APPPATH.'modules/admin/');$this->load->model('admin_model');}
    public function login(){if($this->session->userdata('admin_logged_in')){redirect('admin/dashboard');return;}if($this->input->method(TRUE)==='POST'){$user=$this->admin_model->user(trim((string)$this->input->post('email',TRUE)));if($user&&password_verify((string)$this->input->post('password'),$user['password_hash'])){$this->session->set_userdata(['admin_logged_in'=>TRUE,'admin_user_id'=>$user['id'],'admin_name'=>$user['name']]);redirect('admin/dashboard');return;}$data['error']='Email atau password tidak sesuai.';}else{$data['error']='';}$this->load->view('auth/login',$data);}
    public function logout(){$this->session->sess_destroy();redirect('admin');}
}
