<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_layanan extends CI_Model
{

  function get_layanan()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_layanan");
    return $hsl;
  }
  function get_layanan_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_layanan WHERE id_layanan = '$kode'");
    return $hsl;
  }
  function update_layanan($id_layanan, $judul_1, $judul_2, $judul_3, $isi_1, $isi_2, $isi_3)
  {
    $hsl = $this->db->query("UPDATE tbl_layanan SET judul_1='$judul_1',judul_2='$judul_2',judul_3='$judul_3',isi_1='$isi_1',isi_2='$isi_2',isi_3='$isi_3' WHERE id_layanan='$id_layanan'");
    return $hsl;
  }
}

/* End of file M_home.php */
