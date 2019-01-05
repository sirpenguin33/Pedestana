<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->model('model_login');
		$this->load->model('model_fasilitator');
		$this->load->model('model_bnpb');
		$this->load->model('model_desa');
		$this->load->model('model_laporan');
		
		$this->load->helper('url');
		

    }
	public function index()
	{
		$this->load->view('Login/Login_Page');
	}
	
	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->model_login->cek_login("login",$where)->num_rows();
		$data['data_login']= $this->model_login->cek_login("login",$where)->row();
		$jumlah_laporan=$this->model_laporan->get_new()->jumlah;
		$data_bnpb=$this->model_bnpb->get_user($data['data_login']->ID_bnpb);
		$data_fasilitator=$this->model_fasilitator->get_user($data['data_login']->ID_fasilitator)->row();
		
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "haloo",
				'data_laporan' => $this->model_laporan->get_all()
				);
 
			$id_fasilitator=$data['data_login']->ID_fasilitator;
			
			if($data['data_login']->job=='bnpb'){
			$data_session['data_bnpb']=$data_bnpb;
			$data_session['id_bnpb']=$data['data_login']->ID_bnpb;
			
			
			$this->session->set_userdata($data_session);
			 redirect("/BNPB");
			}else if($data['data_login']->job=='fasilitator'){
				$data_session['data_fasilitator']=$data_fasilitator;
				$data_session['laporan_fasilitator']=$this->model_laporan->get_laporan($data_fasilitator->ID_fasilitator);
				$data_session['jumlah_laporan']=$this->model_laporan->get_proses($data_fasilitator->ID_fasilitator);
				$this->session->set_userdata($data_session);
				redirect("/Fasilitator");
			}else{
				$this->session->set_userdata($data_session);
				redirect('/Admin');
			}
		}else{
			redirect("/Login");
		}
		
	}
	
	function logout(){
	$this->session->sess_destroy();
	redirect(base_url('index.php/Login'));
}

    public function simpan()
    {
        $user=$this->input->post("user");
		$job=$this->input->post("job");
		$user=trim($user)."@".$job;
		$data = array(

            'username'       => $user,
            'password'         => md5($this->input->post("password")),
            'job'    => $this->input->post("job"),
			);

        $this->model_login->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('Admin/');

    }

	
}
