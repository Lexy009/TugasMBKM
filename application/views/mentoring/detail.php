<div class="container">
    <div class="row mt-3">
        <div class="col-md-7">

                <div class="card">
        <div class="card-header">
            Detail Data Monitoring
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $monitoring['id_mentoring']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $monitoring['Nama_project']; ?></h6>
            <p class="card-text"><?= $monitoring['Client']; ?></p>
            <p class="card-text"><?= $monitoring['Project_Leader']; ?></p>
            <p class="card-text"><?= $monitoring['Tanggal_dimulai']; ?></p>
            <p class="card-text"><?= $monitoring['Tanggal_selesai']; ?></p>
            <p class="card-text"><?= $monitoring['Proses']; ?></p>
            <a href="<?= base_url(); ?>DataMentoring" class="btn btn-primary">Kembali</a>
            <a href="<?= base_url("DataMentoring/ubah/" . $monitoring['id_mentoring']); ?>" class="btn btn-primary">Update</a>
        </div>
        </div>

        </div>
    </div>
</div>