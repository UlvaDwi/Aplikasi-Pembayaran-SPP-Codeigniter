<?php 

/**
 * 
 */
class DataJenisPembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jenis_Pembayaran_Model');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$data['jenis_pembayaran'] = $this->Jenis_Pembayaran_Model->getAllData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('jenis_pembayaran/index', $data);
		$this->load->view('templates/footer');
	}

	public function validation_form(){
		$this->form_validation->set_rules("kode_jenispembayaran", "Kode Jenis Pembayaran", "required|is_unique[tbl_jenis_pembayaran.kode_jenispembayaran]|max_length[20]");
		$this->form_validation->set_rules("nama_pembayaran", "Nama Pembayaran", "required[tbl_jenis_pembayaran.nama_pembayaran]");
		$this->form_validation->set_rules("nominal", "Nominal", "required[tbl_jenis_pembayaran.nominal]");
		$this->form_validation->set_rules("tahun", "Tahun Berlaku", "required[tbl_jenis_pembayaran.tahun]");
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->Jenis_Pembayaran_Model->tambah_data();
			$this->session->set_flashdata('flash_jenis_pembayaran', 'Disimpan');
			redirect('DataJenisPembayaran');
		}	
	}

	public function hapus($kd)
	{
		$this->Jenis_Pembayaran_Model->hapus_data($kd);
		$this->session->set_flashdata('flash_jenis_pembayaran', 'Dihapus');
		redirect('DataJenisPembayaran');
	}

	public function ubah($kd)
	{
		$this->form_validation->set_rules("kode_jenispembayaran", "Kode Jenis Pembayaran", "required|max_length[20]");
		$this->form_validation->set_rules("nama_pembayaran", "Nama Pembayaran", "required");
		$this->form_validation->set_rules("nominal", "Nominal", "required");
		$this->form_validation->set_rules("tahun", "Tahun", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->Jenis_Pembayaran_Model->detail_data($kd);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('jenis_pembayaran/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Jenis_Pembayaran_Model->ubah_data();
			$this->session->set_flashdata('flash_jenis_pembayaran', 'DiUbah');
			redirect('DataJenisPembayaran');
		}	
	}


}
?>