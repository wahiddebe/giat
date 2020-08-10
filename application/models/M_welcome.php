<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_welcome extends CI_Model
{

  function get_welcome()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_welcome");
    return $hsl;
  }
  function get_welcome_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_welcome WHERE id_welcome = '$kode'");
    return $hsl;
  }
  function update_welcome($id_welcome, $judul_1, $isi_1, $judul_2, $isi_2, $foto)
  {
    $hsl = $this->db->query("UPDATE tbl_welcome SET judul_1='$judul_1',judul_2='$judul_2',isi_1='$isi_1',isi_2='$isi_2',foto='$foto' WHERE id_welcome='$id_welcome'");
    return $hsl;
  }
  function update_welcome_tanpa_img($id_welcome, $judul_1, $isi_1, $judul_2, $isi_2)
  {
    $hsl = $this->db->query("UPDATE tbl_welcome SET judul_1='$judul_1',judul_2='$judul_2',isi_1='$isi_1',isi_2='$isi_2' WHERE id_welcome='$id_welcome'");
    return $hsl;
  }
}

/* End of file M_home.php */
