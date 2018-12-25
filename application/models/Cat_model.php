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
		$data =array(
			'cat_id'=>$id,
			'matching_status'=> 1
			);
			$datas =array(
				'catmatch_id'=>$id,
				'matching_status'=> 1
			);
		// $querym = $this->db->select('*')->from('matching')->where($data)->or_where($datas)->get();
		//$datamacth = array('', 'matching.catmatch_id');,'matching.catmatch_id'
		$querym = $this->db->select('*')->from('matching')->join('cat','cat.cat_id = matching.catmatch_id')->where($datas)->where_in($data)->get();
		$queryma = $this->db->select('*')->from('matching')->join('cat','cat.cat_id = matching.cat_id')->where($datas)->where_in($data)->get();
		$this->db->select('*');
		$this->db->from('cat');
		$this->db->join('cat_breed', 'cat.cat_breed = cat_breed.catbreed_id');
		$this->db->join('provinces', 'cat.cat_provinces = provinces.id');
		$this->db->join('member', 'cat.member_id = member.member_id');
		$this->db->where('cat_id', $id);
		$query = $this->db->get();
		$this->db->select('*');
		$this->db->from('cat_img');
		$this->db->where('cat_id', $id);
		$queryimg = $this->db->get();
		if ($query->num_rows() > 0) {
			$query->result()[0]->cat_imgs = $queryimg->result();
			$query->result()[0]->catmatch0 =$querym->result();
			$query->result()[0]->catmatch1 =$queryma->result();
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
				'cat_vaccine'=> $data_insert->form->cat_vaccine,
				'cat_regispet'=> $data_insert->form->cat_regispet,
				'cat_expenses'=> $data_insert->form->cat_expenses,
				'cat_provinces' => $data_insert->form->cat_provinces,
				'cat_status' => 'ว่าง',
				'cat_description' => $data_insert->form->cat_description,
				'cat_display' => 1,
			);
			$this->db->insert('cat', $data);
			$cat_id = $this->db->insert_id();
			$data_cat = $data_insert->form->cat_img;

			$insert_img = array();

			foreach ($data_cat as $key => $value) {
				$tmp = array(
					'name' => $value->name,
					'type' => $value->type,
					'base64' => $value->base64,
					'cat_id' => $cat_id,
				);
				array_push($insert_img, $tmp);
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
		$this->db->select('*')->from('cat')->join('cat_img', 'cat_img.cat_id =cat.cat_id')->where('cat_display', 1);
		// ->join('cat_img', 'cat.cat_id = cat_img.cat_id')
		if ($data->search->cat_provinces[0] != 'all') $this->db->where_in('cat_provinces', $data->search->cat_provinces);
		if ($data->search->cat_sex[0] != 'all') $this->db->where_in('cat_sex', $data->search->cat_sex);
		if ($data->search->cat_breed[0] != 'all') $this->db->where_in('cat_breed', $data->search->cat_breed);
		if ($data->search->cat_status[0] != 'all') $this->db->where_in('cat_status', $data->search->cat_status);
		if ($data->search->cat_vaccine[0] != 'all') $this->db->where_in('cat_vaccine', $data->search->cat_vaccine);
		if ($data->search->cat_regispet[0] != 'all') $this->db->where_in('cat_regispet', $data->search->cat_regispet);
		if ($data->search->cat_expenses[0] != 'all') $this->db->where_in('cat_expenses', $data->search->cat_expenses);
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
		$this->db->select('*')->from('cat')->join('cat_img', 'cat_img.cat_id =cat.cat_id')->where('member_id', $member_id)->GROUP_BY('cat_img.cat_id', 'cat_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return array('status' => true, 'data' => $query->result());
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	public function catmatch($member_id, $cat_id, $cat_sex)
	{
		$data = array(
			'cat_sex' => (urldecode($cat_sex) == 'เพศผู้' ? 'เพศเมีย' : 'เพศผู้'),
			'member_id' => $member_id,
		);
		$data_cat = array(
			'member_id' => $member_id,
			'cat_id' => $cat_id,
		);
		$query =$this->db->select('*')->from('cat')->where($data_cat)->get();
		if($query->num_rows() > 0){
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
		$this->db->select('*')->from('cat')->join('cat_img', 'cat_img.cat_id =cat.cat_id')->where($data)->GROUP_BY('cat_img.cat_id', 'cat_id');
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
		$this->db->where('cat_id', $cat_id);
		$queryimg = $this->db->get();
		if ($query->num_rows() > 0) {
			$query->result()[0]->cat_imgs = $queryimg->result();
			return array('status' => true, 'data' => $query->result()[0]);

		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	public function sendlineofmatch($member_id, $cat_id, $catmatch_id)
	{	
		// SELECT * FROM `cat` INNER JOIN member ON cat.member_id = member.member_id
		$query = $this->db->select('*')->from('cat')->where('cat.cat_id', $catmatch_id)->get();
		$catmatch = $query->result()[0];

		$query = $this->db->select('*')->from('cat')->join('member', 'cat.member_id =member.member_id')->where('cat_id', $cat_id)->get();
		$cat = $query->result()[0];
		$data = array(
			'cat_id' => $cat_id,
			'catmatch_id' => $cat->cat_id
		);
		$status = array(0, 1, 2);
		$query = $this->db->select('COUNT(*) as count_check')->from('matching')->where($data)->where_in('matching_status', $status)->get();
		$check = $query->result()[0];
		if ($check->count_check != 0) {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
		$data = array(
			'member_id' => $member_id,
			'membermatch_id' => $cat->member_id,
			'cat_id' => $cat->cat_id,
			'catmatch_id' => $catmatch->cat_id,
			'matching_status' => 0
		);
		$this->db->insert('matching', $data);
		if ($query->num_rows() > 0) {
			return array('status' => true, 'matching_id' => $this->db->insert_id(), 'data' => $query->result(), 'member_userid' => $cat->member_userid);
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	public function callbackbot($type = 'cancel_confirm', $matching_id = 0)
	{
		$where = array(
			'matching_id' => $matching_id,
			'matching_status' => 0
		);
		$query = $this->db->select('COUNT(*) as count_check')->from('matching')->where($where)->get();
		$check = $query->result()[0];
		if ($check->count_check > 0) {
			$data_update = array(
				'matching_status' => ($type == 'confirm' ? 1 : 2)
			);
			$this->db->where($where)->update('matching', $data_update);
			return true;
		}
		return false;
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
	public function delete_img($cat_id, $id = 0)
	{

		$query = $this->db->where('cat_id', $cat_id)->get('cat_img');
		if ($query->num_rows() > 1) {
			$query = $this->db->where('id', $id)->delete('cat_img');
			return array('status' => true);
		} else {
			return array('status' => false);
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
				'cat_vaccine'=> $data_update->edit->cat_vaccine,
				'cat_regispet'=> $data_update->edit->cat_regispet,
				'cat_expenses'=> $data_update->edit->cat_expenses,
				'cat_breed' => $data_update->edit->cat_breed,
				'cat_description' => $data_update->edit->cat_description,
			);
			$this->db->where('cat_id', $cat_id)->update('cat', $data);
			$data_cat = $data_update->edit->new_imgs;

			$insert_img = array();

			foreach ($data_cat as $key => $value) {
				$tmp = array(
					'name' => $value->name,
					'type' => $value->type,
					'base64' => $value->base64,
					'cat_id' => $cat_id,
				);
				array_push($insert_img, $tmp);
			}

			$this->db->insert_batch('cat_img', $insert_img);
			return array('status' => true);
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	
	public function showreview($member_id= 0)
	{	
		$data =array(
		'matching.member_id'=>$member_id,
		'matching.matching_status'=> 1
		);
		$datas =array(
			'matching.membermatch_id'=>$member_id,
			'matching.matching_status'=> 1
		);
		$query = $this->db->select('*')->from('matching')->join('cat', 'cat.cat_id = matching.cat_id','matching.catmacth_id')->where($data)->or_where($datas)->get();
		$check = $query->result();
		
		$querycat = $this->db->select('*')->from('cat')->join('cat_img', 'cat_img.cat_id = cat.cat_id')->where('cat.cat_id',$check[0]->cat_id)->get();
		$querycatmacth = $this->db->select('*')->from('cat')->join('cat_img', 'cat_img.cat_id = cat.cat_id')->where('cat.cat_id',$check[0]->catmatch_id)->get();
		if ($query->num_rows() > 0) {
			return array('status' => true,
			'querycat' =>$querycat->result()[0],
			'querycatmacth' =>$querycatmacth->result()[0]);
		} else {
			return array('status' => false, 'msg' => 'Error Incorrect information.');
		}
	}
	
	
}