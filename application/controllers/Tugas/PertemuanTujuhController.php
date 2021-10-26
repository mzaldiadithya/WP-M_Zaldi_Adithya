<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PertemuanTujuhController extends CI_Controller 
{
	public $data, $price;

	public function index()
	{	
		$this->components();
	}

	public function assignment()
	{
		// Check The Brand And It's Price
		$brand = $this->input->post('merk');
		if($brand == 'Nike')
		{
			$this->price = '375.000';
		}
		else if($brand == 'Adidas')
		{
			$this->price = '300.000';
		}
		else if($brand == 'Kickers')
		{
			$this->price = '250.000';
		}
		else if($brand == 'Eiger')
		{
			$this->price = '275.000';
		}
		else if($brand == 'Bucherri')
		{
			$this->price = '400.000';
		}
		// Check The Brand And It's Price
	}

	public function store()
	{		
		$this->assignment();

		$this->data = [
			'nama' => $this->input->post('nama'),
			'nope' => $this->input->post('nope'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->price,
			'ukuran' => $this->input->post('size'),
		];

		$this->components();
	}

	public function reset()
	{
		$this->data = null;
		redirect('Tugas/PertemuanTujuhController/index');
	}

	public function components()
	{
		$this->load->view('Admin/partials/header');
		$this->load->view('Admin/partials/sidebar');
		if(empty($this->data))
		{
			$this->load->view('Admin/Tugas/Pertemuan07');
		}
		else
		{
			$this->load->view('Admin/Tugas/Pertemuan07', $this->data);
		}
		$this->load->view('Admin/partials/js');
	}

	public function validator()
	{
		$this->form_validation->set_rules('nama', 'Nama Pembeli', 'required|min_length[5]', 
		[
			'required' => 'Nama Pembeli Cannot Be Empty',
			'min_length' => 'Nama Pembeli`s Value Is Way Too Short'
		]);

		$this->form_validation->set_rules('nope', 'Nomor HP', 'required|min_length[5]|numeric', 
		[
			'required' => 'Nomor HP Cannot Be Empty',
			'min_length' => 'Nomor HP`s Value Is Way Too Short',
			'numeric' => 'Nomor HP Must Be A Numeric',
		]);

		$this->form_validation->set_rules('merk', 'Merk Sepatu', 'required', 
		[
			'required' => 'You Have To Choose One Of The Merk Sepatu',
		]);

		$this->form_validation->set_rules('size', 'Ukuran Sepatu', 'required', 
		[
			'required' => 'You Have To Choose One Of The Ukuran Sepatu',
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
