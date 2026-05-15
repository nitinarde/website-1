<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth_model');
    }

    public function login()
    {
        if ($this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data = array('error' => '');

        if ($this->input->method() === 'post') {
            $username = trim((string) $this->input->post('username'));
            $password = (string) $this->input->post('password');

            $user = $this->Auth_model->validate_login($username, $password);

            if ($user) {
                $this->session->set_userdata(array(
                    'admin_logged_in' => true,
                    'admin_id'        => $user->id,
                    'admin_username'  => $user->username,
                ));
                redirect('admin');
            }

            $data['error'] = 'Invalid username or password.';
        }

        $this->load->view('auth/login', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata(array('admin_logged_in', 'admin_id', 'admin_username'));
        $this->session->sess_destroy();
        redirect('login');
    }
}
