<?php 
class Register_model extends CI_Model{

    public function register_user($user_details){
        $this->db->insert('user_registration',$user_details);
        $return_value=$this->db->insert_id();
        return $return_value;

    }
}

?>