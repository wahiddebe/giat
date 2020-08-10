<?php
class M_jasa extends CI_Model
{

  function get_all_jasa()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_jasa ORDER BY id_jasa DESC");
    return $hsl;
  }
  function get_all_konten_jasa()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_jasa_konten ORDER BY id_jasa_konten DESC");
    return $hsl;
  }

  function simpan_jasa($tujuan, $vendor_cde, $vendor_cdd, $ex_cde, $ex_cdd)
  {
    $hsl = $this->db->query("INSERT INTO tbl_jasa (tujuan, vendor_cde, vendor_cdd, ex_cde, ex_cdd) VALUES ('$tujuan', '$vendor_cde', '$vendor_cdd', '$ex_cde', '$ex_cdd')");
    return $hsl;
  }
  function simpan_konten_jasa($judul, $gambar)
  {
    $hsl = $this->db->query("INSERT INTO tbl_jasa_konten (judul,foto) VALUES ('$judul','$gambar')");
    return $hsl;
  }

  function get_jasa_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_jasa WHERE id_jasa='$kode'");
    return $hsl;
  }
  function get_konten_by_kode($kode)
  {
    $hsl = $this->db->query("SELECT * FROM tbl_jasa_konten WHERE id_jasa_konten='$kode'");
    return $hsl;
  }

  function update_jasa($id_jasa, $tujuan, $vendor_cde, $vendor_cdd, $ex_cde, $ex_cdd)
  {
    $hsl = $this->db->query("UPDATE tbl_jasa SET tujuan='$tujuan',vendor_cde='$vendor_cde',vendor_cdd='$vendor_cdd',ex_cdd='$ex_cdd',ex_cde='$ex_cde' WHERE id_jasa='$id_jasa'");
    return $hsl;
  }
  function update_konten_jasa($kode, $judul, $gambar)
  {
    $hsl = $this->db->query("UPDATE tbl_jasa_konten SET judul='$judul',foto='$gambar' WHERE id_jasa_konten='$kode'");
    return $hsl;
  }

  function update_konten_jasa_no_img($kode, $judul)
  {
    $hsl = $this->db->query("UPDATE tbl_jasa_konten SET judul='$judul' WHERE id_jasa_konten='$kode'");
    return $hsl;
  }

  function hapus_jasa($kode)
  {
    $hsl = $this->db->query("DELETE FROM tbl_jasa WHERE id_jasa='$kode'");
    return $hsl;
  }
  function hapus_konten_jasa($kode)
  {
    $hsl = $this->db->query("DELETE FROM tbl_jasa_konten WHERE id_jasa_konten='$kode'");
    return $hsl;
  }


  //Frontend
  function get_jasa()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_jasa_konten ORDER BY id_jasa_konten DESC");
    return $hsl;
  }

  function get_jasa_home()
  {
    $hsl = $this->db->query("SELECT * FROM tbl_jasa_konten ORDER BY id_jasa_konten DESC LIMIT 2");
    return $hsl;
  }
}
