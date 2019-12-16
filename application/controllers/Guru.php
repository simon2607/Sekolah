<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru'); // Memanggil Model Guru
	}

	public function index()
	{
		$data['judul']="Tampil Data Guru";
		$data['tampil']=$this->M_guru->tampil()->result(); //ambil data dari MODELS
		$this->load->view('guru/tampil', $data, FALSE);
	}

	public function input()
	{
		$data['judul']="Input Guru Baru";
		$this->load->view('guru/input', $data, FALSE);
	}

	public function save()
	{
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
		$jenis_kelamin=$this->input->post('jk');
		$mail=$this->input->post('email');
		$data=array(
					// kode_guru disini adalah field di database
					'nip'			=>$nip,
					'nama'			=>$nama,
					'jk'			=>$jenis_kelamin,
					'email'			=>$mail,
					
					);
		$this->M_guru->save($data);
		redirect('guru','refresh');
	}

	public function edit()
	{
		$nip=$this->uri->segment(3);
		$data['judul']="Edit Data";
		$data['edit']=$this->M_guru->getid($nip)->row_array();
		$this->load->view('guru/edit', $data, FALSE);
	}

	public function update()
	{
		$nip=$this->input->post('nip');
		$data=array(
			'nip'			=>$this->input->post('nip'),
			'nama'			=>$this->input->post('nama'),
			'jk'			=>$this->input->post('jk'),
			'email'			=>$this->input->post('email'),
			
		);

		$this->M_guru->update($data,$nip);
		redirect('guru','refresh');
		
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('nip', $id);
		$this->db->delete('guru');
		redirect('guru','refresh');
	}
}

















?>