<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Requirements_model');
        $this->_require_login();
    }

    public function index()
    {
        $data['submissions'] = $this->Requirements_model->get_all();
        $data['page_title'] = 'All Submissions';
        $this->load->view('admin/dashboard', $data);
    }

    public function view($id = null)
    {
        $submission = $this->Requirements_model->get_by_id($id);

        if (!$submission) {
            show_404();
        }

        $data['submission'] = $submission;
        $data['page_title'] = $submission->company_name ?: 'Submission #' . $submission->id;
        $this->load->view('admin/view_submission', $data);
    }

    public function pdf($id = null)
    {
        $submission = $this->Requirements_model->get_by_id($id);

        if (!$submission) {
            show_404();
        }

        $data['submission'] = $submission;
        $data['auto_print'] = $this->input->get('print') === '1';
        $this->load->view('admin/submission_pdf', $data);
    }

    private function _require_login()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('login');
        }
    }
}
