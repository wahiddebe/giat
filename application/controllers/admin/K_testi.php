<?php
class K_testi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_home');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_home->get_home_testi();
    $x['control'] = 'k_testi';
    $this->load->view('admin/v_k_home', $x);
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['control'] = 'k_testi';
    $x['data'] = $this->m_home->get_home_by_kode($kode);
    $this->load->view('admin/v_edit_k_home', $x);
  }

  function update_k_testi()
  {
    $judul = $this->input->post('judul');
    $isi = $this->input->post('isi');
    $id = $this->input->post('id');
    $save = $this->m_home->update_home($id, $judul, $isi);
    echo $this->session->set_flashdata('msg', 'info');
    redirect('admin/k_testi');
    if ($save) {
      echo $this->session->set_flashdata('msg', 'success');
      redirect('admin/k_testi');
    } else {
    }
  }
}
