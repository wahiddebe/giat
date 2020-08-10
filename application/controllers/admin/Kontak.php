<?php
class Kontak extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_kontak');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_kontak->get_all_kontak();
    $this->load->view('admin/v_kontak', $x);
  }
  function add_jasa()
  {
    $this->load->view('admin/v_add_jasa');
  }
  function add_konten_jasa()
  {
    $this->load->view('admin/v_add_konten_jasa');
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_kontak->get_kontak_by_kode($kode);
    $this->load->view('admin/v_edit_kontak', $x);
  }
  function update_kontak()
  {
    $nama = $this->input->post('nama');
    $id_kontak = $this->input->post('id_kontak');
    $isi = $this->input->post('isi');
    $save = $this->m_kontak->update_kontak($id_kontak, $nama, $isi);

    if ($save) {
      echo $this->session->set_flashdata('msg', 'success');
      redirect('admin/kontak');
    } else {
      echo $this->session->set_flashdata('msg', 'warning');
      redirect('admin/kontak');
    }
  }
}
