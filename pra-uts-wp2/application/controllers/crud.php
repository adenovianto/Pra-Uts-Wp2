<?php
class crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    function index()
    {
        $data['user'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_tampil', $data);
    }
    function tambah()
    {
        $this->load->view('v_input');
    }
    function tambah_aksi()
    {
        $Nim = $this->input->post('Nim');
        $Nama = $this->input->post('Nama');
        $Kelas = $this->input->post('Kelas');
        $Alamat = $this->input->post('Alamat');

        $data = array(
            'Nim' => $Nim,
            'Nama' => $Nama,
            'Kelas' => $Kelas,
            'Alamat' => $Alamat
        );
        $this->m_data->input_data($data, 'user');
        redirect('crud/index');
    }
    function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'user');
        redirect('crud/index');
    }
    function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where, 'user')->result();
        $this->load->view('v_edit', $data);
    }
    function update()
    {
        $id = $this->input->post('id');
        $Nim = $this->input->post('Nim');
        $Nama = $this->input->post('Nama');
        $Kelas = $this->input->post('Kelas');
        $Alamat = $this->input->post('Alamat');

        $data = array(
            'Nim' => $Nim,
            'Nama' => $Nama,
            'Kelas' => $Kelas,
            'Alamat' => $Alamat
        );
        $where = array('id' => $id);
        $this->m_data->update_data($where, $data, 'user');
        redirect('crud/index');
    }
}
