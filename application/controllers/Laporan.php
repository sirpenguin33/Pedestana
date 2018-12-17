<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 

{
	
	   public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('model_fasilitator');
		$this->load->model('model_bnpb');
		$this->load->model('model_laporan');
		$this->load->model('model_desa');
		$this->load->model('model_login');

    }
	
	public function Index()
	{
		$this->load->view('Laporan/index');

	}

	public function lapor_desa(){
		$ID=$this->uri->segment(3);
		$id_desa=$this->uri->segment(4);
		
		$data=array(
		'ID'=> $ID,
		'data_indikator' => $this->model_laporan->get_indikator(),
		'data_laporan'=> $this->model_laporan->edit($ID),
		'data_desa' => $this->model_desa->edit($id_desa)
		);
		$this->load->view('Fasilitator/lapor_desa',$data);
	}
	public function lapor(){
        $ID=$this->input->post('ID');
		$jawaban="";
		for($x=1;$x<=10;$x++){
			$jawaban=$jawaban.$this->input->post((string)$x);
			
		} 
		
		$data = array(

            'Indikator'    => $jawaban,
			'Status' => 'Waiting',
			'ID_BNPB' =>'0',
			
			);

        $this->model_laporan->update($data,$ID);

      			$data_session['data_fasilitator']=$data_fasilitator;
				$data_session['laporan_fasilitator']=$this->model_laporan->get_laporan($data_fasilitator->ID_fasilitator);
				$data_session['jumlah_laporan']=$this->model_laporan->get_proses($data_fasilitator->ID_fasilitator);
				$this->session->set_userdata($data_session);

        //redirect
        redirect('Fasilitator/');
		
	}


    public function simpan()
    {
		$id_fasilitator = $this->input->post('ID_FASILITATOR');
		
		$data = array(

            
			'Status' => 'Proses Pelaporan',
			'ID_DESA' =>$this->input->post('ID_DESA'),
			'ID_FASILITATOR'=>$id_fasilitator,
			'ID_BNPB' =>'0',
			'Indikator' => "",
			
			);

        $this->model_laporan->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }
	
		 public function edit($ID_fasilitator){
        $ID_fasilitator = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_pegawai' => $this->model_fasilitator->edit($ID_fasilitator),

        );

        $this->load->view('Admin/index.php', $data_edit);
    }
	public function verifikasi(){
		$ID_bnpb=$this->input->post("ID_bnpb");
		$ID_laporan=$this->input->post("ID_laporan");
		$ID_desa=$this->input->post("ID_desa");
		$data=array(
		'Status' => 'Verified',
		'ID_bnpb' => $ID_bnpb,
		
		);
		$data_desa=array(
		'Kategori' => $this->input->post("Kategori"),);
		$save=$this->model_desa->update($data_desa, $ID_desa);
		$this->model_laporan->update($data,$ID_laporan);
		
			 if($save){
		 
		 $this->session->set_flashdata('msg_success',"berhasil");
		 
	 }
	 else{
		 $this->session->set_flashdata('msg_error',"gagal");
	 }
			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
       redirect('BNPB/');
		
		
		
	}
	
	    public function update()
    {
        
		$id = $this->input->post("id_pegawai");
		
        $data = array(

            'nama_depan'           => $this->input->post("nama_depan"),
            'nama_belakang'         => $this->input->post("nama_belakang"),
            'tanggal_lahir'    => $this->input->post("tanggal_lahir"),
            'jenis_kelamin'         => $this->input->post("jenis_kelamin"),
			'alamat'         => $this->input->post("alamat"),
            'gaji'    => $this->input->post("gaji"),
            'supervisor'         => $this->input->post("supervisor"),
			'departemen' => $this->input->post("departemen"));

     $save=$this->model_pegawai->update($data, $id);
	 if($save){
		 
		 $this->session->set_flashdata('msg_success',"berhasil");
	 }
	 else{
		 $this->session->set_flashdata('msg_error',"gagal");
	 }
			

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('pegawai/');

    }

    public function hapus()
    {
        $id['ID']= $this->uri->segment(3);

        $this->model_laporan->hapus($id);

        //redirect
        redirect('Admin/');

    }
	
	
}
