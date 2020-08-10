<?php
class M_kontak extends CI_Model
{

	function get_all_kontak()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_kontak ORDER BY id_kontak DESC");
		return $hsl;
	}

	function get_kontak_by_kode($kode)
	{
		$hsl = $this->db->query("SELECT * FROM tbl_kontak WHERE id_kontak='$kode'");
		return $hsl;
	}

	function update_kontak($id_kontak, $nama, $isi)
	{
		$hsl = $this->db->query("UPDATE tbl_kontak SET nama='$nama',isi='$isi' WHERE id_kontak='$id_kontak'");
		return $hsl;
	}
}
