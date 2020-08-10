<?php
class Jasa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if (!isset($_SESSION['logged_in'])) {
      $url = base_url('administrator');
      redirect($url);
    };
    $this->load->model('m_jasa');
    $this->load->library('upload');
  }


  function index()
  {
    $x['data'] = $this->m_jasa->get_all_jasa();
    $this->load->view('admin/v_jasa', $x);
  }
  function konten()
  {
    $x['data'] = $this->m_jasa->get_all_konten_jasa();
    $this->load->view('admin/v_konten_jasa', $x);
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
    $x['data'] = $this->m_jasa->get_jasa_by_kode($kode);
    $this->load->view('admin/v_edit_jasa', $x);
  }
  function get_edit_konten()
  {
    $kode = $this->uri->segment(4);
    $x['data'] = $this->m_jasa->get_konten_by_kode($kode);
    $this->load->view('admin/v_edit_konten_jasa', $x);
  }
  function simpan_jasa()
  {
    $tujuan = $this->input->post('tujuan');
    $vendor_cde = $this->input->post('vendor_cde');
    $vendor_cdd = $this->input->post('vendor_cdd');
    $ex_cde = $this->input->post('ex_cde');
    $ex_cdd = $this->input->post('ex_cdd');
    $save = $this->m_jasa->simpan_jasa($tujuan, $vendor_cde, $vendor_cdd, $ex_cde, $ex_cdd);

    if ($save) {
      echo $this->session->set_flashdata('msg', 'success');
      redirect('admin/jasa');
    } else {
      echo $this->session->set_flashdata('msg', 'warning');
      redirect('admin/jasa');
    }
  }
  function update_jasa()
  {
    $tujuan = $this->input->post('tujuan');
    $id_jasa = $this->input->post('id_jasa');
    $vendor_cde = $this->input->post('vendor_cde');
    $vendor_cdd = $this->input->post('vendor_cdd');
    $ex_cde = $this->input->post('ex_cde');
    $ex_cdd = $this->input->post('ex_cdd');
    $save = $this->m_jasa->update_jasa($id_jasa, $tujuan, $vendor_cde, $vendor_cdd, $ex_cde, $ex_cdd);

    if ($save) {
      echo $this->session->set_flashdata('msg', 'success');
      redirect('admin/jasa');
    } else {
      echo $this->session->set_flashdata('msg', 'warning');
      redirect('admin/jasa');
    }
  }
  function simpan_konten_jasa()
  {
    $config['upload_path'] = './user/assets/img/jasa/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './user/assets/img/jasa/' . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '60%';
        $config['width'] = 710;
        $config['height'] = 455;
        $config['new_image'] = './user/assets/img/jasa/' . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $gambar = $gbr['file_name'];
        $judul = $this->input->post('judul');
        $this->m_jasa->simpan_konten_jasa($judul, $gambar);
        echo $this->session->set_flashdata('msg', 'success');
        redirect('admin/jasa/konten');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/jasa/konten');
      }
    } else {
      redirect('admin/jasa/konten');
    }
  }

  function update_konten_jasa()
  {

    $config['upload_path'] = './user/assets/img/jasa/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    $this->upload->initialize($config);
    if (!empty($_FILES['foto']['name'])) {
      if ($this->upload->do_upload('foto')) {
        $gbr = $this->upload->data();
        //Compress Image
        $config['image_library'] = 'gd2';
        $config['source_image'] = './user/assets/img/jasa/' . $gbr['file_name'];
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = FALSE;
        $config['quality'] = '60%';
        $config['width'] = 710;
        $config['height'] = 455;
        $config['new_image'] = './user/assets/img/jasa/' . $gbr['file_name'];
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

        $kode = $this->input->post('kode');
        $gambar = $gbr['file_name'];
        $judul = $this->input->post('judul');
        $this->m_jasa->update_konten_jasa($kode, $judul, $gambar);
        echo $this->session->set_flashdata('msg', 'info');
        redirect('admin/jasa/konten');
      } else {
        echo $this->session->set_flashdata('msg', 'warning');
        redirect('admin/jasa/konten');
      }
    } else {
      $kode = $this->input->post('kode');
      $judul = $this->input->post('judul');
      $this->m_jasa->update_konten_jasa_no_img($kode, $judul);
      echo $this->session->set_flashdata('msg', 'info');
      redirect('admin/jasa/konten');
    }
  }

  function hapus_jasa()
  {
    $kode = $this->input->post('kode');
    $this->m_jasa->hapus_jasa($kode);
    echo $this->session->set_flashdata('msg', 'success-hapus');
    redirect('admin/jasa');
  }
  function hapus_konten_jasa()
  {
    $kode = $this->input->post('kode');
    $gambar = $this->input->post('gambar');
    $this->m_jasa->hapus_konten_jasa($kode);
    $path = './user/assets/img/rental/' . $gambar;
    unlink($path);
    echo $this->session->set_flashdata('msg', 'success-hapus');
    redirect('admin/jasa/konten');
  }
}
