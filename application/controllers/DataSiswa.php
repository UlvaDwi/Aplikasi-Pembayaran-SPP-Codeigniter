<?php 

/**
 * 
 */
class DataDPPSiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('DPPSiswa_Model');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$data['dppsiswa'] = $this->DPPSiswa_Model->getAllData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dppsiswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function validation_form(){
		$this->form_validation->set_rules("Nisn", "nisn", "required|is_unique[tbl_dpp_siswa.nisn]|max_length[5]");
		$this->form_validation->set_rules("nmnl_dpp", "Nominal DPP", "required");
		$this->form_validation->set_rules("jmlh_angsuran", "Jumlah Angsuran", "required");
		$this->form_validation->set_rules("nmnl_angsuran", "Nominal Angsuran", "required");
		$this->form_validation->set_rules("stts", "Status", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->DPPSiswa_Model->tambah_data();
			$this->session->set_flashdata('flash_dppsiswa', 'Disimpan');
			redirect('DataDPPSiswa');
		}	
	}

	public function hapus($kd)
	{
		$this->DPPSiswa_Model->hapus_data($kd);
		$this->session->set_flashdata('flash_dppsiswa', 'Dihapus');
		redirect('DataDPPSiswa');
	}

	public function ubah($kd)
	{
		$this->form_validation->set_rules("Nisn", "nisn", "required|max_length[5]");
		$this->form_validation->set_rules("nmnl_dpp", "Nominal", "required");
		$this->form_validation->set_rules("jmlh_angsuran", "Jumlah Angsuran", "required");
		$this->form_validation->set_rules("nmnl_angsuran", "Nominal Angsuran", "required");
		$this->form_validation->set_rules("stts", "Status", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->DPPSiswa_Model->detail_data($kd);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('dppsiswa/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->DPPSiswa_Model->ubah_data();
			$this->session->set_flashdata('flash_dppsiswa', 'DiUbah');
			redirect('DataDPPSiswa');
		}	
	}


}
?>