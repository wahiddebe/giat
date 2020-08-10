<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_jasa');
    $this->load->model('m_kontak');
    $this->load->model('m_home');
    $this->load->model('m_rental');
    $this->load->model('m_testi');
    $this->load->model('m_layanan');
    $this->load->model('m_welcome');
    $this->load->model('m_landing');
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
    $rental = $this->m_home->get_home_rental();
    foreach ($rental->result_array() as $rental) {
      $rental_judul = $rental['judul'];
      $rental_isi = $rental['isi'];
    }
    $testi = $this->m_home->get_home_testi();
    foreach ($testi->result_array() as $testi) {
      $testi_judul = $testi['judul'];
      $testi_isi = $testi['isi'];
    }
    $data = array(
      'title' => 'Home',
      'active1' => 'active',
      'active2' => '',
      'active3' => '',
      'rental' => $this->m_rental->get_rental_home(),
      'testi' => $this->m_testi->get_testi(),
      'no_hp' => $no_hp,
      'alamat' => $alamat,
      'jasa_judul' => $jasa_judul,
      'jasa_isi' => $jasa_isi,
      'rental_judul' => $rental_judul,
      'rental_isi' => $rental_isi,
      'testi_judul' => $testi_judul,
      'testi_isi' => $testi_isi,
      'jasa' => $this->m_jasa->get_jasa_home(),
      'layanan' => $this->m_layanan->get_layanan(),
      'welcome' => $this->m_welcome->get_welcome(),
      'landing' => $this->m_landing->get_landing(),
      'isi' => 'user/v_home'
    );

    $this->load->view('layouts/v_wrapper', $data, FALSE);
  }
}

/* End of file Home.php */
