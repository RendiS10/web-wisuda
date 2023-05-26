<!-- Begin Page Content -->
<div class="container-fluid">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $wisuda['id_pengajuan'] ?>">
        <div class="form-group">
            <label>Nama / Gelar</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="nama" value="<?= $wisuda['nama'] ?>">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="form-group">
            <label>Nim</label>
            <input type="number" class="form-control" aria-describedby="emailHelp" name="nim" value="<?= $wisuda['NIM'] ?>">
            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
        </div>
        <div class="form-group">
            <label>Program Studi</label>
            <select class="form-control" name="program_studi">
                <option value="<?= $wisuda['program_studi'] ?>"><?= $wisuda['program_studi'] ?></option>
                <option>Teknik Informatika S1</option>
                <option>Teknik Informatika D3</option>
                <option>Manajemen Informatika D3</option>
                <option>Komputerisasi Akutansi D3</option>
            </select>
            <small class="form-text text-danger"><?= form_error('program_studi'); ?></small>
        </div>
        <div class="form-group">
            <label>Minat</label>
            <select class="form-control" name="minat">
                <option value="<?= $wisuda['minat'] ?>"><?= $wisuda['minat'] ?></option>
                <option>S1</option>
                <option>D3</option>
            </select>
            <small class="form-text text-danger"><?= form_error('minat'); ?></small>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="tempat_lahir" value="<?= $wisuda['tempat_lahir'] ?>">
            <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" aria-describedby="emailHelp" name="tanggal_lahir" value="<?= $wisuda['tanggal_lahir'] ?>">
            <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="alamat" value="<?= $wisuda['alamat'] ?>">
            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
        </div>
        <div class="form-group">
            <label>Tanggal lulus</label>
            <input type="date" class="form-control" aria-describedby="emailHelp" name="tanggal_lulus" value="<?= $wisuda['Tanggal_Lulus'] ?>">
            <small class="form-text text-danger"><?= form_error('tanggal_lulus'); ?></small>
        </div>
        <div class="form-group">
            <label>IPK</label>
            <input name="ipk" type="number" class="form-control" value="<?= $wisuda['IPK'] ?>">
            <small class="form-text text-danger"><?= form_error('ipk'); ?></small>
        </div>
        <div class="form-group">
            <label>Predikat Kelulusan</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="predikat_kelulusan" value="<?= $wisuda['predikat_kelulusan'] ?>">
            <small class="form-text text-danger"><?= form_error('predikat_kelulusan'); ?></small>
        </div>
        <div class="form-group">
            <label>Judul Tesis</label>
            <input name="judul_tesis" type="text" class="form-control" value="<?= $wisuda['Judul_Tesis'] ?>">
            <small class="form-text text-danger"><?= form_error('judul_tesis'); ?></small>
        </div>
        <div class="form-group">
            <label>Alamat Email</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="email" value="<?= $wisuda['email'] ?>">
            <small class="form-text text-danger"><?= form_error('email'); ?></small>
        </div>
        <div class="form-group">
            <label>Nilai Tugas Akhir</label>
            <input name="nilai_ta" type="number" class="form-control" value="<?= $wisuda['Nilai_ta'] ?>">
            <small class="form-text text-danger"><?= form_error('nilai_ta'); ?></small>
        </div>
        <div class="form-group">
            <label>Dosen Pembimbing</label>
            <select class="form-control" name="dosen_pembimbing">
                <option value="<?= $wisuda['Dosen_Pembimbing'] ?>"><?= $wisuda['Dosen_Pembimbing'] ?></option>
                <option>Marjito</option>
                <option>Asep Ririh</option>
                <option>Miranti</option>
                <option>Titi Widaretna</option>
                <option>Siti Khodijah</option>
            </select>
            <small class="form-text text-danger"><?= form_error('dosen_pembimbing'); ?></small>
        </div>
        <div class="form-group">
            <label>Lama Studi</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="lama_studi" value="<?= $wisuda['lama_studi'] ?>">
            <small class="form-text text-danger"><?= form_error('lama_studi'); ?></small>
        </div>
        <div class="form-group">
            <label>Bulan Wisuda</label>
            <input type="text" name="bulan_wisuda" class="form-control" value="<?= $wisuda['Bulan_Wisuda'] ?>">
            <small class="form-text text-danger"><?= form_error('bulan_wisuda'); ?></small>
        </div>
        <div class="form-group">
            <label>Tahun Wisuda</label>
            <input name="tahun_wisuda" type="number" class="form-control" value="<?= $wisuda['Tahun_Wisuda'] ?>">
            <small class="form-text text-danger"><?= form_error('tahun_wisuda'); ?></small>
        </div>
        <div class="form-group">
            <label>Tanggal Pengajuan</label>
            <input name="tgl_pengajuan" type="date" class="form-control" value="<?= $wisuda['Tgl_Pengajuan'] ?>">
            <small class="form-text text-danger"><?= form_error('tanggal_lulus'); ?></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br><br>
    <a href="<?php echo base_url('') ?>mahasiswa/status">
        <i class="fas fa-long-arrow-alt-left"> Back</i>
    </a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->