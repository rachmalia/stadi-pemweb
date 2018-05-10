<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Movie
 * @package     Controller
 * @access      Public
 */

 class Movie extends CI_Controller{
    public function _construct(){
        parent::__construct(); // inherit dari parent
         $this->load->database(); //memuat library database, sesuai konfigurasi
         $this->load->helper('url');
    }

    /**
      * daftar film dalam database
      * @return void
      */

    public function index(){
        $this->load->view('index');
    }

    /**
     * rincian film
     * @return void
     */

    public function detail(){
        //bagaimana rincian yang akan ditampilkan?
    }
 }
 ?>