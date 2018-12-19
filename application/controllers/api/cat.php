<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(dirname(__FILE__) . "/Line.php");
class Cat extends Line
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->model('cat_model', 'cat');
        $this->system = true;
    }
    public function addCat()
    {
        $data_update = file_get_contents('php://input');
        header('Access-Control-Allow-Origin: *');

        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->insert($user['user']['member_id']);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'msg' => 'CREATED CAT'
                );
            } else {
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    public function EditCat($cat_id)
    {
        $data_update = file_get_contents('php://input');
        header('Access-Control-Allow-Origin: *');
        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->EditCat($cat_id);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'msg' => 'Update success'
                );
            } else {
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }

    public function viewcat($id)
    {
        $rs = $this->cat->viewcat($id);
        $date_split = explode("-", $rs->cat_birthdate);
        $date_now = explode("-", date('Y-m-d', time()));
        $y = $date_now[0] - $date_split[0];
        $m = $date_now[1] - $date_split[1];
        $d = $date_now[2] - $date_split[2];
        $rs->age = $y . ' ปี ' . $m . ' เดือน ' . $d . ' วัน';
        $output = array(
            'status' => 200,
            'viewcat' => $rs
        );
        header('Access-Control-Allow-Origin: *');
        die(json_encode($output));


    }
    public function showcat($page)
    {

        $output = array(
            'status' => 200,
            'page_now' => (int)$page,
            'page_all' => $this->cat->showcatall(),
            'showcat' => $this->cat->showcat($page),
        );
        header('Access-Control-Allow-Origin: *');
        die(json_encode($output));

    }

    public function mycat()
    {
        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->mycat($user['user']['member_id']);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'mycat' => $result['data']
                );
            } else {
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    public function catmatch($cat_id,$cat_sex)
    {
       
        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->catmatch($user['user']['member_id'],$cat_id,$cat_sex);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'catmatch' => $result['data']
                );
            } else {
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    public function show_editcat($cat_id)
    {
        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->show_editcat($cat_id);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'data' => $result['data']
                );
            } else {
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }

    public function search($page = 1)
    {
        $output = array(
            'status' => 200,
            'page_now' => (int)$page,
            'page_all' => $this->cat->search('page_all'),
            'showcat' => $this->cat->search('showcat', $page),
        );
        header('Access-Control-Allow-Origin: *');
        die(json_encode($output));

    }

    public function delete($cat_id)
    {

        header('Access-Control-Allow-Origin: *');
        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->delete($cat_id);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'msg' => 'delete success'
                );
            } else {
                $output = array(
                    'status' => 400,
                    'msg' => $result['msg']
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    public function delete_img($cat_id,$id)
    {

        header('Access-Control-Allow-Origin: *');
        $user = $this->getUser();
        if ($user['status'] == 200) {
            $result = $this->cat->delete_img($cat_id,$id);
            if ($result['status']) {
                $output = array(
                    'status' => 200,
                    'msg' => 'delete_img success'
                );
            } else {
                $output = array(
                    'status' => 400,
                );
            }
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        } else {
            $output = array('status' => 400, 'msg' => 'Error access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
}