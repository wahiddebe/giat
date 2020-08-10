<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_landing extends CI_Model
{

  function get_landing()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_landing");
    return $hsl;
  }
  function get_landing_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_landing WHERE id_landing = '$kode'");
    return $hsl;
  }

  function update_landing($id_landing, $judul, $isi, $foto)
  {
    $hsl = $this->db->query("UPDATE tbl_landing SET judul='$judul',isi='$isi',foto='$foto' WHERE id_landing='$id_landing'");
    return $hsl;
  }
  function update_landing_tanpa_img($id_landing, $judul, $isi)
  {
    $hsl = $this->db->query("UPDATE tbl_landing SET judul='$judul',isi='$isi' WHERE id_landing='$id_landing'");
    return $hsl;
  }
}

/* End of file M_home.php */
