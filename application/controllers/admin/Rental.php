<?php
class Rental extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_rental');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_rental->get_all_rental();
    $this->load->view('admin/v_rental', $x);
  }
  function add_rental()
  {
    $this->load->view('admin/v_add_rental');
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_rental->get_rental_by_kode($kode);
    $this->load->view('admin/v_edit_rental', $x);
  }
  function simpan_rental()
  {
    $config['upload_path'] = './user/assets/img/rental/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './user/assets/img/rental/' . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '60%';
        $config['width'] = 710;
        $config['height'] = 455;
        $config['new_image'] = './user/assets/img/rental/' . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar = $gbr['file_name'];
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $this->m_rental->simpan_rental($nama, $harga, $gambar);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('admin/rental');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/rental');
      }
    } else {
      redirect('admin/rental');
    }
  }

  function update_rental()
  {

    $config['upload_path'] = './user/assets/img/rental/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './user/assets/img/rental/' . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '60%';
        $config['width'] = 710;
        $config['height'] = 455;
        $config['new_image'] = './user/assets/img/rental/' . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar = $gbr['file_name'];
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $id_rental = $this->input->post('kode');
        $this->m_rental->update_rental($id_rental, $nama, $harga, $gambar);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/rental');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/rental');
      }
    } else {
      $nama = $this->input->post('nama');
      $harga = $this->input->post('harga');
      $id_rental = $this->input->post('kode');
      $this->m_rental->update_rental_tanpa_img($id_rental, $nama, $harga);
      echo $this->session->set_flashdata('msg', 'info');
      redirect('admin/rental');
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
