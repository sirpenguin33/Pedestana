<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_fasilitator');
		$this->load->model('model_bnpb');
		$this->load->model('model_laporan');
		$this->load->model('model_desa');

    }
	public function index()
	{
		
		 $data = array(

            
            'data_fasilitator' => $this->model_fasilitator->get_all(),
			'data_desa' => $this->model_desa->get_all(),
			'data_bnpb' => $this -> model_bnpb->get_all(),
			'data_laporan' => $this -> model_laporan->get_all(),

        );

		$this->load->view('Admin/index',$data);
	}
	public function search(){
	$keyword=$this->input->post('keyword');
	$data=$this->model_fasilitator->search($keyword);
	redirect("/Admin",$data);
	
		
	}
	
}
