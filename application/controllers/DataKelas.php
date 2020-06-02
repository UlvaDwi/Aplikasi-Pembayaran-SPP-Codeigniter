
<?php 

/**
 * 
 */
class DataKelas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelas_Model');
		$this->load->model('Jurusan_Model');
		$this->load->library('form_validation');

	}
	function index()
	{
		// tampil list kelas
		$data['kelas'] = $this->Kelas_Model->getAllData();
		// untuk dropdown
		$data['jurusan'] = $this->Jurusan_Model->getAllData();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kelas/index', $data);
		$this->load->view('templates/footer');
	}

	
	public function validation_form(){
		$this->Kelas_Model->tambah_data();
		$this->session->set_flashdata('flash_kelas', 'Disimpan');
		redirect('DataKelas');
	}

	public function hapus($kd)
	{
		$this->Kelas_Model->hapus_data($kd);
		$this->session->set_flashdata('flash_kelas', 'Dihapus');
		redirect('DataKelas');
	}

	// public function ubah($id)
	// {
	// 	$this->form_validation->set_rules("id_jur", "Kode Kelas", "required|max_length[5]");
	// 	$this->form_validation->set_rules("nm_jur", "Nama Kelas", "required");
	// 	if ($this->form_validation->run() == FALSE)
	// 	{
	// 		$data['ubah']= $this->Kelas_Model->detail_data($id);
	// 		$this->load->view('templates/header');
	// 		$this->load->view('templates/sidebar');
	// 		$this->load->view('Kelas/ubah', $data);
	// 		$this->load->view('templates/footer');
	// 	}
	// 	else
	// 	{
	// 		$this->Kelas_Model->ubah_data();
	// 		$this->session->set_flashdata('flash_kelas', 'DiUbah');
	// 		redirect('DataKelas');
	// 	}	
	// }


}
?>