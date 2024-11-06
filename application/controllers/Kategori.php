<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Kategori extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('mKategori'); 
    }

    function index() {
        $data['data'] = $this->mKategori->getData(); 
        $this->load->view('view_kategori', $data); 
    }
}
