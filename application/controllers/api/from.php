<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Line.php");
class From extends Line
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->model('cat_model', 'cat');
        $this->system = true;
    }
    public function showfrom()
    {
            $output = array(
                'provinces' => $this->cat->provinces(),
                'catbreed' => $this->cat->catbreed(),
            );
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        
    }
}
