<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_bnpb extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('bnpb')
                 ->order_by('ID', 'ASCD')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("bnpb", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($ID)
    {

        $query = $this->db->where("ID", $ID)
                ->get("bnpb");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $ID)
    {

        $query = $this->db->where('ID',$ID)->update("bnpb", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($ID)
    {

        $query = $this->db->delete("bnpb", $ID);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}