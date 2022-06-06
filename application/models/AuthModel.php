<?php


class AuthModel extends CI_Model {

    function check_login($email,$password){

        $query = $this->db->get_where('tbl_user', array('email'=>$email, 'password'=>$password));
        // $this->db->select('*');
        // $this->db->from('user');
        // $this->db->where('email',$email);
        // $this->db->where('password',$password);
        // $this->db->status('status',0);

        // $query = $this->db->get();
        return $query->row_array();
        // if($query->num_rows()>0){
        //     return $query->result_array();
        // }else{
        //     return false;
        // }

        
		
		

    }

    function signup($data){
        $this->db->insert('tbl_user',$data);
        return $this->db->insert_id();
    }

    function reg_profile($data){
        $this->db->insert('tbl_member',$data);
        return $this->db->insert_id();

    }
}