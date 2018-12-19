<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cat_model extends CI_Model
{
	public function viewcat($id)
	{
		// SELECT * FROM `cat` 
		// INNER JOIN cat_breed ON cat.cat_breed =cat_breed.catbreed_id 
		// INNER JOIN provinces ON cat.cat_provinces = provinces.id
		// INNER JOIN cat_img ON cat.cat_id = cat_img.cat_id
		$this->db->select('*');
		$this->db->from('cat');
		$this->db->join('cat_breed', 'cat.cat_breed = cat_breed.catbreed_id');
		$this->db->join('provinces', 'cat.cat_provinces = provinces.id');
		$this->db->where('cat_id',$id);
		$query = $this->db->get();
		$this->db->select('*');
		$this->db->from('cat_img');
		$this->db->where('cat_id',$id);
		$queryimg = $this->db->get();
		if ($query->num_rows() > 0) {
			$query->result()[0]->cat_imgs = $queryimg->result();
			return $query->result()[0];

		} else {
			return false;
		}
	}
	public function insert($member_id = 0)
	{
		$data_insert = json_decode(file_get_contents('php://input'));
		
		if (is_object($data_insert)) {
			
			$data = array(
				'member_id' => $member_id,
				'cat_name' => $data_insert->form->cat_name,
				'cat_birthdate' => $data_insert->form->cat_birthdate,
				'cat_sex' => $data_insert->form->cat_sex,
				'cat_breed' => $data_insert->form->cat_breed,
				'cat_provinces' => $data_insert->form->cat_provinces,
				'cat_status' => 'ว่าง',
				'cat_description' => $data_insert->form->cat_description,
				'cat_display' => 1,
			);
			$this->db->insert('cat', $data);
			$cat_id = $this->db->insert_id();
			$data_cat=$data_insert->form->cat_img;

			$insert_img = array();
			
			foreach ($data_cat as $key => $value) {
				$tmp = array(
					'name' => $value->name,
					'type' => $value->type,
					'base64' => $value->base64,
					'cat_id' => $cat_id,
				);
				array_push($insert_img,$tmp);
			}
			$this->db->insert_batch('cat_img', $insert_img);
			return array('status' => true);
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}

	public function showcountCat()
	{
		$query = $this->db->select('COUNT(member_id) as countT')->from('cat')->where('member_id', $this->session->data->member_id)->get();

		if ($query->num_rows() > 0) {
			return $query->result()[0]->countT;
		} else {
			return false;
		}

	}
	public function catbreed()
	{
		$query = $this->db->select('*')->from('cat_breed')->get();
		if ($query->num_rows() > 0) {
			return $query->result();

		} else {
			return false;
		}
	}

	public function provinces()
	{
		$query = $this->db->select('*')->from('provinces')->get();
		if ($query->num_rows() > 0) {
			return $query->result();

		} else {
			return false;
		}
	}

	public function showcat($page)
	{
		$path = ($page * 9) - 9;
		$query = $this->db->select('*')->from('cat')->where('cat_display', 1)->limit(9, $path)->get();
		if ($query->num_rows() > 0) {
			return $query->result();

		} else {
			return false;
		}
	}
	public function showcatall()
	{
		$query = $this->db->select('count(*) as countCat')->from('cat')->where('cat_display', 1)->get();
		if ($query->num_rows() > 0) {
			return ceil($query->result()[0]->countCat / 9);
			//$query->result();

		} else {
			return 0;
		}
	}
	public function search($type, $page = 1)
	{
		// INNER JOIN cat on cat_img.cat_id =cat.cat_id GROUP BY cat_img.`cat_id`
		$data = json_decode(file_get_contents('php://input'));
		$this->db->select('*')->from('cat')->join('cat_img','cat_img.cat_id =cat.cat_id')->where('cat_display', 1);
		// ->join('cat_img', 'cat.cat_id = cat_img.cat_id')
		if ($data->search->cat_provinces[0] != 'all') $this->db->where_in('cat_provinces', $data->search->cat_provinces);
		if ($data->search->cat_sex[0] != 'all') $this->db->where_in('cat_sex', $data->search->cat_sex);
		if ($data->search->cat_breed[0] != 'all') $this->db->where_in('cat_breed', $data->search->cat_breed);
		if ($data->search->cat_status[0] != 'all') $this->db->where_in('cat_status', $data->search->cat_status);
		if ($type == 'showcat') {
			$path = ($page * 9) - 9;
			$query = $this->db->GROUP_BY('cat_img.cat_id')->limit(9, $path)->order_by("cat.cat_id", "DESC")->get();
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return array();
			}
		} else if ($type == 'page_all') {
			$query = $this->db->get();
			$num_rows = $query->num_rows();
			if ($num_rows > 0) {
				return ceil($num_rows / 9);
			} else {
				return 1;
			}
		}

	}
	public function mycat($member_id)
	{
		$this->db->select('*')->from('cat')->join('cat_img','cat_img.cat_id =cat.cat_id')->where('member_id', $member_id)->GROUP_BY('cat_img.cat_id','cat_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return array('status' => true, 'data' => $query->result());
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	public function catmatch($member_id,$cat_id,$cat_sex)
	{	
		$data = array(
			'cat_sex' => (urldecode($cat_sex) == 'เพศผู้' ? 'เพศเมีย':'เพศผู้'),
			'member_id' => $member_id
		);
		print_r($data);
		die();
		
		$this->db->select('*')->from('cat')->join('cat_img','cat_img.cat_id =cat.cat_id')->where($data)->GROUP_BY('cat_img.cat_id','cat_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return array('status' => true, 'data' => $query->result());

		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	public function show_editcat($cat_id)
	{
		$query = $this->db->select('*')->from('cat')->where('cat_id', $cat_id)->get();
		$this->db->select('*');
		$this->db->from('cat_img');
		$this->db->where('cat_id',$cat_id);
		$queryimg = $this->db->get();
		if ($query->num_rows() > 0) {
			$query->result()[0]->cat_imgs = $queryimg->result();
			return array('status' => true, 'data' => $query->result()[0]);

		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}

	public function delete($cat_id = 0)
	{
		$data_update = json_decode(file_get_contents('php://input'));
		if (is_object($data_update)) {
			$data = array(
				'cat_display' => 0
			);
			$query = $this->db->where('cat_id', $cat_id)->update('cat', $data);
			return array('status' => true);
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	public function delete_img($cat_id,$id = 0)
	{
			
		$query = $this->db->where('cat_id', $cat_id)->get('cat_img');
		if ($query->num_rows() > 1) {
			$query = $this->db->where('id', $id)->delete('cat_img');
			return array('status' => true );
		}else{
			return array('status' => false );
		}

		
	
	}
	public function EditCat($cat_id = 0)
	{
		$data_update = json_decode(file_get_contents('php://input'));
		
		if (is_object($data_update)) {
			$data = array(
				'cat_id' => $cat_id,
				'cat_name' => $data_update->edit->cat_name,
				'cat_sex' => $data_update->edit->cat_sex,
				'cat_provinces' => $data_update->edit->cat_provinces,
				'cat_birthdate' => $data_update->edit->cat_birthdate,
				'cat_breed' => $data_update->edit->cat_breed,
				'cat_description' => $data_update->edit->cat_description,
			);
			$this->db->where('cat_id', $cat_id)->update('cat', $data);
			$data_cat=$data_update->edit->new_imgs;

			$insert_img = array();
			
			foreach ($data_cat as $key => $value) {
				$tmp = array(
					'name' => $value->name,
					'type' => $value->type,
					'base64' => $value->base64,
					'cat_id' => $cat_id,
				);
				array_push($insert_img,$tmp);
			}
			
			$this->db->insert_batch('cat_img', $insert_img);
			return array('status' => true);
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
}