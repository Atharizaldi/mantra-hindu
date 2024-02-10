<?php

class Quis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'Mquis' => 'm'
		]);
	}

	public function index()
	{
		$data = $this->m->get()->result();
		return view('quis.index', [
			'data' => $data
		]);
	}

	public function create()
	{
		return view('quis.add');
	}

	public function store()
	{
		$data = $this->input->post();

		$this->m->add($data);
		redirect(base_url() . 'quis');
	}

	public function edit($id)
	{
		$data = $this->m->get(['id' => $id])->row();
		return view('quis.edit', [
			'data' => $data
		]);
	}

	public function update($id)
	{
		$data = $this->input->post();

		$this->m->update($data, ['id' => $id]);
		redirect(base_url() . 'quis');
	}
	
	public function delete($id){
		$this->m->delete(['id' => $id]);
		redirect(base_url() . 'quis');
	}
}
