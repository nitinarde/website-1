<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requirements_model extends CI_Model {

    public function get_all()
    {
        return $this->db
            ->order_by('created_at', 'DESC')
            ->get('website_requirements')
            ->result();
    }

    public function get_by_id($id)
    {
        return $this->db
            ->where('id', (int) $id)
            ->get('website_requirements')
            ->row();
    }

    public function decode_json_field($value)
    {
        if (empty($value)) {
            return array();
        }
        $decoded = json_decode($value, true);
        return is_array($decoded) ? $decoded : array($value);
    }
}
