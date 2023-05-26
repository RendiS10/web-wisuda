<!-- Begin Page Content -->
<div class="container-fluid">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $wisuda['id_pengajuan'] ?>">
        <select class="form-control" name="status_pengajuan">
            <option>Belum Disetujui</option>
            <option>Disetujui</option>
            <option>Tidak Disetujui</option>
        </select>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br> <a href="<?php echo base_url('') ?>kaprodi/statusAcc">
        <i class="fas fa-long-arrow-alt-left"> Back</i>
    </a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->