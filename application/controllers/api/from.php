<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Line.php");
class From extends Line{
    public function __construct(){
        parent::__construct();
        $this->load->model('user_model','user');
        $this->load->model('cat_model','cat');
        $this->system = true;
    }
    public function showfrom(){
        $user = $this->getUser();
        if($user['status'] == 200){
            $output = array(
                'status' => 200,
                'provinces' => $this->cat->showcat(),
                'catbreed' => $this->cat->catbreed(),
                'showcat' => $this->cat->showcat(),
            );
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }else{
            $output = array('status' => 400,'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    
     
}
