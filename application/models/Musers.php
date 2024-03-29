<?php

class Musers extends CI_Model
{

	protected $table = 'users';

	function get($where = null)
	{
		if ($where === null) {
			return $this->db->get($this->table);
		} else {
			return $this->db->get_where($this->table, $where);
		}
	}

	function add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function update($data, $where)
	{
		$this->db->update($this->table, $data, $where);
	}

	function delete($where)
	{
		$this->db->delete($this->table, $where);
	}

	function leaderboard()
	{
		return $this->db->where('role', 'user')->order_by('point', 'DESC')->get($this->table);
	}
}
