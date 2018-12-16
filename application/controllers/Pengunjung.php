<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->library('googlemaps');
		$this->load->model('model_fasilitator');
    }
	public function index()
	{
		$config=array();
		$config['center']='adelaide, australia';
		$this->load->view('Pengunjung/index');
	}
		public function tes()
	{
		$data['data_fasilitator']=$this->model_fasilitator->get_all();
		$this->googlemaps->initialize();
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('Pengunjung/Pilih_Map',$data);
	}
}
