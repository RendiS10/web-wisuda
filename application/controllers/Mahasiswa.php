<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/mahasiswa/header', $data);
        $this->load->view('user/mahasiswa/sidebar', $data);
        $this->load->view('user/mahasiswa/topbar', $data);
        $this->load->view('user/mahasiswa/profile', $data);
        $this->load->view('user/mahasiswa/footer', $data);
    }
    public function edit($id)
    {
        $this->load->model('M_user');
        $where = array('id' => $id);
        $data['user'] = $this->M_user->edit_data($where, 'user')->result();
        $data['title'] = 'Form Edit Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/mahasiswa/header', $data);
        $this->load->view('user/mahasiswa/sidebar', $data);
        $this->load->view('user/mahasiswa/topbar', $data);
        $this->load->view('user/mahasiswa/profileedit', $data);
        $this->load->view('user/mahasiswa/footer', $data);
    }
    public function update()
    {
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('place_of_birth', 'Place', 'required|trim');
        $this->form_validation->set_rules('date_of_birth', 'Date', 'required|trim');
        $this->form_validation->set_rules('addres', 'Addres', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telphone', 'required|trim');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('user/mahasiswa/header', $data);
            $this->load->view('user/mahasiswa/sidebar', $data);
            $this->load->view('user/mahasiswa/topbar', $data);
            $this->load->view('user/mahasiswa/profileedit', $data);
            $this->load->view('user/mahasiswa/footer', $data);
        } else {
            $id = $this->input->post('id', true);
            $nim = $this->input->post('nim', true);
            $name = $this->input->post('name', true);
            $place_of_birth = $this->input->post('place_of_birth', true);
            $date_of_birth = $this->input->post('date_of_birth', true);
            $addres = $this->input->post('addres', true);
            $telp = $this->input->post('telp', true);
            $prodi = $this->input->post('prodi', true);

            $data = array(
                'name' => $name,
                'nim' => $nim,
                'place_of_birth' => $place_of_birth,
                'date_of_birth' => $date_of_birth,
                'addres' => $addres,
                'telp' => $telp,
                'prodi' => $prodi,
            );
            $where = array(
                'id' => $id
            );
            $this->M_user->update_data($where, $data, 'user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Profil Kamu Sudah Diupdate ! </div>');
            redirect('mahasiswa');
        }
    }
    public function ubah($id)
    {
        $data['user']       = $this->M_user->tampil_data()->result();
        $data['title']      = 'Form Ubah Wisuda';
        $data['wisuda']     = $this->M_user->getAllPengajuanById($id);
        $data['user']       = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('tanggal_lulus', 'tanggal_lulus', 'required');
        $this->form_validation->set_rules('ipk', 'ipk', 'required');
        $this->form_validation->set_rules('judul_tesis', 'judul_tesis', 'required');
        $this->form_validation->set_rules('nilai_ta', 'nilai_ta', 'required');
        $this->form_validation->set_rules('dosen_pembimbing', 'dosen_pembimbing', 'required');
        $this->form_validation->set_rules('bulan_wisuda', 'bulan_wisuda', 'required');
        $this->form_validation->set_rules('tahun_wisuda', 'tahun_wisuda', 'required');
        $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/mahasiswa/header', $data);
            $this->load->view('user/mahasiswa/sidebar', $data);
            $this->load->view('user/mahasiswa/topbar', $data);
            $this->load->view('user/mahasiswa/ubah', $data);
            $this->load->view('user/mahasiswa/footer', $data);
        } else {
            $this->M_user->ubah_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pengajuan Kamu Telah Diubah !</div>');
            redirect('mahasiswa/status');
        }
    }

    public function daftarwisuda()
    {
        $data['user']  = $this->M_user->tampil_data()->result();
        $data['title'] = 'Form Pendaftaran Wisuda';
        $data['user']  = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('nim', 'nim', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        $this->form_validation->set_rules('minat', 'Minat', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal_lulus', 'tanggal_lulus', 'required');
        $this->form_validation->set_rules('ipk', 'ipk', 'required');
        $this->form_validation->set_rules('predikat_kelulusan', 'Predikat', 'required');
        $this->form_validation->set_rules('judul_tesis', 'judul_tesis', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nilai_ta', 'nilai_ta', 'required');
        $this->form_validation->set_rules('dosen_pembimbing', 'dosen_pembimbing', 'required');
        $this->form_validation->set_rules('lama_studi', 'Lama Studi', 'required');
        $this->form_validation->set_rules('bulan_wisuda', 'bulan_wisuda', 'required');
        $this->form_validation->set_rules('tahun_wisuda', 'tahun_wisuda', 'required');
        $this->form_validation->set_rules('tgl_pengajuan', 'tgl_pengajuan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/mahasiswa/header', $data);
            $this->load->view('user/mahasiswa/sidebar', $data);
            $this->load->view('user/mahasiswa/topbar', $data);
            $this->load->view('user/mahasiswa/daftarwisuda', $data);
            $this->load->view('user/mahasiswa/footer', $data);
        } else {
            $this->M_user->tambah_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Pengajuan Kamu Telah Ditambahkan !</div>');
            redirect('mahasiswa/status');
        }
    }

    public function status()
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data();
        $data['title'] = 'Status Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/mahasiswa/header', $data);
        $this->load->view('user/mahasiswa/sidebar', $data);
        $this->load->view('user/mahasiswa/topbar', $data);
        $this->load->view('user/mahasiswa/status', $data);
        $this->load->view('user/mahasiswa/footer', $data);
    }
    public function detail($id)
    {
        $this->load->model('M_user');
        $data['wisuda'] = $this->M_user->get_data2($id);
        $data['title'] = 'Status Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/mahasiswa/header', $data);
        $this->load->view('user/mahasiswa/sidebar', $data);
        $this->load->view('user/mahasiswa/topbar', $data);
        $this->load->view('user/mahasiswa/detail', $data);
        $this->load->view('user/mahasiswa/footer', $data);
    }
    public function hapus($id)
    {
        $this->M_user->hapusDataPengajuan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Pengajuan Kamu Telah Dihapus !</div>');
        redirect('mahasiswa/status');
    }
}
