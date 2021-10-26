<?php

class M_mhs extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('tb_mhs')->result_array();
  }

  function input_data($data, $table){
		$this->db->insert($table, $data);
	}

  function delete_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}