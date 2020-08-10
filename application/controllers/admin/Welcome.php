<?php
class Welcome extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_welcome');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_welcome->get_welcome();
    $this->load->view('admin/v_welcome', $x);
  }
  function get_edit()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_welcome->get_welcome_by_kode($kode);
    $this->load->view('admin/v_edit_welcome', $x);
  }

  function update_welcome()
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
        $judul_1 = $this->input->post('judul_1');
        $isi_1 = $this->input->post('isi_1');
        $judul_2 = $this->input->post('judul_2');
        $isi_2 = $this->input->post('isi_2');
        $id_welcome = $this->input->post('id_welcome');
        $this->m_welcome->update_welcome($id_welcome, $judul_1, $isi_1, $judul_2, $isi_2, $gambar);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/welcome');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/welcome');
      }
    } else {
      $judul_1 = $this->input->post('judul_1');
      $isi_1 = $this->input->post('isi_1');
      $id_welcome = $this->input->post('id_welcome');
      $judul_2 = $this->input->post('judul_2');
      $isi_2 = $this->input->post('isi_2');
      $this->m_welcome->update_welcome_tanpa_img($id_welcome, $judul_1, $isi_1, $judul_2, $isi_2,);
      echo $this->session->set_flashdata('msg', 'info');
      redirect('admin/welcome');
    }
  }
}
