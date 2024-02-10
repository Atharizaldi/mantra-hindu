<?php

class Materi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmateri', 'm');
	}


	public function getAll()
	{
		$data = $this->m->get()->result();

		if (count($data) > 0) {
			echo $this->responJSON([
				'status' => 200,
				'message' => 'Data tersedia',
				'data' => $data
			]);
		} else {
			echo $this->responJSON([
				'status' => 404,
				'message' => 'Data kosong',
				'data' => null
			]);
		}
	}
}
