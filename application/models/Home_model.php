<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function saveData($data)
    {
        return $this->db->insert('website_requirements', $data);
    }
}