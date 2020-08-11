<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Rental extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_rental');
    $this->load->model('m_kontak');
    $this->load->model('m_home');
  }

  public function index()
  {
    $hp = $this->m_kontak->get_kontak_by_kode(1);
    foreach ($hp->result_array() as $hp) {
      $no_hp = $hp['isi'];
    }
    $hp_rental = $this->m_kontak->get_kontak_by_kode(3);
    foreach ($hp_rental->result_array() as $hp_rental) {
      $no_hp_rental = $hp_rental['isi'];
    }
    $alamat = $this->m_kontak->get_kontak_by_kode(2);
    foreach ($alamat->result_array() as $alamat) {
      $alamat = $alamat['isi'];
    }
    $rental = $this->m_home->get_home_rental();
    foreach ($rental->result_array() as $rental) {
      $rental_judul = $rental['judul'];
      $rental_isi = $rental['isi'];
    }
    $data = array(
      'title' => 'Rental',
      'active1' => '',
      'active2' => '',
      'active3' => 'active',
      'no_hp' => $no_hp,
      'no_hp_rental' => $no_hp_rental,
      'alamat' => $alamat,
      'rental_judul' => $rental_judul,
      'rental_isi' => $rental_isi,
      'rental' => $this->m_rental->get_rental(),
      'isi' => 'user/v_rental'
    );

    $this->load->view('layouts/v_wrapper', $data, FALSE);
  }
}

/* End of file Home.php */
