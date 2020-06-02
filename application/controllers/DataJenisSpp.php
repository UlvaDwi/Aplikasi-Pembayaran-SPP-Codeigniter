<?php 

/**
 * 
 */
class DataJenisSpp extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Jenis_Spp_Model');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$data['jenis_spp'] = $this->Jenis_Spp_Model->getAllData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('jenis_spp/index', $data);
		$this->load->view('templates/footer');
	}

	public function validation_form(){
		$this->form_validation->set_rules("kode_jenisspp", "Kode Jenis SPP", "required|is_unique[tbl_jenis_spp.kode_jenisspp]|max_length[20]");
		$this->form_validation->set_rules("nominal_jenis", "Nominal Jenis", "required|is_unique[tbl_jenis_spp.nominal_jenis]");
		$this->form_validation->set_rules("kategori", "Kategori", "required|is_unique[tbl_jenis_spp.kategori]");
		$this->form_validation->set_rules("tahun", "Tahun Berlaku", "required[tbl_jenis_spp.tahun]");
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->Jenis_Spp_Model->tambah_data();
			$this->session->set_flashdata('flash_jenis_spp', 'Disimpan');
			redirect('DataJenisSpp');
		}	
	}

	public function hapus($kd)
	{
		$this->Jenis_Spp_Model->hapus_data($kd);
		$this->session->set_flashdata('flash_jenis_spp', 'Dihapus');
		redirect('DataJenisSpp');
	}

	public function ubah($kd)
	{
		$this->form_validation->set_rules("kode_jenisspp", "Kode Jenis SPP", "required|max_length[20]");
		$this->form_validation->set_rules("nominal_jenis", "Nominal Jenis", "required");
		$this->form_validation->set_rules("kategori", "Kategori", "required");
		$this->form_validation->set_rules("tahun", "Tahun Berlaku", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->Jenis_Spp_Model->detail_data($kd);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('jenis_spp/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->Jenis_Spp_Model->ubah_data();
			$this->session->set_flashdata('flash_jenis_spp', 'DiUbah');
			redirect('DataJenisSpp');
		}	
	}


}
?>