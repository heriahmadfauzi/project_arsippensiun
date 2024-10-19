  <!-- Main Content -->
  <div class="container my-5">
        <h1 class="mb-4">Dashboard</h1>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search data...">
                <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <a href="<?= BASEURL; ?>/tambah_data"><button class="btn btn-primary">Tambah Data Baru</button></a>
            </div>
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Unit Organisasi</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data Row -->
                    
                       <?php foreach( $data['cp'] as $cp): ?>
                        <tr>
                        <td><?= $cp['nama']; ?></td>
                        <td><?= $cp['nip']; ?></td>
                        <td><?= $cp['unit_organisasi']; ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/tambah_data/detail/<?= $cp['nip']; ?>"><button class="btn btn-info btn-sm">Lihat</button></a>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <a href="<?= BASEURL ?>/tambah_data/hapus/<?= $cp['nip']; ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('yakin?');">Hapus</button></a>
                        </td>
                    </tr>
                        <?php endforeach ?>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>
    </div>