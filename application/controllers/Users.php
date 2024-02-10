<?php

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'Musers' => 'm'
		]);
	}

	public function index()
	{
		$data = $this->m->get()->result();
		return view('users.index', [
			'data' => $data
		]);
	}

	public function create()
	{
		return view('users.add');
	}

	public function store()
	{
		$data = $this->input->post();
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

		$this->m->add($data);
		redirect(base_url() . 'users');
	}

	public function edit($id)
	{
		$data = $this->m->get(['id' => $id])->row();
		return view('users.edit', [
			'data' => $data
		]);
	}

	public function update($id)
	{
		$data = $this->input->post();
		if ($data['password'] != '') {
			$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		} else {
			unset($data['password']);
		}

		$this->m->update($data, ['id' => $id]);
		redirect(base_url() . 'users');
	}

	public function delete($id)
	{
		$this->m->delete(['id' => $id]);
		redirect(base_url() . 'users');
	}
}
