<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Line.php");
class user extends Line{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
        $this->load->model('cat_model','cat');
        $this->system = true;
    }
    public function update(){
        $user = $this->getUser();
        if($user['status'] == 200){
            $result=$this->user->update($user['user']['member_userid']);
            if($result['status']){
                $output = array(
                    'status' => 200,
                    'msg' => 'Update'
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