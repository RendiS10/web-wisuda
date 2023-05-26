<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kaprodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Kaprodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/kaprodi/header', $data);
        $this->load->view('user/kaprodi/sidebar', $data);
        $this->load->view('user/kaprodi/topbar', $data);
        $this->load->view('user/kaprodi/profile', $data);
        $this->load->view('user/kaprodi/footer', $data);
    }
    public function edit($id)
    {
        $this->load->model('M_user');
        $where = array('id' => $id);
        $data['user'] = $this->M_user->edit_data($where, 'user')->result();
        $data['title'] = 'Form Edit Kaprodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/kaprodi/header', $data);
        $this->load->view('user/kaprodi/sidebar', $data);
        $this->load->view('user/kaprodi/topbar', $data);
        $this->load->view('user/kaprodi/profileedit', $data);
        $this->load->view('user/kaprodi/footer', $data);
    }
    public function update()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('kode_prodi', 'Kode Prodi', 'required|trim');
        $this->form_validation->set_rules('kode_dosen', 'Kode Dosem', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('user/kaprodi/header', $data);
            $this->load->view('user/kaprodi/sidebar', $data);
            $this->load->view('user/kaprodi/topbar', $data);
            $this->load->view('user/kaprodi/profileedit', $data);
            $this->load->view('user/kaprodi/footer', $data);
        } else {
            $id = $this->input->post('id', true);
            $name = $this->input->post('name', true);
            $kode_prodi = $this->input->post('kode_prodi', true);
            $kode_dosen = $this->input->post('kode_dosen', true);

            $data = array(
                'name' => $name,
                'kode_prodi' => $kode_prodi,
                'kode_dosen' => $kode_dosen,
            );
            $where = array(
                'id' => $id
            );
            $this->M_user->update_data($where, $data, 'user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Profil Kamu Sudah Diupdate ! </div>');
            redirect('kaprodi');
        }
    }

    public function statusAcc()
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data();
        $data['title'] = 'Status Kaprodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/kaprodi/header', $data);
        $this->load->view('user/kaprodi/sidebar', $data);
        $this->load->view('user/kaprodi/topbar', $data);
        $this->load->view('user/kaprodi/status', $data);
        $this->load->view('user/kaprodi/footer', $data);
    }
    public function detail($id)
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data2($id);
        $data['title'] = 'Status kaprodi';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/kaprodi/header', $data);
        $this->load->view('user/kaprodi/sidebar', $data);
        $this->load->view('user/kaprodi/topbar', $data);
        $this->load->view('user/kaprodi/detail', $data);
        $this->load->view('user/kaprodi/footer', $data);
    }

    public function ubah($id)
    {
        $data['user']       = $this->M_user->tampil_data()->result();
        $data['title']      = 'Form Ubah';
        $data['wisuda']     = $this->M_user->getAllPengajuanById($id);
        $data['user']       = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('status_pengajuan', 'Status_pengajuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/kaprodi/header', $data);
            $this->load->view('user/kaprodi/sidebar', $data);
            $this->load->view('user/kaprodi/topbar', $data);
            $this->load->view('user/kaprodi/ubah', $data);
            $this->load->view('user/kaprodi/footer', $data);
        } else {
            $this->M_user->ubah_data_kaprodi();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Status Telah Diperiksa ! </div>');
            redirect('kaprodi/statusAcc');
        }
    }

    public function hapus($id)
    {
        $this->M_user->hapusDataPengajuan($id);
        redirect('kaprodi/statusAcc');
    }
}
