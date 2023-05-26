<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

    public function edit_data($where, $Table)
    {
        return $this->db->get_where($Table, $where);
    }
    public function update_data($where, $data, $Table)
    {
        $this->db->where($where);
        $this->db->update($Table, $data);
    }
    public function tampil_data()
    {
        return $this->db->get('wisuda');
    }
    public function tambah_data()
    {
        $data = [

            'nama'          => $this->input->post('nama'),
            'NIM'           => $this->input->post('nim'),
            'program_studi' => $this->input->post('program_studi'),
            'minat'         => $this->input->post('minat'),
            'tempat_lahir'  => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat'        => $this->input->post('alamat'),
            'Tanggal_Lulus' => $this->input->post('tanggal_lulus'),
            'IPK'           => $this->input->post('ipk'),
            'predikat_kelulusan'   => $this->input->post('predikat_kelulusan'),
            'Judul_Tesis'   => $this->input->post('judul_tesis'),
            'email'         => $this->input->post('email'),
            'Nilai_ta'      => $this->input->post('nilai_ta'),
            'Dosen_Pembimbing' => $this->input->post('dosen_pembimbing'),
            'lama_studi'    => $this->input->post('lama_studi'),
            'Bulan_Wisuda'  => $this->input->post('bulan_wisuda'),
            'Tahun_Wisuda'  => $this->input->post('tahun_wisuda'),
            'Tgl_Pengajuan' => $this->input->post('tgl_pengajuan'),
            'Status_Pengajuan' => 'Belum Diperiksa'
        ];
        $this->db->insert('wisuda', $data);
    }
    public function get_data()
    {
        return $this->db->get('wisuda')->result_array();
    }
    public function get_data2($id)
    {
        return $this->db->get_where('wisuda', ['id_pengajuan' => $id])->row_array();
    }

    public function getAllPengajuanById($id)
    {
        return $this->db->get_where('wisuda', ['id_pengajuan' => $id])->row_array();
    }

    public function ubah_data()
    {
        $data = [
            'nama'          => $this->input->post('nama'),
            'NIM'           => $this->input->post('nim'),
            'program_studi' => $this->input->post('program_studi'),
            'minat'         => $this->input->post('minat'),
            'tempat_lahir'  => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat'        => $this->input->post('alamat'),
            'Tanggal_Lulus' => $this->input->post('tanggal_lulus'),
            'IPK'           => $this->input->post('ipk'),
            'predikat_kelulusan'   => $this->input->post('predikat_kelulusan'),
            'Judul_Tesis'   => $this->input->post('judul_tesis'),
            'email'         => $this->input->post('email'),
            'Nilai_ta'      => $this->input->post('nilai_ta'),
            'Dosen_Pembimbing' => $this->input->post('dosen_pembimbing'),
            'lama_studi'    => $this->input->post('lama_studi'),
            'Bulan_Wisuda'  => $this->input->post('bulan_wisuda'),
            'Tahun_Wisuda'  => $this->input->post('tahun_wisuda'),
            'Tgl_Pengajuan' => $this->input->post('tgl_pengajuan'),
            'Status_Pengajuan' => 'Belum Diperiksa'
        ];

        $this->db->where('id_pengajuan', $this->input->post('id'));
        $this->db->update('wisuda', $data);
    }

    public function hapusDataPengajuan($id)
    {
        $this->db->where('id_pengajuan', $id);
        $this->db->delete('wisuda');
    }

    public function ubah_data_kaprodi()
    {
        $data = [
            'Status_Pengajuan' => $this->input->post('status_pengajuan')
        ];

        $this->db->where('id_pengajuan', $this->input->post('id'));
        $this->db->update('wisuda', $data);
    }
}
