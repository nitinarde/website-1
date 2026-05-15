<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function validate_login($username, $password)
    {
        $user = $this->db
            ->where('username', $username)
            ->get('admin_users')
            ->row();

        if (!$user || !password_verify($password, $user->password_hash)) {
            return false;
        }

        return $user;
    }
}
