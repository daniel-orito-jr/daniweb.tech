<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $arrData['title'] = "Daniweb | Home";
        $this->load->view('header', $arrData);
        $this->load->view('index', $arrData);
        $this->load->view('footer', $arrData);
    }
}