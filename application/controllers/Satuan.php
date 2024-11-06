<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Satuan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('mSatuan'); 
    }

    function index() {
        $data['data'] = $this->mSatuan->getData(); 
        $this->load->view('view_satuan', $data);
    }
}
