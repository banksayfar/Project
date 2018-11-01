<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cat_model extends CI_Model {
	public function viewcat(){		
		$query = $this->db->get_where('cat', 
						array(
							'member_id' =>  $this->session->data->member_id,
							'cat_display' =>  true ,
						)
			);
		if ($query->num_rows() > 0) {
			return $query->result();
				
		}else{
			return false;
		}
	}
	public function insert($member_id=0){
		$data_insert = json_decode(file_get_contents('php://input'));
        if(is_object($data_insert)){	
			$data = array(
				'member_id' => $member_id,
				'cat_name' => $data_insert->form->cat_name,
				'cat_birthdate' => $data_insert->form->cat_birthdate,
				'cat_sex' => $data_insert->form->cat_sex,
				'cat_breed' => $data_insert->form->cat_breed,
				'cat_habit' => $data_insert->form->cat_habit,
				'cat_status' => $data_insert->form->cat_status,
				'cat_description' => $data_insert->form->cat_description,
				'cat_display' => true,
				

			);
			$this->db->insert('cat', $data);
			return array('status' => true);
		}else{
			return array('status' => false,'msg' => 'Error Incorrect information.');
		}	
	}
	public function editCat(){	
		$data = array(
			
			'cat_name' => $this->input->post('cat_name'),
			'cat_birthdate' => $this->input->post('cat_birthdate'),
			'cat_sex' => $this->input->post('cat_sex'),
			'cat_breed' => $this->input->post('cat_breed'),
			'cat_habit' => $this->input->post('cat_habit'),
			'cat_status' => $this->input->post('cat_status'),
					
		);

		$this->db->where('cat_id',$this->input->post('cat_id'))->update('cat', $data);
		redirect(base_url('home/profile'));

	}
	public function showcountCat(){
	$query = $this->db->select('COUNT(member_id) as countT')->from('cat')->where('member_id',$this->session->data->member_id)->get();
	
		if ($query->num_rows() > 0) {
			return $query->result()[0]->countT; 
		}else{
			return false;
		}
		
	}
	public function catbreed(){		
		 	$query = $this->db->select('*')->from('cat_breed')->get();
		if ($query->num_rows() > 0) {
			return $query->result();
			
		}else{
			return false;
		}
	}

	public function provinces(){		
		$query = $this->db->select('*')->from('provinces')->get();
   if ($query->num_rows() > 0) {
	   return $query->result();
	   
   }else{
	   return false;
   }
}

	public function showcat($cat_id=0){	
		$query = $this->db->select('*')->from('cat')->get();
		if ($query->num_rows() > 0) {
			return $query->result();
			
		}else{
			return false;
		}
	}

	public function delete($cat_id=0){
		$data = array(
					`cat_display` => false,
		);

	print_r($this->db->where('cat_id',$this->input->get('cat_id'))->update('cat', $data) 
		);
	
		redirect(base_url('home/profile'));
	}
}