<?php
class User_model extends CI_Model{

    public function create_user($data){
        $this->db->insert('users',$data);
        $return_value=$this->db->insert_id();
        return $return_value;
    }

    public function loginvalidation($username,$password)
    {
        $this->db->select('*');
        $this->db->from('user_registration');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get();
        $return_array=$query->row_array();
        if(sizeof($return_array)!=0){
            return $return_array;
        }else{
            return 0;
        }

    }
    public function inserteducation_content($question_content)
    {
        $this->db->insert('question',$question_content);
        //$return_value=$this->db->inser_id();
        //return $return_value;

    }

    public function getquestiondetails()
    {
     $query=$this->db->query('select * from question');
     //$this->db->from('question'); 
     //$this->db->limit('10'); 
     return $query->result(); 
    }


}
?>