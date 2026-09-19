<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_009_model extends CI_Model {
    public function settings()
    {
        return $this->db->get_where('site_settings', ['id' => 1])->row_array() ?: [];
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
    public function page() { return $this->db->get_where('site_pages', ['nav_key'=>'nav_009','active'=>1])->row_array(); }
}
