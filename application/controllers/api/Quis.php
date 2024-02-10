<?php

class Quis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mquis', 'm');
		$this->load->model('Musers', 'u');
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

	public function check($id){
		$data = json_decode(file_get_contents('php://input'));
		$allQuis = $this->m->get()->result();

		$point = 0;
		foreach($allQuis as $quis){
			foreach($data as $item){
				if($quis->id == $item->id && $quis->answer_correct == $item->answer){
					$point += $quis->point;
				}
			}
		}

		$this->u->update(['point' => $point], ['id' => $id]);

		echo $this->responJSON([
			'status' => 200,
			'message' => 'Quis Checked',
			'point' => $point
		]);
	}
}
