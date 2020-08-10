<?php
class M_rental extends CI_Model
{

  function get_all_rental()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_rental ORDER BY id_rental DESC");
    return $hsl;
  }

  function simpan_rental($nama, $harga, $gambar)
  {
    $hsl = $this->db->query("INSERT INTO tbl_rental (nama,harga,foto) VALUES ('$nama','$harga','$gambar')");
    return $hsl;
  }

  function get_rental_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_rental WHERE id_rental='$kode'");
    return $hsl;
  }

  function update_rental($id_rental, $nama, $harga, $gambar)
  {
    $hsl = $this->db->query("UPDATE tbl_rental SET nama='$nama',harga='$harga',foto='$gambar' WHERE id_rental='$id_rental'");
    return $hsl;
  }

  function update_rental_tanpa_img($id_rental, $nama, $harga)
  {
    $hsl = $this->db->query("UPDATE tbl_rental SET nama='$nama',harga='$harga' WHERE id_rental='$id_rental'");
    return $hsl;
  }

  function hapus_rental($kode)
  {
    $hsl = $this->db->query("DELETE FROM tbl_rental WHERE id_rental='$kode'");
    return $hsl;
  }


  //Frontend
  function get_rental()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_rental ORDER BY id_rental DESC");
    return $hsl;
  }

  function get_rental_home()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_rental ORDER BY id_rental DESC LIMIT 3");
    return $hsl;
  }
}
