<?php
class Layanan extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_layanan');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_layanan->get_layanan();
    $this->load->view('admin/v_layanan', $x);
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_layanan->get_layanan_by_kode($kode);
    $this->load->view('admin/v_edit_layanan', $x);
  }

  function update_layanan()
  {
    $judul_1 = $this->input->post('judul_1');
    $isi_1 = $this->input->post('isi_1');
    $id_layanan = $this->input->post('id_layanan');
    $judul_2 = $this->input->post('judul_2');
    $isi_2 = $this->input->post('isi_2');
    $judul_3 = $this->input->post('judul_3');
    $isi_3 = $this->input->post('isi_3');
    $save = $this->m_layanan->update_layanan($id_layanan, $judul_1, $judul_2, $judul_3, $isi_1, $isi_2, $isi_3);
    echo $this->session->set_flashdata('msg', 'info');
    redirect('admin/layanan');

    if ($save) {
      echo $this->session->set_flashdata('msg', 'success');
      redirect('admin/layanan');
    } else {
    }
  }
}
