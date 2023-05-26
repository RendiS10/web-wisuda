<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <ul class="list-group">
            <li class="list-group-item active text-center">Status Pengajuan</li>
            <li class="list-group-item">Nama / Gelar : <?= $wisuda['nama'] ?></li>
            <li class="list-group-item">NIM : <?= $wisuda['NIM'] ?></li>
            <li class="list-group-item">Program Studi : <?= $wisuda['program_studi'] ?></li>
            <li class="list-group-item">Minat : <?= $wisuda['minat'] ?></li>
            <li class="list-group-item">Tempat Lahir : <?= $wisuda['tempat_lahir'] ?></li>
            <li class="list-group-item">Tanggal Lahir : <?= $wisuda['tanggal_lahir'] ?></li>
            <li class="list-group-item">Alamat : <?= $wisuda['alamat'] ?></li>
            <li class="list-group-item">Tanggal lulus : <?= $wisuda['Tanggal_Lulus'] ?></li>
            <li class="list-group-item">IPK : <?= $wisuda['IPK'] ?></li>
            <li class="list-group-item">Predikat : <?= $wisuda['predikat_kelulusan'] ?></li>
            <li class="list-group-item">Judul Tesis : <?= $wisuda['Judul_Tesis'] ?></li>
            <li class="list-group-item">Email : <?= $wisuda['email'] ?></li>
            <li class="list-group-item">Nilai Tugas Akhir : <?= $wisuda['Nilai_ta'] ?></li>
            <li class="list-group-item">Dosen Pembimbing : <?= $wisuda['Dosen_Pembimbing'] ?></li>
            <li class="list-group-item">Lama Studi : <?= $wisuda['lama_studi'] ?></li>
            <li class="list-group-item">Bulan Wisuda : <?= $wisuda['Bulan_Wisuda'] ?></li>
            <li class="list-group-item">Tahun Wisuda : <?= $wisuda['Tahun_Wisuda'] ?></li>
            <li class="list-group-item">Tanggal Pengajuan : <?= $wisuda['Tgl_Pengajuan'] ?></li>
            <li class="list-group-item"> Status Pengajuan : <br> <br>
                <?php if ($wisuda['Status_Pengajuan'] == "Disetujui") {
                    echo '<p class="btn btn-outline-success">Disetujui</p>';
                } elseif ($wisuda['Status_Pengajuan'] == "Tidak Disetujui") {
                    echo '<p class="btn btn-outline-danger">Tidak Disetujui</p>';
                } elseif ($wisuda['Status_Pengajuan'] == "Belum Diperiksa")
                    echo '<p class="btn btn-outline-warning">Belum Diperiksa</p>'; ?></li>
        </ul>
        <br>
        <a href="<?php echo base_url('') ?>mahasiswa/status">
            <i class="fas fa-long-arrow-alt-left"> Back</i>
        </a>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->