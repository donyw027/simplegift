<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saldo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();


        $this->load->model('Admin_model', 'admin');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['title'] = "Saldo";
        $role = $this->session->userdata('login_session')['role'];

        if (is_admin() == true) {
            $data['saldo'] = $this->admin->get('saldo');

            $this->template->load('templates/dashboard', 'saldo/data', $data);
        }
    }



    private function _validasi($mode)
    {
        $this->form_validation->set_rules('saldo', 'saldo', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('saldo', 'saldo', 'required|trim');
        } else {
            $db = $this->admin->get('saldo', ['saldo' => $this->input->post('saldo', true)]);
            $saldo = $this->input->post('saldo', true);
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah saldo";
            $this->template->load('templates/dashboard', 'saldo/add', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'tgl'       => $input['tgl'],
                'saldo'       => $input['saldo'],
                'ket'       => $input['ket']

            ];

            if ($this->admin->insert('saldo', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('saldo');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('saldo/add');
            }
        }
    }

    public function edit($getId)
    {
        $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit saldo";
            $data['saldo'] = $this->admin->get('saldo', ['id' => $id]);
            $this->template->load('templates/dashboard', 'saldo/edit', $data);
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'tgl'       => $input['tgl'],
                'saldo'       => $input['saldo'],
                'ket'       => $input['ket']

            ];

            if ($this->admin->update('saldo', 'id', $id, $input_data)) {
                set_pesan('data berhasil diubah.');
                redirect('saldo');
            } else {
                set_pesan('data gagal diubah.', false);
                redirect('saldo/edit/' . $id);
            }
        }
    }

    public function delete($getId)
    {
        $id = encode_php_tags($getId);
        if ($this->admin->delete('saldo', 'id', $id)) {
            set_pesan('data berhasil dihapus.');
        } else {
            set_pesan('data gagal dihapus.', false);
        }
        redirect('saldo');
    }
}
