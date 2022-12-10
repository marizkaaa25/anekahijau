<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'AnekaHijau';
        $data['product'] = $this->Mfilter->fetch_filter_type();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/page', $data);
        $this->load->view('templates/footer');
    }
}
