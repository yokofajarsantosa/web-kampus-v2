<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
    public function settings(){return $this->db->get_where('site_settings',['id'=>1])->row_array();}
    public function user($email){return $this->db->where('email',$email)->where('active',1)->get('admin_users')->row_array();}
    public function campuses(){return $this->db->order_by('sort_order','ASC')->get('campuses')->result_array();}
    public function alumni(){return $this->db->order_by('sort_order','ASC')->order_by('id','DESC')->get('alumni')->result_array();}
    public function news(){return $this->db->order_by('published_at','DESC')->get('news')->result_array();}
    public function video(){return $this->db->order_by('id','DESC')->get('videos')->row_array();}
    public function portal_sistem(){return $this->db->order_by('id','ASC')->get('portal_sistem')->result_array();}
    public function kerjasama(){return $this->db->order_by('id','ASC')->get('kerjasama')->result_array();}
    public function navigation(){return $this->db->order_by('sort_order','ASC')->get('site_navigation')->result_array();}
    public function contents(){return $this->db->order_by('id','ASC')->get('site_content')->result_array();}

    public function save_settings($p){
        $data=[
            'name'=>trim($p['site_name']??''),
            'tagline'=>trim($p['tagline']??''),
            'description'=>trim($p['description']??''),
            'address'=>trim($p['address']??''),
            'phone'=>trim($p['phone']??''),
            'email'=>trim($p['site_email']??''),
            'logo_url'=>trim($p['logo_url']??''),
            'youtube_url'=>trim($p['youtube_url']??''),
            'ketua_stifar'=>trim($p['ketua_stifar']??''),
            'ketua_nama'=>trim($p['ketua_nama']??''),
            'ketua_jabatan'=>trim($p['ketua_jabatan']??''),
            'ketua_sambutan'=>trim($p['ketua_sambutan']??''),
            'intro_text'=>trim($p['intro_text']??'')
        ];
        $this->db->update('site_settings',$data,['id'=>1]);
        if(array_key_exists('intro_text',$p)){$this->db->update('site_content',['content'=>trim($p['intro_text']??'')],['content_key'=>'intro_text']);}
    }
    public function save_video($p){
        $id=(int)($p['video_id']??0);
        $data=['title'=>trim($p['video_title']??'Video Kampus'),'youtube_url'=>trim($p['youtube_url']??'')];
        if($id)$this->db->update('videos',$data,['id'=>$id]);else $this->db->insert('videos',$data);
    }
    public function save_campus($p){
        $id=(int)($p['id']??0);
        $data=['title'=>trim($p['title']??''),'subtitle'=>trim($p['subtitle']??''),'description'=>trim($p['description']??''),'image_url'=>trim($p['image_url']??''),'button_text'=>trim($p['button_text']??'Jelajahi Kampus'),'button_url'=>trim($p['button_url']??'#tentang'),'sort_order'=>(int)($p['sort_order']??0),'active'=>isset($p['active'])?1:0];
        if($id)$this->db->update('campuses',$data,['id'=>$id]);else $this->db->insert('campuses',$data);
    }
    public function save_alumni($p){
        $id=(int)($p['id']??0);
        $data=['name'=>trim($p['name']??''),'study_program'=>trim($p['study_program']??''),'position'=>trim($p['position']??''),'story'=>trim($p['story']??''),'image_url'=>trim($p['image_url']??''),'sort_order'=>(int)($p['sort_order']??0),'active'=>isset($p['active'])?1:0];
        if($id)$this->db->update('alumni',$data,['id'=>$id]);else $this->db->insert('alumni',$data);
    }
    public function save_news($p){
        $id=(int)($p['id']??0);
        $data=['title'=>trim($p['title']??''),'category'=>trim($p['category']??''),'excerpt'=>trim($p['excerpt']??''),'content'=>trim($p['content']??''),'image_url'=>trim($p['image_url']??''),'published'=>isset($p['published'])?1:0,'published_at'=>!empty($p['published_at'])?date('Y-m-d H:i:s',strtotime($p['published_at'])):date('Y-m-d H:i:s')];
        if($id)$this->db->update('news',$data,['id'=>$id]);else $this->db->insert('news',$data);
    }
    public function save_portal($p){
        $id=(int)($p['id']??0);
        $data=['title'=>trim($p['title']??''),'image_url'=>trim($p['image_url']??''),'url'=>trim($p['url']??''),'is_active'=>isset($p['is_active'])?1:0];
        if($id)$this->db->update('portal_sistem',$data,['id'=>$id]);else $this->db->insert('portal_sistem',$data);
    }
    public function save_kerjasama($p){
        $id=(int)($p['id']??0);
        $data=['title'=>trim($p['title']??''),'image_url'=>trim($p['image_url']??''),'url'=>trim($p['url']??''),'is_active'=>isset($p['is_active'])?1:0];
        if($id)$this->db->update('kerjasama',$data,['id'=>$id]);else $this->db->insert('kerjasama',$data);
    }
    public function save_navigation($p){
        $id=(int)($p['id']??0);
        $data=['label'=>trim($p['label']??''),'url'=>trim($p['url']??'#'),'active'=>isset($p['active'])?1:0,'sort_order'=>(int)($p['sort_order']??0)];
        if($id)$this->db->update('site_navigation',$data,['id'=>$id]);
    }
    public function save_content($p){
        $id=(int)($p['id']??0);
        $data=['title'=>trim($p['title']??''),'content'=>trim($p['content']??'')];
        if($id)$this->db->update('site_content',$data,['id'=>$id]);else{$key='custom_'.time().'_'.mt_rand(100,999);$this->db->insert('site_content',['content_key'=>$key,'title'=>$data['title'],'content'=>$data['content']]);}
    }
    public function pages(){return $this->db->order_by('nav_key','ASC')->get('site_pages')->result_array();}
    public function save_page($p){
        $id=(int)($p['id']??0);
        $data=['title'=>trim($p['title']??''),'content'=>trim($p['content']??''),'image_url'=>trim($p['image_url']??''),'source_url'=>trim($p['source_url']??''),'active'=>isset($p['active'])?1:0];
        if($id)$this->db->update('site_pages',$data,['id'=>$id]);
    }
    public function add_navigation($p){
        $label=trim($p['new_label']??''); if($label==='') return;
        $key='nav_custom_'.time().'_'.mt_rand(100,999);
        $data=['nav_key'=>$key,'label'=>$label,'url'=>trim($p['new_url']??'#'),'active'=>1,'sort_order'=>(int)($p['new_sort_order']??999)];
        $this->db->insert('site_navigation',$data);
        $this->db->insert('site_pages',['nav_key'=>$key,'title'=>$label,'content'=>'Konten halaman '. $label .' dapat diubah melalui Portal Admin.','source_url'=>trim($p['new_url']??''),'active'=>1]);
    }

    public function delete($table,$id){
        if(in_array($table,['campuses','alumni','news','portal_sistem','kerjasama'],true))$this->db->delete($table,['id'=>(int)$id]);
    }
}
