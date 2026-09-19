<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model
{
    public function settings()
    {
        return $this->db->get_where('site_settings', ['id' => 1])->row_array() ?: [];
    }
    public function campuses()
    {
        return $this->db->where('active', 1)->order_by('sort_order', 'ASC')->get('campuses')->result_array();
    }
    public function alumni()
    {
        return $this->db->where('active', 1)->order_by('sort_order', 'ASC')->order_by('id', 'DESC')->get('alumni')->result_array();
    }
    public function news()
    {
        return $this->db->where('published', 1)->order_by('published_at', 'DESC')->limit(12)->get('news')->result_array();
    }
    public function video()
    {
        return $this->db->order_by('id', 'DESC')->get('videos')->row_array();
    }
    public function portal_sistem()
    {
        return $this->db->where('is_active', 1)->order_by('id', 'ASC')->get('portal_sistem')->result_array();
    }
    public function kerjasama()
    {
        return $this->db->where('is_active', 1)->order_by('id', 'ASC')->get('kerjasama')->result_array();
    }
    public function navigation()
    {
        $rows = $this->db->order_by('sort_order', 'ASC')->get('site_navigation')->result_array();
        $out = [];
        foreach ($rows as $row) {
            $out[$row['nav_key']] = ['label' => $row['label'], 'url' => $row['url'], 'active' => (int) $row['active']];
        }
        return $out;
    }
    public function contents()
    {
        $rows = $this->db->get('site_content')->result_array();
        $out = [];
        foreach ($rows as $row) {
            $out[$row['content_key']] = $row['content'];
        }
        return $out;
    }
}
