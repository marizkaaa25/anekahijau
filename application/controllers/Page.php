<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'AnekaHijau';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/page');
        $this->load->view('templates/footer');
    }
}
