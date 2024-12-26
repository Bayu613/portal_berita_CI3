<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        if ($this->session->userdata('level') !== 'Admin') {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
        $this->load->view('admin/user_index', $data);
    }

 
    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'upload/foto/';
        $config['max_size'] = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/user');
        } elseif (! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
        $data = array(
            'username'      => $this->input->post('username'),
            'nama'      => $this->input->post('nama'),
            'password'      =>md5($this->input->post('password')),
            'foto'      => $namafoto,
            'level'      => $this->input->post('level'),
        );

        $this->db->insert('user', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Carousel Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/user');
    }

    public function update()
    {
        $this->User_model->update();
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Diedit
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/user');
    }

    public function hapus($id)
    {
        $where = array('id_user' => $id);
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Data Berhasil Dihapus
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/user');
    }


    public function edit($id)
    {
        $this->db->select('*')->from('user');
        $this->db->where('id_user', $id);
        $user = $this->db->get()->result_array();
        $data = array('user' => $user);
        $this->load->view('admin/user_edit', $data);
    }
}
