<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Upload extends CI_Controller
{

	function create()
	{
		$this->load->view('form_upload');
	}

	function test()
	{
		$this->load->view('test');
	}

	public function tampilGambar($id)
	{
		$this->load->model('berkas_model');
		$where = array('kd_berkas' => $id);
		$data['berkas'] = $this->berkas_model->getGambar($where)->result();
		$this->load->view('tampil_gambar', $data);
	}

	function proses()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 60000;
		// $config['max_height']           = 60000;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('berkas')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('form_upload', $error);
		} else {
			$image_data = $this->upload->data();
			$imgdata = file_get_contents($image_data['full_path']);
			// var_dump($_FILES['berkas']['tmp_name']);
			// die();
			// $imgdata = file_get_contents($_FILES['berkas']['tmp_name']);
			$file_encode = base64_encode($imgdata);
			$data['keterangan_berkas'] = $this->input->post('keterangan_berkas');
			$data['tipe_berkas'] = $this->upload->data('file_type');
			$data['ukuran_berkas'] = $this->upload->data('file_size');
			$data['berkas'] = $file_encode;
			$data['nama_berkas'] =  $this->upload->data('file_name');
			$this->db->insert('tb_berkas', $data);
			unlink($image_data['full_path']);
			redirect('upload');
		}
	}

	public function index()
	{
		$data['berkas'] = $this->db->get('tb_berkas');
		$this->load->view('tampil_berkas', $data);
	}
}
