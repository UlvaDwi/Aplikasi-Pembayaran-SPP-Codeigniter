<?php 

/**
 * 
 */
class Kelas_Model extends CI_Model
{
	public function getAllData()
	{
		$this->db->select('kode_kelas, kelas, tbl_jurusan.nama_jurusan, nama_kelas');
		$this->db->from('tbl_kelas');
		$this->db->join('tbl_jurusan', 'tbl_jurusan.kode_jurusan = tbl_kelas.kode_jurusan');
		return $this->db->get()->result();
	}

	public function getAllData_jurusan()
	{
		return $this->db->get('tbl_jurusan')->result();
	}

	public function tambah_data()
	{
		$data = array(
			'kode_kelas' => $this->input->post('kelas').	$this->input->post('kd_jur').$this->input->post('nm_kelas'),
			'kelas' => $this->input->post('kelas'),
			'kode_jurusan' => $this->input->post('kd_jur'),
			'nama_kelas' => $this->input->post('nm_kelas')
		);
		$this->db->insert('tbl_kelas', $data);
	}

	public function hapus_data($kd)
	{
		$this->db->delete('tbl_kelas', ['kode_kelas' => $kd]);
	}

	public function detail_data($kd)
	{
		return $this->db->get_where('tbl_kelas', ['kode_kelas' => $kd]) ->row_array(); 
	}

}

?>