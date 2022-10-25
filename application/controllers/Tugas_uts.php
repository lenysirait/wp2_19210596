<?php
class Tugas_uts extends CI_Controller
{
	public function index()
	{
		$this->load->view('Tugas_uts/view_form');
	}
	public function cetak()
	{
		$this->form_validation->set_rules('nama', 'Nama Siswa','required|min_length[3]',
		['required' => 'Nama siswa harus diisi','min_lenght' => 'Nama Siswa terlalu pendek']);
	
		$this->form_validation->set_rules('nis', 'NIS','required|min_length[3]',
		['required' => 'Nomor induk siswa harus diisi','min_lenght' => 'NIS terlalu pendek']);
		
        $this->form_validation->set_rules('kelas', 'Kelas','required|min_length[1]',
        ['required' => 'Kelas harus diisi','min_lenght' => 'Kode Kelas terlalu pendek']);
		
        $this->form_validation->set_rules('tgl','Tanggal Lahir','required|min_length[3]',
		['required' => 'Tanggal lahir harus diisi','min_lenght' => 'Format tanggal tidak ditemukan']);
		
		$this->form_validation->set_rules('tmpt' , 'Tempat Lahir','required|min_length[3]',
		['required' => 'Tempat lahir harus diisi','min_lenght' => 'Tempat lahir terlalu pendek']);
		
        $this->form_validation->set_rules('alamat','Alamat','required|min_length[3]',
		['required' => 'Alamat harus diisi','min_lenght' => 'Alamat terlalu pendek']);
		
        $this->form_validation->set_rules('gender','Jenis Klamin','required|min_length[1]|trim',
		['required' => 'Jenis kelamin harus dipilih','min_lenght' => 'Jenis kelamin tidak tersedia']);
		
		$this->form_validation->set_rules('agama','Agama','required|min_length[1]',
		['required' => 'Agama harus dipilih','min_lenght' => 'Agama tidak tersedia']);

		if ($this->form_validation->run() == false) {
			$this->load->view('Tugas_uts/view_form');
		} else {
			$data = [
				'nama'   => $this->input->post('nama'),
				'nis'    => $this->input->post('nis'),
                'kelas'  => $this->input->post('kelas'),
                'tgl'    => $this->input->post('tgl'),
                'tmpt'   => $this->input->post('tmpt'),
                'alamat' => $this->input->post('alamat'),
				'gender' => $this->input->post('gender'),
                'agama'  => $this->input->post('agama')
			];
			$this->load->view('Tugas_uts/view_data', $data );
		}
	}
}