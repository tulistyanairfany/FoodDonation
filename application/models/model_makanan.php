<?php

class Model_makanan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_makanan');
	}
	public function tambah_makanan($data,$table){
		$this->db->insert($table,$data);
	}
	public function tambah_bukti($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_makanan($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id_makanan', $id)
						   ->limit(1)
						   ->get('tb_makanan');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_makanan($id_makanan)
	{
		$result = $this->db->where('id_makanan',$id_makanan)->get('tb_makanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_makanan');
		$this->db->like('nama_makanan', $keyword);
		$this->db->or_like('keterangan', $keyword); 
		return $this->db->get()->result();

	}
}
