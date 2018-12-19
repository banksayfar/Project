<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function viewprofile(){        
             $query = $this->db->get_where('member', 
                        array(
                            'member_id' =>  $this->session->data->member_id,
                        )
            );
        if ($query->num_rows() > 0) {
            return $query->result();
            
        }else{
            return false;
        }
    }

    public function update($member_id=0){
        $data_update = json_decode(file_get_contents('php://input'));
        if(is_object($data_update)){
            $data = array(
                'member_displayname' => $data_update->form->member_displayname,
                'member_phone' =>$data_update->form->member_phone,
                'member_status' =>$data_update->form->member_status,
                'facebook' =>$data_update->form->facebook,
                'urlfacebook' =>$data_update->form->urlfacebook,
                'line' =>$data_update->form->line,
            );
            
            $this->db->where('member_userid',$member_id)->update('member', $data);
                   return array('status' => true);
                 
        }else{
            return array('status' => false,'msg' => 'Error Incorrect information.');
        }
    }

}  