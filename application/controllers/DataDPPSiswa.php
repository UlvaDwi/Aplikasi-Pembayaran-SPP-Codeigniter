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
		$this->load->model('Siswa_Model');
		$this->load->model('Jenis_Spp_Model');
		$this->load->model('Jurusan_Model');
		$this->load->model('TahunAjaran_Model');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$data['dppsiswa'] = $this->DPPSiswa_Model->getAllData();
		$data['jenis_spp'] = $this->Jenis_Spp_Model->getAllData();
		$data['jurusan'] = $this->Jurusan_Model->getAllData();
		$data['tahunajaran'] = $this->TahunAjaran_Model->getAllData();

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

		$this->form_validation->set_rules("nm_siswa", "Nama", "required");
		$this->form_validation->set_rules("jk_siswa", "Jenis Kelamin", "required");
		$this->form_validation->set_rules("tmpt_lahir", "Tempat Lahir", "required");
		$this->form_validation->set_rules("tgl_lahir", "Tanggal Lahir", "required");
		$this->form_validation->set_rules("almat", "Alamat", "required");
		$this->form_validation->set_rules("telp_siswa", "Telp Siswa", "required");
		// $this->form_validation->set_rules("thn_masuk", "Tahun Masuk", "required");
		// $this->form_validation->set_rules("thn_keluar", "Tahun Keluar", "required");
		

		// $this->form_validation->set_rules("jurusan", "Jurusan", "required");
		// $this->form_validation->set_rules("jenis_spp", "Jenis SPP", "required");

		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->Siswa_Model->tambah_data();
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
		$this->form_validation->set_rules("nm_siswa", "Nama", "required");
		$this->form_validation->set_rules("jk_siswa", "Jenis Kelamin", "required");
		$this->form_validation->set_rules("tmpt_lahir", "Tempat Lahir", "required");
		$this->form_validation->set_rules("tgl_lahir", "Tanggal Lahir", "required");
		$this->form_validation->set_rules("almat", "Alamat", "required");
		$this->form_validation->set_rules("telp_siswa", "Telp Siswa", "required");
		// $this->form_validation->set_rules("thn_masuk", "Tahun Masuk", "required");
		// $this->form_validation->set_rules("thn_keluar", "Tahun Masuk", "required");
		// // $this->form_validation->set_rules("jurusan", "Jurusan", "required");
		// $this->form_validation->set_rules("jenis_spp", "Jenis SPP", "required");

		
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->DPPSiswa_Model->detail_data($kd);
			$data['tahunajaran'] = $this->TahunAjaran_Model->getAllData();
			$data['jurusan'] = $this->Jurusan_Model->getAllData();
			$data['jenis_spp'] = $this->Jenis_Spp_Model->getAllData();
			
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