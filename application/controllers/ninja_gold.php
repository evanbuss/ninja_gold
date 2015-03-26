<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninja_Gold extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	public function process_money()
	{
		$building = $this->input->post('building');
		if(empty($this->session->userdata('message')))
		{
			$messages = array();
		}

		$messages = $this->session->userdata('message');

		if($building == "farm")
		{
			$gold = rand(10,20);
			$total = $this->session->userdata('gold') + $gold;
			$this->session->set_userdata('gold', $total);
			$this->session->set_userdata('total',$total);
			$messages[] =  "<div class='green'> You entered a farm and earned ". $gold . " golds (" . date("Y-m-d h:i:sa"). ") </div>";
			$this->session->set_userdata('message',$messages);
		}

		elseif($building == "cave")
		{
			$gold = rand(5,10);
			$total = $this->session->userdata('gold') + $gold;
			$this->session->set_userdata('gold', $total);
			$this->session->set_userdata('total',$total);
			$messages[] =  "<div class='green'> You entered a cave and earned ". $gold . " golds (" . date("Y-m-d h:i:sa"). ") </div>";
			$this->session->set_userdata('message',$messages);
		}

		elseif($building == "house")
		{
			$gold = rand(2,5);
			$total = $this->session->userdata('gold') + $gold;
			$this->session->set_userdata('gold', $total);
			$this->session->set_userdata('total',$total);
			$messages[] =  "<div class='green'> You entered a house and earned ". $gold . " golds (" . date("Y-m-d h:i:sa"). ") </div>";
			$this->session->set_userdata('message',$messages);
		}

		elseif($building == "casino")
		{
			$gold = rand(-50,50);
			$total = $this->session->userdata('gold') + $gold;
			$this->session->set_userdata('gold', $total);
			$this->session->set_userdata('total',$total);
			if($gold > 0)
				{
			 	$messages[] =  "<div class='green'> You entered a casino and earned ". $gold . " golds (" . date("Y-m-d h:i:sa"). ") </div>";
				$this->session->set_userdata('message',$messages);
				}
			else
				{
				$messages[] =  "<div class='red'> You entered a casino and lost ". $gold . " golds...  Ouch.. (" . date("Y-m-d h:i:sa"). ") </div>";
				$this->session->set_userdata('message',$messages);
				}
		} 
		redirect('/');

	}
}

//end of main controller