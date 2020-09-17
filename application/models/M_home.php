<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

  function get_home_rental()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_home WHERE id=1");
    return $hsl;
  }
  function get_home_jasa()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_home WHERE id=2");
    return $hsl;
  }
  function get_home_testi()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_home WHERE id=3");
    return $hsl;
  }
  function get_home_catatan()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_home WHERE id=4");
    return $hsl;
  }
  function get_home_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_home WHERE id='$kode'");
    return $hsl;
  }

  function update_home($id, $judul, $isi)
  {
    $hsl = $this->db->query("UPDATE tbl_home SET judul='$judul',isi='$isi' WHERE id='$id'");
    return $hsl;
  }
}

/* End of file M_home.php */
