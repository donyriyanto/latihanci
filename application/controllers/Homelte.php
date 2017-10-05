<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homelte extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/headerlte');
        $this->load->view('templates/sidebarlte');
        $this->load->view('inventorylte');
        $this->load->view('templates/footerlte');
	}
}
