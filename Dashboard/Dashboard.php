<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function index(){
		$this->load->view("Dashboard/index");
		
}

