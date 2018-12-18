<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->library('googlemaps');
		$this->load->model('model_fasilitator');
    $this->load->model('model_desa');
	}
	public function index()
	{
		$config=array();
		$data['data_Kaltim']=$this->model_desa->get_Daerah("Kalimantan Timur");
			$data['data_Kalbar']=$this->model_desa->get_Daerah("Kalimantan Barat");
			$data['data_Kalteng']=$this->model_desa->get_Daerah("Kalimantan Tengah");
			$data['data_Kalsel']=$this->model_desa->get_Daerah("Kalimantan Selatan");
			$data['data_Aceh']=$this->model_desa->get_Daerah("Aceh");
			$data['data_Sumut']=$this->model_desa->get_Daerah("Sumatera Utara");
			$data['data_Riau']=$this->model_desa->get_Daerah("Riau");
			$data['data_Sumbar']=$this->model_desa->get_Daerah("Sumatera Barat");
			$data['data_Jambi']=$this->model_desa->get_Daerah("Jambi");
			$data['data_Bengkulu']=$this->model_desa->get_Daerah("Bengkulu");
			$data['data_Sumsel']=$this->model_desa->get_Daerah("Sumatera Selatan");
			$data['data_Lampung']=$this->model_desa->get_Daerah("Lampung");
			$data['data_Babel']=$this->model_desa->get_Daerah("Bangka Belitung");
			$data['data_Jabar']=$this->model_desa->get_Daerah("Jawa Barat");
			$data['data_Jateng']=$this->model_desa->get_Daerah("Jawa Tengah");
			$data['data_Semarang']=$this->model_desa->get_Daerah("Semarang");
			$data['data_Yogyakarta']=$this->model_desa->get_Daerah("Yogyakarta");
			$data['data_Jatim']=$this->model_desa->get_Daerah("Kalimantan Timur");
			$data['data_Bali']=$this->model_desa->get_Daerah("Bali");
			$data['data_NTB']=$this->model_desa->get_Daerah("Nusa Tenggara Barat");
			$data['data_Banten']=$this->model_desa->get_Daerah("Banten");
			$data['data_NTT']=$this->model_desa->get_Daerah("Nusa Tenggara Timur");
			$data['data_Maluku']=$this->model_desa->get_Daerah("Maluku");
			$data['data_Papua']=$this->model_desa->get_Daerah("Papua");
			$data['data_IrianJayaBarat']=$this->model_desa->get_Daerah("Irian Jaya Barat");
			$data['data_MalukuUtara']=$this->model_desa->get_Daerah("Maluku Utara");
			$data['data_Sulut']=$this->model_desa->get_Daerah("Sulawesi Utara");
			$data['data_Gorontalo']=$this->model_desa->get_Daerah("Gorontalo");
			$data['data_Sulteng']=$this->model_desa->get_Daerah("Sulawesi Tengah");
			$data['data_Sulsel']=$this->model_desa->get_Daerah("Sulawesi Selatan");
			$data['data_Sulbar']=$this->model_desa->get_Daerah("Sulawesi Barat");
			$data['data_Kaltim']=$this->model_desa->get_Daerah("Kalimantan Timur");
			$data['data_Kalsel']=$this->model_desa->get_Daerah("Kalimantan Selatan");
			$data['data_Kalteng']=$this->model_desa->get_Daerah("Kalimantan Tengah");
			$data['data_Kalbar']=$this->model_desa->get_Daerah("Kalimantan Barat");
		$this->load->view('Pengunjung/index',$data);
	}
		public function tes()
	{
		$data['data_fasilitator']=$this->model_fasilitator->get_all();
		$this->googlemaps->initialize();
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('Pengunjung/Pilih_Map',$data);
	}
}
