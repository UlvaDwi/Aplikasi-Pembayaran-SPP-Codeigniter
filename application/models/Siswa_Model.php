<?php 

/**
 * 
 */
class Siswa_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_siswa')->result();
	}
	public function tambah_data( )
	{
		$data = array(
			'nisn' => $this->input->post('Nisn'),
			'nama_siswa' => $this->input->post('nm_siswa'),

			'kode_ta' => $this->input->post('kd_ta'),
			'jk' => $this->input->post('jk_siswa'),
			'tempat_lahir' => $this->input->post('tmpt_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir', true),
			'alamat' => $this->input->post('almat', true),
			'no_telfon' => $this->input->post('telp_siswa', true),
			// 'tahun_masuk' => $this->input->post('thn_masuk', true),
			'tahun_keluar' => $this->input->post('thn_keluar', true),
			'kode_jurusan' => $this->input->post('jurusan', true),
			'kode_jenisspp' => $this->input->post('jenis_spp', true)
		);

		$this->db->insert('tbl_siswa', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nama_siswa' => $this->input->post('nm_siswa'),
			'kode_ta' => $this->input->post('kd_ta', true),
			'jk' => $this->input->post('jk_siswa'),
			'tempat_lahir' => $this->input->post('tmpt_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir', true),
			'alamat' => $this->input->post('almat', true),
			'no_telfon' => $this->input->post('telp_siswa', true),
			// 'tahun_masuk' => $this->input->post('thn_masuk', true),
			'tahun_keluar' => $this->input->post('thn_keluar', true),
			'kode_jurusan' => $this->input->post('jurusan', true),
			'kode_jenisspp' => $this->input->post('jenis_spp', true)
		);
		$this->db->where('nisn', $this->input->post('Nisn', true));
		$this->db->update('tbl_siswa', $data);
	}

	public function hapus_data($kode)
	{
		$this->db->delete('tbl_siswa', ['nisn' => $kode]);
	}

	public function detail_data($kode)
	{
		return $this->db->get_where('tbl_siswa', ['nisn' => $kode]) ->row_array(); 
	}
}
