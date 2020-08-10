<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_jasa');
    $this->load->model('m_kontak');
    $this->load->model('m_home');
  }

  public function index()
  {
    $hp = $this->m_kontak->get_kontak_by_kode(1);
    foreach ($hp->result_array() as $hp) {
      $no_hp = $hp['isi'];
    }
    $alamat = $this->m_kontak->get_kontak_by_kode(2);
    foreach ($alamat->result_array() as $alamat) {
      $alamat = $alamat['isi'];
    }
    $jasa = $this->m_home->get_home_jasa();
    foreach ($jasa->result_array() as $jasa) {
      $jasa_judul = $jasa['judul'];
      $jasa_isi = $jasa['isi'];
    }
    $data = array(
      'title' => 'Pengiriman Barang',
      'active1' => '',
      'active2' => 'active',
      'active3' => '',
      'no_hp' => $no_hp,
      'alamat' => $alamat,
      'jasa_judul' => $jasa_judul,
      'jasa_isi' => $jasa_isi,
      'jasa' => $this->m_jasa->get_jasa(),
      'harga' => $this->m_jasa->get_all_jasa(),
      'isi' => 'user/v_jasa'
    );

    $this->load->view('layouts/v_wrapper', $data, FALSE);
  }
}

/* End of file Home.php */
