<?php
class Landing extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_landing');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_landing->get_landing();
    $this->load->view('admin/v_landing', $x);
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_landing->get_landing_by_kode($kode);
    $this->load->view('admin/v_edit_landing', $x);
  }

  function update_landing()
  {

    $config['upload_path'] = './user/assets/img/tech/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //judul yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './user/assets/img/tech/' . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '100%';
        $config['width'] = '100%';
        $config['height'] = '100%';
        $config['new_image'] = './user/assets/img/tech/' . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar = $gbr['file_name'];
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $id_landing = $this->input->post('id_landing');
        $this->m_landing->update_landing($id_landing, $judul, $isi, $gambar);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/landing');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/landing');
      }
    } else {
      $judul = $this->input->post('judul');
      $isi = $this->input->post('isi');
      $id_landing = $this->input->post('id_landing');
      $this->m_landing->update_landing_tanpa_img($id_landing, $judul, $isi);
      echo $this->session->set_flashdata('msg', 'info');
      redirect('admin/landing');
    }
  }
}
