<div class="container">

<div class="row mt-3">
<div class="col-md-7">

            <div class="card">
            <div class="card-header">
                Tambah Data
            </div>
            <div class="card-body">
                <?= validation_errors(); ?>
                <form action="" method="post">
            <form action="" method="post">
            <div class="form-group">
            <label for="id_mentoring">ID MONITORING</label>
            <input type="number" name ="id_mentoring" class="form-control" id="id_mentoring" placeholder="">
            </div>
            <div class="form-group">
            <label for="nama_project">Nama Project</label>
            <input type="text" name ="Nama_project" class="form-control" id="nama_project" placeholder="">
            </div>
            <div class="form-group">
            <label for="Client">Client</label>
            <input type="text" name ="Client" class="form-control" id="Client" placeholder="">
            </div>
            <div class="form-group">
            <label for="Project_Leader">Project Leader</label>
            <input type="text" name ="Project_Leader" class="form-control" id="Project_Leader" placeholder="">
            </div>
            <div class="form-group">
            <label for="Tanggal_dimulai">Tanggal Mulai</label>
            <input class="form-control" name ="Tanggal_dimulai" id="date" name="Tanggal_dimulai" placeholder="MM/DD/YYYY" type="date" value="10-10-2023"/>
            </div>
            <div class="form-group">
            <label for="Tanggal_selesai">Tanggal Selesai</label>
            <input class="form-control" name ="Tanggal_selesai" id="date" name="Tanggal_selesai" placeholder="MM/DD/YYYY" type="date" value="10-10-2023"/>
            </div>
            <div class="form-group">
            <label for="Proses">Progres</label>
            <input type="text" name ="Proses" class="form-control" id="Proses" placeholder="">
            </div>
            </div>
         </div>
         <button type="submit" name="tambah" class="btn btn-primary float-right">Tambahkan data</button>
</form>
</div>
</div>
</div>