<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Input_model extends CI_Model
{

    public function tambahData($table)
    {
        $tanggal = $this->input->post('tanggal');
        $nopol = $this->input->post('nopol');
        $keterangan = $this->input->post('keterangan');
        $key = $this->db->get_where($table, ['NomorPolisi' => $nopol])->row_array();
        $data = [
            'Tanggal' => $tanggal,
            'NomorPolisi' => $nopol,
            'Keteranagan' => $keterangan
        ];

        if ($data != null) {

            if ($key) {
                return false;
            } else {
                return  $this->db->insert($table, $data);
            }
        }
    }
}

/* End of file Input_model.php */
