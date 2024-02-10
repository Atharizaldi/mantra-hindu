<?php

class Home extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$config['upload_path'] = './assets/audio/';
		$config['allowed_types'] = 'mp3|wav|ogg|flac|aac';
		$config['max_size'] = 1000000;
		$config['file_name'] = uniqid();

		$this->load->library('upload', $config);
		$this->load->model([
			'Mmateri' => 'm'
		]);
	}

	public function index()
	{
		$data = $this->m->get()->result();
		return view('materi.index', [
			'data' => $data
		]);
	}

	public function create()
	{
		return view('materi.add');
	}

	public function store()
	{
		$data = $this->input->post();

		if ($_FILES['audio']['name'] != '') {
			if ($this->upload->do_upload('audio')) {
				$data['audio'] = $this->upload->data('file_name');
			} else {
				$data['audio'] = json_encode($this->upload->display_errors());
			}
			unset($data['content']);
		}

		$this->m->add($data);
		redirect(base_url());
	}

	public function edit($id)
	{
		$data = $this->m->get(['id' => $id])->row();
		return view('materi.edit', [
			'data' => $data
		]);
	}

	public function update($id)
	{
		$item = $this->m->get(['id' => $id])->row();

		$data = $this->input->post();

		if ($data['type'] == 'audio') {
			if ($_FILES['audio']['name'] != '') {
				if ($this->upload->do_upload('audio')) {
					$data['audio'] = $this->upload->data('file_name');
				} else {
					$data['audio'] = json_encode($this->upload->display_errors());
				}

				if (file_exists('./assets/audio/' . $item->audio)) {
					unlink('./assets/audio/' . $item->audio);
				}
			}
			$data['content'] = null;
		} else {
			$data['audio'] = null;
			if (file_exists('./assets/audio/' . $item->audio)) {
				unlink('./assets/audio/' . $item->audio);
			}
		}

		$this->m->update($data, ['id' => $id]);
		redirect(base_url());
	}

	public function delete($id)
	{
		$item = $this->m->get(['id' => $id])->row();
		if (file_exists('./assets/audio/' . $item->audio)) {
			unlink('./assets/audio/' . $item->audio);
		}

		$this->m->delete(['id' => $id]);
		redirect(base_url());
	}

	public function view($id)
	{
		$data = $this->m->get(['id' => $id])->row();
		return view('materi.view', [
			'data' => $data
		]);
	}
}
