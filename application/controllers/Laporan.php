<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 

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
		$this->load->view('Laporan/index');

	}


    public function simpan($id)
    {
        $jawaban="";
		for($x=1;$x<=60;$x++){
			$jawaban=$jawaban.$this->input->post((string)$x);
			
		} 
		
		$data = array(

            'Indikator'    => $jawaban,
			'Status' => 'Waiting',
			'ID_FASILITATOR' => $id,
			'ID_DESA' =>$this->input->post('ID_DESA'),
			
			);

        $this->model_laporan->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Fasilitator/');

    }
	
		 public function edit($ID_fasilitator){
        $ID_fasilitator = $this->uri->segment(3);

        $data_edit = array(

            'title'     => 'Edit Data Pegawai',
            'data_pegawai' => $this->model_fasilitator->edit($ID_fasilitator),

        );

        $this->load->view('Admin/index.php', $data_edit);
    }
	
	    public function update()
    {
        $this->load->model("model_pegawai");
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

    public function hapus($id_fasilitator)
    {
        $id['id_fasilitator'] = $this->uri->segment(3);

        $this->model_fasilitator->hapus($id);

        //redirect
        redirect('Admin/');

    }
	
	
}
