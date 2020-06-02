<?php 

/**
 * 
 */
class Jurusan_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_jurusan')->result();
	}

	public function tambah_data( )
	{
		$data = array(
			'kode_jurusan' => $this->input->post('kd_jur', true),
			'nama_jurusan' => $this->input->post('nm_jur', true)
		);

		$this->db->insert('tbl_jurusan', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nama_jurusan' => $this->input->post('nm_jur', true)
		);
		$this->db->where('kode_jurusan', $this->input->post('kd_jur', true));
		$this->db->update('tbl_jurusan', $data);
	}

	public function hapus_data($kode)
	{
		$this->db->delete('tbl_jurusan', ['kode_jurusan' => $kode]);
	}

	public function detail_data($kode)
	{
		return $this->db->get_where('tbl_jurusan', ['kode_jurusan' => $kode]) ->row_array(); 
	}
}
?>