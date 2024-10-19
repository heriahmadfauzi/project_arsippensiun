<div class="container my-4">
        <h2 class="text-center"><?= $data['cp']['nama'] ?> (<?= $data['cp']['nip'] ?>)</h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <div class="step <?php if ($activeStep == 'data_dasar') echo 'active'; ?>">
                        <div class="step-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="step-text">Data Dasar</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'data_terkait_pensiun') echo 'active'; ?>">
                        <div class="step-icon">2</div>
                        <div class="step-text">Data Terkait Pensiun</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'daftar_keluarga') echo 'active'; ?>">
                        <div class="step-icon">3</div>
                        <div class="step-text">Daftar Keluarga</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'riwayat_pekerjaan') echo 'active'; ?>">
                        <div class="step-icon">4</div>
                        <div class="step-text">Riwayat Pekerjaan</div>
                    </div>
                    <div class="step <?php if ($activeStep == 'selesai') echo 'active'; ?>">
                        <div class="step-icon"></div>
                        <div class="step-text">Selesai</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group mt-5">
            <a href="tambah_data_dasar.php" class="list-group-item list-group-item-action <?php if ($activeStep == 'data_dasar') echo 'active'; ?>">
                Data Dasar
            </a>
            <a href="tambah_data_terkait_pensiun.php" class="list-group-item list-group-item-action <?php if ($activeStep == 'data_terkait_pensiun') echo 'active'; ?>">
                Data Terkait Pensiun
            </a>
            <a href="tambah_daftar_keluarga.php" class="list-group-item list-group-item-action <?php if ($activeStep == 'daftar_keluarga') echo 'active'; ?>">
                Daftar Keluarga
            </a>
            <a href="tambah_riwayat_pekerjaan.php" class="list-group-item list-group-item-action <?php if ($activeStep == 'riwayat_pekerjaan') echo 'active'; ?>">
                Riwayat Pekerjaan
            </a>
        </div>
    </div>