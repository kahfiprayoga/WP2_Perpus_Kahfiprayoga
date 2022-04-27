<?php
class Mahasiswa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('FormInput');
    }
    public function proses()
    {
        $this->load->model(['ModelMahasiswa']);
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'biaya_kuliah' => $this->ModelMahasiswa->getBiaya($this->input->post('prodi'))
        ];
        $this->load->view('FormOutput', $data);
    }
}