<?php 

class Calonpensiun_model {
    private $db;
    

    public function __construct(){
        $this->db = new Database;
        
    }

    // read data
    public function getAllcp(){
        $this->db->query('SELECT * FROM tbl_data_cp');
        return $this->db->resultSet();
    }

    // get id
    public function getcpById($nip){
        $this->db->query("SELECT * FROM tbl_data_cp WHERE nip=:nip");

        $this->db->bind('nip', $nip);
        return $this->db->single();
    }

//    hapus
    public function hapusDatacp($nip){
        $query = ("DELETE FROM tbl_data_cp WHERE nip=:nip");
        $this->db->query($query);
        $this->db->bind('nip', $nip);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Tambah input_dpcp
    public function input_dpcp($data){
        $query = "INSERT INTO tbl_data_cp VALUES (:nip, :nama, :lahir_tempat, :lahir_tgl, :gender, :status_kawin, :pendidikan_jenjang,:pendidikan_jurusan, :pendidikan_tahunlulus, :no_karpeg, :jabatan, :pangkat_gol_ruang, :tmt, :unit_organisasi,:masa_kerja_golongan_dlm_bulan, :masa_kerja_golongan_tgl, :masa_kerja_pensiun_dlm_bulan, :masa_kerja_pensiun_tgl,:masa_kerja_sebelum_pns_start, :masa_kerja_sebelum_pns_end, :gaji_pokok_terakhir, :tanggal_masuk_pns)";

        $this->db->query($query);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('lahir_tempat', $data['lahir_tempat']);
        $this->db->bind('lahir_tgl', $data['lahir_tgl']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('status_kawin', $data['status_kawin']);
        $this->db->bind('pendidikan_jenjang', $data['pendidikan_jenjang']);
        $this->db->bind('pendidikan_jurusan', $data['pendidikan_jurusan']);
        $this->db->bind('pendidikan_tahunlulus', $data['pendidikan_tahunlulus']);
        $this->db->bind('no_karpeg', $data['no_karpeg']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('pangkat_gol_ruang', $data['pangkat_gol_ruang']);
        $this->db->bind('tmt', $data['tmt']);
        $this->db->bind('unit_organisasi', $data['unit_organisasi']);
        $this->db->bind('masa_kerja_golongan_dlm_bulan', $data['masa_kerja_golongan_dlm_bulan']);
        $this->db->bind('masa_kerja_golongan_tgl', $data['masa_kerja_golongan_tgl']);
        $this->db->bind('masa_kerja_pensiun_dlm_bulan', $data['masa_kerja_pensiun_dlm_bulan']);
        $this->db->bind('masa_kerja_pensiun_tgl', $data['masa_kerja_pensiun_tgl']);
        $this->db->bind('masa_kerja_sebelum_pns_start', $data['masa_kerja_sebelum_pns_start']);
        $this->db->bind('masa_kerja_sebelum_pns_end', $data['masa_kerja_sebelum_pns_end']);
        $this->db->bind('gaji_pokok_terakhir', $data['gaji_pokok_terakhir']);
        $this->db->bind('tanggal_masuk_pns', $data['tanggal_masuk_pns']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}