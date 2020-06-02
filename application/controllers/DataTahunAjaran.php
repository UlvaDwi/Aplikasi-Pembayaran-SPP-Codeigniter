<?php 

/**
 * 
 */
class DataTahunAjaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('TahunAjaran_Model');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$data['tahunajaran'] = $this->TahunAjaran_Model->getAllData();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tahunajaran/index', $data);
		$this->load->view('templates/footer');
	}

	public function validation_form(){
		$this->form_validation->set_rules("kd_ta", "Kode Tahun Ajaran", "required|is_unique[tbl_tahun_ajaran.kode_ta]|max_length[5]");
		$this->form_validation->set_rules("thn_ajaran", "Tahun Ajaran", "required[tbl_tahun_ajaran.tahun_ajaran]");
		$this->form_validation->set_rules("smt", "Semester", "required[tbl_tahun_ajaran.semester]");
		$this->form_validation->set_rules("stts", "Status", "required[tbl_tahun_ajaran.status]");
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			$this->TahunAjaran_Model->tambah_data();
			$this->session->set_flashdata('flash_tahunajaran', 'Disimpan');
			redirect('DataTahunAjaran');
		}	
	}

	public function hapus($kd)
	{
		$this->TahunAjaran_Model->hapus_data($kd);
		$this->session->set_flashdata('flash_tahunajaran', 'Dihapus');
		redirect('DataTahunAjaran');
	}

	public function ubah($kd)
	{
		$this->form_validation->set_rules("kd_ta", "Kode Tahun Ajaran", "required|max_length[5]");
		$this->form_validation->set_rules("thn_ajaran", "Tahun Ajaran", "required");
		$this->form_validation->set_rules("smt", "Semester", "required");
		$this->form_validation->set_rules("stts", "Status", "required");
		if ($this->form_validation->run() == FALSE)
		{
			$data['ubah']= $this->TahunAjaran_Model->detail_data($kd);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('tahunajaran/ubah', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->TahunAjaran_Model->ubah_data();
			$this->session->set_flashdata('flash_tahunajaran', 'DiUbah');
			redirect('DataTahunAjaran');
		}	
	}


}
?>