<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/wrapper', $data, FALSE);
	}
}
