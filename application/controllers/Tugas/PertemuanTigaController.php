<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PertemuanTigaController extends CI_Controller 
{
	public $n1, $n2, $hasil, $v1, $v2, $data;

	public function index($param1 = null, $param2 = null)
	{					
		$this->v1 = $param1;
		$this->v2 = $param2;

		$this->hitung();

		$this->components();
	}

	public function hitung()
	{		
		if(empty($this->v1) or empty($this->v2))
		{			
			$this->v1 = 2;
			$this->v2 = 3;
		}

		$this->n1 = $this->v1;
		$this->n2 = $this->v2;
		$this->hasil = $this->n1 + $this->n2;
	}

	public function store()
	{
		$this->hitung();
		
		$this->data = [
			'kode_mk' => $this->input->post('kode_mk'),
			'nama_mk' => $this->input->post('nama_mk'),
			'sks' => $this->input->post('sks'),
		];

		$this->components();
	}

	public function reset()
	{
		$data = null;
		redirect('Tugas/PertemuanTigaController/index');
	}

	public function components()
	{
		$this->load->view('Admin/partials/header');
		$this->load->view('Admin/partials/sidebar');
		if(empty($this->data))
		{
			$this->load->view('Admin/Tugas/Pertemuan03');
		}
		else
		{
			$this->load->view('Admin/Tugas/Pertemuan03', $this->data);
		}
		$this->load->view('Admin/partials/js');
	}

	public function validator()
	{
		$this->form_validation->set_rules('kode_mk', 'Kode_MK', 'required|trim|min_length[5]', 
		[
			'required' => 'Kode_MK Cannot Be Empty',
			'min_length' => 'Kode_MK`s Value Is Way Too Short'
		]);

		$this->form_validation->set_rules('nama_mk', 'Nama_MK', 'required|min_length[5]', 
		[
			'required' => 'Nama_MK Cannot Be Empty',
			'min_length' => 'Nama_MK`s Value Is Way Too Short'
		]);

		$this->form_validation->set_rules('sks', 'SKS', 'required|numeric', 
		[
			'required' => 'SKS Cannot Be Empty',
			'numeric' => 'SKS`s Must Be A Numeric',
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
	
}
