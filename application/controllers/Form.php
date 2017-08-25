<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/wrapper', $data, FALSE);
	}
		public function produktif()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/produktif/wrapper', $data, FALSE);
	}
		public function inves()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/produktif/investor/wrapper', $data, FALSE);
	}
		public function pengelola()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/produktif/pengelola/wrapper', $data, FALSE);
	}
		public function konsumtif()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/konsumtif/wrapper', $data, FALSE);
	}
		public function data()
	{
		$data = array(  'title'		=> 'Fintech P2P | FINANCIAL TECHNOLOGY');
		$this->load->view('front/part/konsumtif/form/wrapper', $data, FALSE);
	}
}

