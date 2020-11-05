<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
        public function index()
        {
                $data['tittle'] = 'dashboard';
                $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('user/index', $data);
                $this->load->view('templates/footer');
        }
        public function belum_selesai()
        {
                $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('user/belum_selesai', $data);
                $this->load->view('templates/footer');
        }
}
