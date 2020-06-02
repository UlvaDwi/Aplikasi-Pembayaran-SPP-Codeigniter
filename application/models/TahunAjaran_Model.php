<?php 

/**
 * 
 */
class TahunAjaran_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_tahun_ajaran')->result();
	}

	public function tambah_data( )
	{
		$data = array(
			'kode_ta' => $this->input->post('kd_ta', true),
			'tahun_ajaran' => $this->input->post('thn_ajaran', true),
			'status' => $this->input->post('stts', true),
			'semester' => $this->input->post('smt', true)
		);

		$this->db->insert('tbl_tahun_ajaran', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'tahun_ajaran' => $this->input->post('thn_ajaran', true),
			'status' => $this->input->post('stts', true),
			'semester' => $this->input->post('smt', true)
		);

		$this->db->where('kode_ta', $this->input->post('kd_ta', true));
		$this->db->update('tbl_tahun_ajaran', $data);
	}

	public function hapus_data($kode)
	{
		$this->db->delete('tbl_tahun_ajaran', ['kode_ta' => $kode]);
	}

	public function detail_data($kode)
	{
		return $this->db->get_where('tbl_tahun_ajaran', ['kode_ta' => $kode]) ->row_array(); 
	}
}
?>