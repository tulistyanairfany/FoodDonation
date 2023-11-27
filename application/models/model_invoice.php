<?php 

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama	= $this->input->post('nama');
		$tlp 	= $this->input->post('tlp');
		$jasa 	= $this->input->post('jasa');

		$invoice = array (
			'nama' => $nama, 
			'tlp'			=> $tlp,
			'jasa'			=> $jasa, 
			'tgl_pesan' => date('Y-m-d H:i:s'), 
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'	=> $id_invoice,
				'id_makanan'	=>  $item['id'],
				'nama_makanan'	=> $item['name'],
				'jumlah'	=> $item['qty'],
				'harga'	=> $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}	

		return TRUE; 
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function tampil_datauser()
	{
		$user =  $this->session->userdata('username');
		if($user == "admin"){
			$result = $this->db->get('tb_invoice');
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		} else {
			$result = $this->db->get_where('tb_invoice', array('nama' => $user));
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		}
	
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function tampil_bukti()
	{
		$user =  $this->session->userdata('username');
		if($user == "admin"){
			$result = $this->db->get('tb_konfirmasi');
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		} else {
			$result = $this->db->get_where('tb_konfirmasi', array('nama' => $user));
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		}
	}

	public function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	    public function UpdateStatus($where,$data,$table){
        $this->db->where($where); 
        $query = $this->db->update($table,$data);
        return $query;
    }
	
}
