<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading --> <?php echo $this->session->flashdata('message') ?>
    <table class="table" style="max-width: 900px;" border="5">
        <thead class="thead-light">
            <tr align="center">
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Status Pengajuan</th>
                <th scope="col">Detail Pengajuan</th>
            </tr>
        </thead>
        <?php $no = 1;
        foreach ($wisuda as $wsd) : ?>
            <tbody>
                <tr align="center">
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $wsd['NIM']; ?></td>
                    <td><?php if ($wsd['Status_Pengajuan'] == "Disetujui") {
                            echo '<p class="btn btn-outline-success">Disetujui</p>';
                        } elseif ($wsd['Status_Pengajuan'] == "Tidak Disetujui") {
                            echo '<p class="btn btn-outline-danger">Tidak Disetujui</p>';
                        } elseif ($wsd['Status_Pengajuan'] == "Belum Diperiksa")
                            echo '<p class="btn btn-outline-warning">Belum Diperiksa</p>'; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url('') ?>baa/detail/<?= $wsd['id_pengajuan'] ?>" class="btn btn-success"><i class="fas fa-eye"> Detail</i> </a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
</div>
<!-- /.container-fluid -->