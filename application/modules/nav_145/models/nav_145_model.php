<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nav_145_model extends CI_Model
{
    public function page()
    {
        return $this->db
            ->where('id', 145)
            ->get('site_navigation')
            ->row();
    }
}
