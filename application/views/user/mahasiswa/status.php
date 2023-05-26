<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php echo $this->session->flashdata('message') ?>
    <table class="table" style="max-width: 900px;" border="5">
        <thead class="thead-light" align="center">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Detail Pengajuan</th>
                <th colspan="2" scope="col">Option</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($wisuda as $wsd) : ?>
            <tbody>
                <tr align="center">
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $wsd['NIM']; ?></td>
                    <td><?php echo $wsd['nama']; ?></td>
                    <td>
                        <a href="<?php echo base_url('') ?>mahasiswa/detail/<?= $wsd['id_pengajuan'] ?>" class="btn btn-success"><i class="fas fa-eye"> Detail</i> </a>
                    </td>
                    <td><a href="<?php echo base_url('') ?>mahasiswa/ubah/<?= $wsd['id_pengajuan'] ?>" class="btn btn-warning"><i class="fas fa-user-edit"> Edit</i></a>
                    </td>
                    <td><a href="<?php echo base_url('') ?>mahasiswa/hapus/<?= $wsd['id_pengajuan'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"> Hapus</i> </a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->