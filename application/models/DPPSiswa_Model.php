<?php 

/**
 * 
 */
class DPPSiswa_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_dpp_siswa')->result();
	}
	public function tambah_data( )
	{
		$data = array(
			'nisn' => $this->input->post('Nisn'),
			'nominal_dpp' => $this->input->post('nmnl_dpp'),
			'jumlah_angsuran' => $this->input->post('jmlh_angsuran'),
			'nominal_angsuran' => $this->input->post('nmnl_angsuran'),
			'status' => $this->input->post('stts', true)
		);

		$this->db->insert('tbl_dpp_siswa', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nominal_dpp' => $this->input->post('nmnl_dpp', true),
			'jumlah_angsuran' => $this->input->post('jmlh_angsuran', true),
			'nominal_angsuran' => $this->input->post('nmnl_angsuran', true),
			'status' => $this->input->post('stts', true)
		);
		$this->db->where('nisn', $this->input->post('Nisn', true));
		$this->db->update('tbl_dpp_siswa', $data);
	}

	public function hapus_data($kode)
	{
		$this->db->delete('tbl_dpp_siswa', ['nisn' => $kode]);
	}

	public function detail_data($kode)
	{
		$this->db->select('tbl_siswa.nisn, nama_siswa, kode_ta, jk, tempat_lahir, tgl_lahir, alamat, no_telfon, tahun_keluar, kode_jurusan, kode_jenisspp, nominal_dpp, jumlah_angsuran, nominal_angsuran, status ');
		$this->db->from('tbl_siswa');
		$this->db->join('tbl_dpp_siswa', 'tbl_siswa.nisn = tbl_dpp_siswa.nisn');
		$this->db->where('tbl_siswa.nisn', $kode);
		return $this->db->get()->result_array();
	}
}
?>
?>