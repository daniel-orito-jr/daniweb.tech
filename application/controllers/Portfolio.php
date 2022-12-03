<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class portfolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $arrData['title'] = "Daniweb | Portfolio Details";
        $this->load->view('header', $arrData);
        $this->load->view('portfolio-details', $arrData);
        $this->load->view('footer', $arrData);
    }
}