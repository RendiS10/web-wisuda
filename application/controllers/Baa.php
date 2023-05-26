<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Baa extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data();
        $data['title'] = 'Status baa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/baa/header', $data);
        $this->load->view('user/baa/sidebar', $data);
        $this->load->view('user/baa/topbar', $data);
        $this->load->view('user/baa/status', $data);
        $this->load->view('user/baa/footer', $data);
    }

    public function statusAcc()
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data();
        $data['title'] = 'Status baa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/baa/header', $data);
        $this->load->view('user/baa/sidebar', $data);
        $this->load->view('user/baa/topbar', $data);
        $this->load->view('user/baa/status', $data);
        $this->load->view('user/baa/footer', $data);
    }

    public function detail($id)
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data2($id);
        $data['title'] = 'Status baa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/baa/header', $data);
        $this->load->view('user/baa/sidebar', $data);
        $this->load->view('user/baa/topbar', $data);
        $this->load->view('user/baa/detail', $data);
        $this->load->view('user/baa/footer', $data);
    }
}
