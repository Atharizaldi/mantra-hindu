<?php

class Auth extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Musers', 'm');
	}


	public function register()
	{
		$data = json_decode(file_get_contents('php://input'));

		$user = $this->m->get(['username' => $data->username])->result();
		if (count($user) == 0) {
			$this->m->add([
				'name' => $data->name,
				'username' => $data->username,
				'password' => password_hash($data->password, PASSWORD_DEFAULT)
			]);
			echo $this->responJSON([
				'status' => 200,
				'message' => 'Daftar berhasil',
				'data' => null
			]);
		} else {
			echo $this->responJSON([
				'status' => 404,
				'message' => 'Daftar gagal, username sudah ada',
				'data' => null
			]);
		}
	}

	public function login()
	{
		$data = json_decode(file_get_contents('php://input'));

		$user = $this->m->get(['username' => $data->username, 'role' => 'user']);

		if ($user->num_rows() > 0) {
			if (password_verify($data->password, $user->row()->password)) {
				echo $this->responJSON([
					'status' => 200,
					'message' => 'Login berhasil',
					'data' => $user->row()
				]);
			} else {
				echo $this->responJSON([
					'status' => 404,
					'message' => 'Password salah',
					'data' => null
				]);
			}
		} else {
			echo $this->responJSON([
				'status' => 404,
				'message' => 'Akun tidak ditemukan, silahkan daftar',
				'data' => null
			]);
		}
	}

	public function me($id)
	{
		$user = $this->m->get(['id' => $id, 'role' => 'user']);

		if ($user->num_rows() > 0) {
			echo $this->responJSON([
				'status' => 200,
				'message' => 'Akun ditemukan',
				'data' => $user->row()
			]);
		} else {
			echo $this->responJSON([
				'status' => 404,
				'message' => 'Akun tidak ditemukan, silahkan daftar',
				'data' => null
			]);
		}
	}

	public function update($id)
	{
		$user = $this->m->get(['id' => $id])->row();
		$request = $this->input->post();

		$config['upload_path'] = './assets/image/';
		$config['allowed_types'] = 'png|jpeg|jpg|webg|gif';
		$config['max_size'] = 1000000;
		$config['file_name'] = uniqid();

		$this->load->library('upload', $config);

		if ($_FILES['image']['size'] > 0) {
			if ($this->upload->do_upload('image')) {
				$request['image'] = $this->upload->data('file_name');
			} else {
				$request['image'] = json_encode($this->upload->display_errors());
			}

			if ($user->image != '' && file_exists('./assets/image/' . $user->image)) {
				unlink('./assets/image/' . $user->image);
			}
		}


		if ($request['password'] != '') {
			$request['password'] = password_hash($request['password'], PASSWORD_DEFAULT);
		} else {
			unset($request['password']);
		}

		$this->m->update($request, ['id' => $id]);

		echo $this->responJSON([
			'status' => 200,
			'message' => 'Update profile sukses'
		]);
	}
}
