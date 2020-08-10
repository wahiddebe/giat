<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_testi extends CI_Model
{

  function get_testi()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_testi");
    return $hsl;
  }

  function get_testi_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_testi WHERE id_testi = '$kode'");
    return $hsl;
  }

  function update_testi($id_testi, $nama, $testi, $gambar)
  {
    $hsl = $this->db->query("UPDATE tbl_testi SET nama='$nama',testi='$testi',foto= '$gambar' WHERE id_testi='$id_testi'");
    return $hsl;
  }

  function update_testi_tanpa_img($id_testi, $nama, $testi)
  {
    $hsl = $this->db->query("UPDATE tbl_testi SET nama='$nama',testi='$testi' WHERE id_testi='$id_testi'");
    return $hsl;
  }
}

/* End of file M_home.php */
