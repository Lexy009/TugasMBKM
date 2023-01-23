<div class="container">


    <div class="row mt-3">
        <div class="col-md7">
            <a href="<?= base_url(); ?>Datamentoring/tambah" class="btn btn-primary">Tambah Data Monitoring</a>
        </div>
        </div>

    <div class="row mt-3">
            <div class="col-md7">
            <h3>Data Monitoring</h3>
            <ul class="list-group">
    <?php foreach ($monitoring as $mtr) : ?>
    <li class="list-group-item">
        <?= $mtr['id_mentoring']; ?>
        <a href="<?= base_url();  ?>Datamentoring/hapus/<?= $mtr['id_mentoring']; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
        <a href="<?= base_url();  ?>Datamentoring/detail/<?= $mtr['id_mentoring']; ?>" class="badge badge-primary float-right">Detail</a>
    
    </li>
    <?php endforeach; ?>
</ul>
</div>
</div>

</div>