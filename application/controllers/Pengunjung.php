<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');

    }
	public function index()
	{
		$this->load->view('Pengunjung/Pilih_Map');
	}
}
