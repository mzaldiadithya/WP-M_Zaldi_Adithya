<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MahasiswaController extends CI_Controller 
{
	public $array;

	public function index()
	{
		$this->array = $data['mahasiswa'] = $this->m_mhs->get_data();

		$this->load->view('Admin/partials/header');
		$this->load->view('Admin/partials/sidebar');
		$this->load->view('Admin/Mahasiswa', $data);    
		$this->load->view('Admin/partials/js');
	}

	public function store()
	{
		$this->load->model('m_mhs');

		$data = [
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'alamat' => $this->input->post('alamat')
		];

		$this->m_mhs->input_data($data, 'tb_mhs');

		redirect('MahasiswaController/index');
	}

	public function validator()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[5]', 
		[
			'required' => 'Nama Cannot Be Empty',
			'min_length' => 'Nama`s Value Is Way Too Short'
		]);

		$this->form_validation->set_rules('nim', 'Nim', 'required|trim|min_length[5]|numeric', 
		[
			'required' => 'Nim Cannot Be Empty',
			'min_length' => 'Nim`s Value Is Way Too Short',
			'numeric' => 'Nim`s Must Be A Numeric'
		]);

		$this->form_validation->set_rules('alamat', 'Alamat', 'required', 
		[
			'required' => 'Alamat Cannot Be Empty',
		]);
 
		if($this->form_validation->run() != false)
		{
			$this->store();
		}
		else
		{
			$this->index();
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->m_mhs->delete_data($where, 'tb_mhs');

		redirect('MahasiswaController/index');
	}
}
