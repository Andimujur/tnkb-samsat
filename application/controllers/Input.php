<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Input_model');
    }


    public function index()
    {
        $data['title'] = 'TNKB SAMSAT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/auth_header', $data);
        $this->load->view('input/index', $data);
        $this->load->view('templates/auth_footer');
    }

    public function tambahDataR2()
    {
        $data['title'] = 'Tambah data';

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|min_length[10]');
        $this->form_validation->set_rules('nopol', 'Nomor Polisi', 'required|min_length[4]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/auth_header', $data);
            $this->load->view('input/tambah-dataR2', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $tambahData =  $this->Input_model->tambahData('roda_dua');
            if ($tambahData) {
                $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert" >Data Berhasil Di Tambahkan </div>');
                redirect('input/input-R2');
            } else {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert" >Nomor Polisi Sudah Ada!!!</div>');
                redirect('input/input-R2');
            }
        }
    }
}
