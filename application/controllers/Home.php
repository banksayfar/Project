<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
         $this->load->model('cat_model','cats');
         $this->load->model('user_model','user');
        
    }

	public function index()
	{	
		$this->load->view('header');
		// $data['showcats']=$this->cats->showcat();
		$this->load->view('index',$data);
		$this->load->view('footer');
	}


	public function profile(){	
		$this->load->view('header');

		$data['cats']=$this->cats->viewcat();
		$data['show_cat']=$this->cats->showcountCat($this->session->data->member_id);
		$data['profiles']=$this->user->viewprofile();
		$data['cat_breeds']=$this->cats->cat_breed();
		$data['provinces']=$this->user->provinces();

		$this->load->view('profile',$data);
		$this->load->view('cat',$data);
		// $result= $this->cats->delete($cat_id);
		$this->load->view('footer');

	}

	public function editprofile(){	
		$result= $this->user->update();
		redirect(base_url('home/profile'));
	}

	public function addcat(){	
		$result= $this->cats->addCat();
		redirect(base_url('home/profile'));
	}

	public function editcat(){	
		$result= $this->cats->editCat();
	
	}
	
public function displaycat($cat_id=0)
	{	
		$data['showcats'] = $this->cats->showcat($cat_id);
		$this->load->view('header');
		$this->load->view('displaycat',$data);				
		$this->load->view('footer');
	}

}
