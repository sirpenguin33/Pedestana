<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
class model_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('login')
                 ->order_by('id', 'ASCD')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("login", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
	
	public function search($keyword){
		$query=$this->db->select('*')
			    ->from('login')
				->like('username',$keyword)
				->or_like('job')
				->get();
		return $query->result();
		
	}
	public function find_id($username){
		$query=$this->db->select('*')
					->from('login')
					->where('username',$username)
					->get();
		return $query->row();
		
	}
    public function edit($ID)
    {

        $query = $this->db->where("id", $ID)
                ->get("login");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('id',$ID)->update("login", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("login", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }
	public function hapus_fasilitator($ID_FASILITATOR){
		$query=$this->db->delete('login',array('ID_FASILITATOR'=>$ID_FASILITATOR));
	 if($query){
            return true;
        }else{
            return false;
        }	
		
	}
	
		public function hapus_bnpb($ID_BNPB){
		$query=$this->db->delete('login',array('ID_BNPB'=>$ID_BNPB));
	 if($query){
            return true;
        }else{
            return false;
        }	
		
	}
	
}