<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{

    public function index()
    {
        $this->load->model('M_heroUnit');
        $data['title'] = 'Aneka Hijau - Staff';
        $data['hero'] = $this->M_heroUnit->getHero();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('staff/index', $data);
    }

    public function do_upload()
    {
        $config['upload_path']          = FCPATH . '/assets/img/hero/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 2048;
        $config['max_height']           = 1080;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_foto')) {
            // $error = array('error' => $this->upload->display_errors());
            $data['error'] = $this->upload->display_errors();
            echo $data['error'];

            // echo $error;

            // $this->load->view('upload_form', $error);
        } else {
            $data = $this->upload->data();

            $input = $this->input->post();

            $foto['nama'] = $input['nama'];
            $foto['file_foto'] = $data['file_name'];
            $foto['status'] = '0';

            $this->db->insert('hero', $foto);
            if ($this->db->affected_rows() > 0) {
                echo 'data berhasil disimpan';
            } else {
                echo 'data gagal disimpan';
            }
        }
    }

    public function hapusFoto()
    {
        /*
		ambil data yang lama
		di unlink
		upload data baru
		*/
        unlink('./uploads/wallpaperflare_com_wallpaper.jpg');
        echo 'file berhasil dihapus';
    }
}
