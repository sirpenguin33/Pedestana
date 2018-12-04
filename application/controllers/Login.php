<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model 
		$this->load->model('model_login');
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
		$data=$this->model_login->cek_login("login",$where)->row();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			if($data->job=='bnpb'){
			redirect("/BNPB",$data);
			}else if($data->job=='fasilitator'){
				redirect("/FASILITATOR",$data);
			}else{
				redirect("/ADMIN",$data);
			}
		}else{
			redirect("Pengunjung/");
		}
		
	}
	
	function logout(){
	$this->session->sess_destroy();
	redirect(base_url('index.php/Login'));
}
	
}
