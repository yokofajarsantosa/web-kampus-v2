<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller {
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('admin_logged_in')){redirect('admin');return;}
        $this->load->add_package_path(APPPATH.'modules/admin/');
        $this->load->model('admin_model');
    }
    public function index(){
        $data=[
            'settings'=>$this->admin_model->settings(),
            'campuses'=>$this->admin_model->campuses(),
            'alumni'=>$this->admin_model->alumni(),
            'news'=>$this->admin_model->news(),
            'video'=>$this->admin_model->video(),
            'portal_sistem'=>$this->admin_model->portal_sistem(),
            'kerjasama'=>$this->admin_model->kerjasama(),
            'navigation'=>$this->admin_model->navigation(),
            'contents'=>$this->admin_model->contents(),
            'pages'=>$this->admin_model->pages(),
            'flash'=>$this->session->flashdata('flash')
        ];
        $this->load->view('dashboard/index',$data);
    }
    public function save($type){
        if($this->input->method(TRUE)!=='POST'){show_404();return;}
        switch($type){
            case 'settings':$this->admin_model->save_settings($this->input->post());break;
            case 'video':$this->admin_model->save_video($this->input->post());break;
            case 'campus':$this->admin_model->save_campus($this->input->post());break;
            case 'alumni':$this->admin_model->save_alumni($this->input->post());break;
            case 'news':$this->admin_model->save_news($this->input->post());break;
            case 'portal':$this->admin_model->save_portal($this->input->post());break;
            case 'kerjasama':$this->admin_model->save_kerjasama($this->input->post());break;
            case 'navigation':$this->admin_model->save_navigation($this->input->post());break;
            case 'content':$this->admin_model->save_content($this->input->post());break;
            case 'page':$this->admin_model->save_page($this->input->post());break;
            case 'add_navigation':$this->admin_model->add_navigation($this->input->post());break;
            default:show_404();return;
        }
        $this->session->set_flashdata('flash','Perubahan berhasil disimpan.');
        redirect('admin/dashboard');
    }
    public function delete($type,$id){
        $map=['campus'=>'campuses','alumni'=>'alumni','news'=>'news','portal'=>'portal_sistem','kerjasama'=>'kerjasama'];
        if(isset($map[$type])){
            $this->admin_model->delete($map[$type],(int)$id);
            $this->session->set_flashdata('flash','Data berhasil dihapus.');
        }
        redirect('admin/dashboard');
    }
}
