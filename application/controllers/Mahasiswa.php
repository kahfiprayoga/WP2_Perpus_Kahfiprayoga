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
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'jeniskel' => $this->input->post('jeniskel'),
            'agama' => $this->input->post('agama'),
        ];

        $this->load->view('FormOutput', $data);
    }
}