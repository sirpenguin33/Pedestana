<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitator extends CI_Controller 

{
	
	   public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->model('model_fasilitator');
		$this->load->model('model_bnpb');
		$this->load->model('model_laporan');
		$this->load->model('model_desa');

    }
	
	public function Index()
	{
		$this->load->view('Layout/Header');
		$this->load->view('Fasilitator/Fasilitator1');
		$this->load->view('Layout/Footer');
		$this->load->model('model_fasilitator'); 
		$this->load->helper('url');
	}

	public function Fasilitator2()
	{
		$this->load->view('Layout/Header');
		$this->load->view('Fasilitator/Fasilitator2');
		$this->load->view('Layout/Footer');
	}
    public function simpan()
    {
        $data = array(

            'Nama_fasilitator'       => $this->input->post("Nama_fasilitator"),
            'Tanggal_Lahir'         => $this->input->post("Tanggal_Lahir"),
            'Umur'    => $this->input->post("Umur"),
            'Pendidikan'         => $this->input->post("Pendidikan"),
			'No_Hp' => $this->input->post("No_Hp"),
			);

        $this->model_fasilitator->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
}
