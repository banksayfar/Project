<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Line.php");
class Cat extends Line{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
        $this->load->model('cat_model','cat');
        $this->system = true;
    }
    public function addCat(){
        $user = $this->getUser();
        if($user['status'] == 200){
            $result=$this->cat->insert($user['user']['member_id']);
            if($result['status']){
                $output = array(
                    'status' => 200,
                    'msg' => 'CREATED CAT'
                );
            }else{
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }else{
            $output = array('status' => 400,'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    
}