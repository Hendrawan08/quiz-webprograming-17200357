<?php
// Siswa.php

class Siswa extends CI_Controller {

    public function index() {
        $this->load->view('input_form');
    }

    public function submit_form() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );

        $this->load->model('Siswa_model');
        $this->Siswa_model->insert_siswa($data);

        redirect('siswa/show_data');
    }

    public function show_data() {
        $this->load->model('Siswa_model');
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $this->load->view('hasil_form', $data);
    }
}
?>

