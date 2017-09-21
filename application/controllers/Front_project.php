<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_project extends CI_Controller 
{

	public function index()
	{
		$this->template->display('home');
	}
}