<?php 

/**
 * 
 */
class Jenis_Spp_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_jenis_spp')->result();
	}

	public function tambah_data( )
	{
		$data = array(
			'kode_jenisspp' => $this->input->post('kode_jenisspp', true),
			'nominal_jenis' => $this->input->post('nominal_jenis', true),
			'kategori' => $this->input->post('kategori', true),
			'tahun' => $this->input->post('tahun', true)
		);

		$this->db->insert('tbl_jenis_spp', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nominal_jenis' => $this->input->post('nominal_jenis', true),
			'kategori' => $this->input->post('kategori', true),
			'tahun' => $this->input->post('tahun', true)
		);
		$this->db->where('kode_jenisspp', $this->input->post('kode_jenisspp', true));
		$this->db->update('tbl_jenis_spp', $data);
	}

	public function hapus_data($kode)
	{
		$this->db->delete('tbl_jenis_spp', ['kode_jenisspp' => $kode]);
	}

	public function detail_data($kode)
	{
		return $this->db->get_where('tbl_jenis_spp', ['kode_jenisspp' => $kode]) ->row_array(); 
	}
}
?>