<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_055_model extends CI_Model {
    public function page() { return $this->db->get_where('site_pages', ['nav_key'=>'nav_055','active'=>1])->row_array(); }
}
