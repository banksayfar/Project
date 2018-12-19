<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Line extends CI_Controller
{
    private $CONFIG = array();
    protected $system = false;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->model('cat_model', 'cat');
        // $this->system = true;
        $this->CONFIG = array(
            'baseurl' => 'http://localhost:8080/callback',//base_url('line/callback'),
            'client_id' => '1587152742',
            'client_secret' => '9309eb2716f0859d61b63b4d7f370152',
        );
        // $this->load->model('member','user');

    }



    public function getlinklogin()
    {  
        // if($this->input->get('code')){
        $oauth_authorize = array(
            'response_type' => 'code',
            'client_id' => $this->CONFIG['client_id'],
            'redirect_uri' => $this->CONFIG['baseurl'],
            'state' => session_id()
        );
        $output = array(
            'status' => 200,
            'url' => 'https://access.line.me/dialog/oauth/weblogin?' . http_build_query($oauth_authorize),
        );
        header('Access-Control-Allow-Origin: *');
        die(json_encode($output));

    }
    public function callback()
    {
        if ($this->input->get('code') && $this->input->get('state')) {
            $parameter = array(
                'grant_type' => 'authorization_code',
                'code' => trim($this->input->get('code')),
                'redirect_uri' => $this->CONFIG['baseurl'],
                'client_id' => $this->CONFIG['client_id'],
                'client_secret' => $this->CONFIG['client_secret']
            );
            $accessToken = $this->getAccessToken($parameter);
            if ($accessToken) {
                $output = array('status' => 200, 'access_token' => $accessToken);
                header('Access-Control-Allow-Origin: *');
                die(json_encode($output));
            } else {
                $output = array('status' => 400, 'msg' => 'Error Token Login Line#1');
                header('Access-Control-Allow-Origin: *');
                die(json_encode($output));
            }
        } else {
            $output = array('status' => 400, 'msg' => 'Error input params code,state');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    public function getUser()
    {
        $tmp = json_decode(file_get_contents('php://input'));

        file_put_contents('log.json', json_encode($tmp), FILE_APPEND);
        if ($tmp->access_token) {
            $accessToken = $tmp->access_token;
            $getUser = $this->getProfile($accessToken);
            if (!is_object($getUser) || !$getUser->userId) {
                $output = array('status' => 400, 'msg' => 'Error access_token expired.');
                header('Access-Control-Allow-Origin: *');
                die(json_encode($output));
            }

            $data['user'] = array();

            $rs = $this->db->get_where(
                'member',
                array(
                    'member_userid' => $getUser->userId
                )
            );
            if ($rs->num_rows() == 0) {
                $insert = array(
                    'member_displayname' => $getUser->displayName,
                    'member_userid' => $getUser->userId,
                    'member_pictureurl' => $getUser->pictureUrl,
                );

                $this->db->insert('member', $insert);
                $users_id = $this->db->insert_id;

                // $users_id = $this->user->add($insert);
                // $this->user->query($getUser->userId);
                // if(!$users_id) redirect($this->CONFIG['baseurl']);
                $data['user'] = $this->db->where('member_userid', $getUser->userId)->get('member')->result_array()[0];
            } else {
                $update = array(
                    'member_pictureurl' => $getUser->pictureUrl
                );
                $this->db->where('member_userid', $getUser->userId)->update('member', $update);
                $data['user'] = $this->db->where('member_userid', $getUser->userId)->get('member')->result_array()[0];
            }
            $data['status'] = 200;
            header('Access-Control-Allow-Origin: *');
            if ($this->system) return $data;
            else die(json_encode($data));
        } else {
            $output = array('status' => 400, 'msg' => 'Error input params access_token');
            header('Access-Control-Allow-Origin: *');
            die(json_encode($output));
        }
    }
    private function getAccessToken($parameter = array())
    {
        $response = json_decode($this->curl('https://api.line.me/v2/oauth/accessToken', $parameter, 'POST'));
        return isset($response->access_token) ? $response->access_token : false;
    }
    private function getProfile($access_token = '')
    {
        if ($access_token == '') return false;
        $response = json_decode($this->curl('https://api.line.me/v2/profile', array(), 'GET', array('Authorization: Bearer ' . $access_token)));
        return isset($response->userId) ? $response : false;
    }
    private function curl($url = null, $parameter = array(), $method = 'GET', $header = array())
    {
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => $method
        );
        if (!empty($parameter)) $options[CURLOPT_POSTFIELDS] = http_build_query($parameter);
        if (!empty($header)) $options[CURLOPT_HTTPHEADER] = $header;
        $curl = curl_init();
        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    private function curljson($url = null, $parameter = null, $method = 'GET', $header = array())
    {
        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => $method
        );
        if (!empty($parameter)) $options[CURLOPT_POSTFIELDS] = $parameter;
        if (!empty($header)) $options[CURLOPT_HTTPHEADER] = $header;
        $curl = curl_init();
        curl_setopt_array($curl, $options);
        $response = curl_exec($curl);
        curl_close($curl);
        // echo($response);
        return $response;
    }

    public function callbackbot()
    {
        require_once('botline.php');
        $botline = new Botline('1587219476', 'eb6a5c29000b0a633432621fabab7b13');
        $obj = json_decode($botline->getTokenForChanal());
        $strAccessToken = $obj->access_token;
        $data = json_decode(file_get_contents('php://input'));
        $header = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $strAccessToken,
        );
        if (isset($data->events[0]->postback->data)) {
            parse_str($data->events[0]->postback->data, $postback);
            $state = false;
            if ($postback['action'] == 'confirm') {
                $state = $this->cat->callbackbot($postback['action'], $postback['matching_id']);
                $parameter = array(
                    'to' => $data->events[0]->source->userId,
                    'messages' => array(
                        array(
                            'type' => 'text',
                            'text' => 'การจับคู่แมวของคุณเสร็จสิ้น !!',
                        ),
                    )
                );
            } elseif ($postback['action'] == 'cancel_confirm') {
                $state = $this->cat->callbackbot($postback['action'], $postback['matching_id']);
                $parameter = array(
                    'to' => $data->events[0]->source->userId,
                    'messages' => array(
                        array(
                            'type' => 'text',
                            'text' => 'ยกเลิกการจับคู่แมวแล้ว !!',
                        ),
                    )
                );
            }
            if($state) $this->curljson('https://api.line.me/v2/bot/message/push', json_encode($parameter), 'POST', $header);
            else {
                $parameter = array(
                    'to' => $data->events[0]->source->userId,
                    'messages' => array(
                        array(
                            'type' => 'text',
                            'text' => 'ไม่สามารถทำรายการได้ !!',
                        ),
                    )
                );
                $this->curljson('https://api.line.me/v2/bot/message/push', json_encode($parameter), 'POST', $header);
            }
            die();
        }
    }

    public function sendlineofmatch($cat_id, $catmacth_id)
    {
        require_once('botline.php');
        $this->system = true;
        $user = $this->getUser();
        $result = $this->cat->sendlineofmatch($user['user']['member_id'], $cat_id, $catmacth_id);
        $botline = new Botline('1587219476', 'eb6a5c29000b0a633432621fabab7b13');
        $obj = json_decode($botline->getTokenForChanal());
        $strAccessToken = $obj->access_token;
        if ($result['status']) {
            $parameter = array(
                'to' => $result['member_userid'],
                'messages' => array(
                    array(
                        'type' => 'template',
                        'altText' => 'มีคนต้องการจับคู่กับแมวของคุณ',
                        'template' => array(
                            'type' => 'buttons',
                            // 'thumbnailImageUrl' => 'https://www.catster.com/wp-content/uploads/2018/07/Savannah-cat-long-body-shot.jpg',
                            'title' => 'มีคนต้องการจับคู่กับแมวของคุณ',
                            'text' => 'มีคนต้องการจับคู่กับแมวของคุณ',
                            'actions' => array(
                                array(
                                    'type' => 'uri',
                                    'label' => 'ดูรายละเอียดของคุณ',
                                    'uri' => 'https://af79b15d.ngrok.io/product/'.$catmacth_id,
                                ),
                                array(
                                    'type' => 'uri',
                                    'label' => 'ดูรายละเอียดของผู้จับคู่',
                                    'uri' => 'https://af79b15d.ngrok.io/product/'.$cat_id,
                                ),
                                array(
                                    "type" => "postback",
                                    'label' => 'Yes',
                                    'text' => 'Yes',
                                    "data" => "action=confirm&matching_id=".$result['matching_id']
                                ),
                                array(
                                    "type" => "postback",
                                    'label' => 'No',
                                    'text' => 'No',
                                    "data" => "action=cancel_confirm&matching_id=" . $result['matching_id']
                                ),
                            )
                        ),
                    ),
                )
            );

            $header = array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $strAccessToken,
            );
            $this->curljson('https://api.line.me/v2/bot/message/push', json_encode($parameter), 'POST', $header);
            $output = array(
                'status' => 200,
                'ME' => $result['data']
            );
        } else {
            $output = array(
                'status' => 400,
                'msg' => $result['msg']
            );
        }
        header('Access-Control-Allow-Origin: *');
        die(json_encode($output));
    }

}
