<?php

class Leaderboard extends CI_Controller
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
		$data = $this->m->leaderboard()->result();
		return view('leaderboard.index', [
			'data' => $data
		]);
	}
}
