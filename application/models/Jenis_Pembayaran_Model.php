<?php 

/**
 * 
 */
class Jenis_Pembayaran_Model extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('tbl_jenis_pembayaran')->result();
	}

	public function tambah_data( )
	{
		$data = array(
			'kode_jenispembayaran' => $this->input->post('kode_jenispembayaran', true),
			'nama_pembayaran' => $this->input->post('nama_pembayaran', true),
			'nominal' => $this->input->post('nominal', true),
			'tahun' => $this->input->post('tahun', true)
		);

		$this->db->insert('tbl_jenis_pembayaran', $data);
	}

	public function ubah_data( )
	{
		$data = array(
			'nama_pembayaran' => $this->input->post('nama_pembayaran', true),
			'nominal' => $this->input->post('nominal', true),
			'tahun' => $this->input->post('tahun', true)
		);
		$this->db->where('kode_jenispembayaran', $this->input->post('kode_jenispembayaran', true));
		$this->db->update('tbl_jenis_pembayaran', $data);
	}

	public function hapus_data($kode)
	{
		$this->db->delete('tbl_jenis_pembayaran', ['kode_jenispembayaran' => $kode]);
	}

	public function detail_data($kode)
	{
		return $this->db->get_where('tbl_jenis_pembayaran', ['kode_jenispembayaran' => $kode]) ->row_array(); 
	}
}
?>