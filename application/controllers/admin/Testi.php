<?php
class Testi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_testi');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_testi->get_testi();
    $this->load->view('admin/v_testi', $x);
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_testi->get_testi_by_kode($kode);
    $this->load->view('admin/v_edit_testi', $x);
  }

  function update_testi()
  {

    $config['upload_path'] = './user/assets/img/avatars/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './user/assets/img/avatars/' . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '100%';
        $config['width'] = '100%';
        $config['height'] = '100%';
        $config['new_image'] = './user/assets/img/avatars/' . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar = $gbr['file_name'];
        $nama = $this->input->post('nama');
        $testi = $this->input->post('testi');
        $id_testi = $this->input->post('id_testi');
        $this->m_testi->update_testi($id_testi, $nama, $testi, $gambar);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/testi');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/testi');
      }
    } else {
      $nama = $this->input->post('nama');
      $testi = $this->input->post('testi');
      $id_testi = $this->input->post('id_testi');
      $this->m_testi->update_testi_tanpa_img($id_testi, $nama, $testi);
      echo $this->session->set_flashdata('msg', 'info');
      redirect('admin/testi');
    }
  }

  function hapus_rental()
  {
    $kode = $this->input->post('kode');
    $gambar = $this->input->post('gambar');
    $path = './user/assets/img/rental/' . $gambar;
    unlink($path);
    $this->m_rental->hapus_rental($kode);
    echo $this->session->set_flashdata('msg', 'success-hapus');
    redirect('admin/rental');
  }
}
