<?php

/**
 *
 */
class Saw
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=spkbeasiswa', "root", "");
    // $this->db = new PDO('mysql:host=mysql.idhostinger.com;dbname=u241789732_putri', "u241789732_root", "39133494");
  }

  public function get_data_kriteria(){
    $stmt = $this->db->prepare("SELECT*FROM bobot ORDER BY id_kriteria");
    $stmt->execute();
		return $stmt;
  }

  public function get_data_siswa(){
    $stmt = $this->db->prepare("SELECT*FROM dt_siswa ORDER BY id_dtsiswa");
    $stmt->execute();
    return $stmt;
  }

  public function get_data_kriteria_id($id){
    $stmt = $this->db->prepare("SELECT*FROM bobot ORDER BY id_kriteria");
    $stmt->execute();
		return $stmt;
  }

  public function get_data_nilai_id($id){
    $stmt = $this->db->prepare("SELECT*FROM dt_siswa WHERE id_dtsiswa='$id' ORDER BY id_dtsiswa");
    $stmt->execute();
    return $stmt;
  }

  public function nilai_max($id){
    $stmt = $this->db->prepare("SELECT id_dtsiswa, MAX(rapor) AS max FROM dt_siswa WHERE id_dtsiswa='$id' GROUP BY id_dtsiswa");
    $stmt->execute();
    return $stmt;
  }

  public function nilai_min($id){
    $stmt = $this->db->prepare("SELECT id_dtsiswa, MIN(gaji) AS min FROM dt_siswa WHERE id_dtsiswa='$id' GROUP BY id_user");
    $stmt->execute();
    return $stmt;
  }

  public function get_data_image(){
    $stmt = $this->db->prepare("SELECT*FROM dt_siswa ORDER BY id_dt_siswa");
    $stmt->execute();
    return $stmt;
  }

}

 ?>
